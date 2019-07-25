<?php

namespace App\Http\Controllers\Api;

use App\Models\PitstopSarana;
use App\Exports\PitstopSaranaExport;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Api\PitstopSarana\StoreRequest;
use App\Http\Requests\Api\PitstopSarana\UpdateRequest;
use App\Http\Resources\PitstopSarana as PitstopSaranaResource;
use Maatwebsite\Excel\Excel;
use Illuminate\Support\Carbon;

class PitstopSaranaController extends Controller
{
    public function index()
    {
        $pitstopSarana = PitstopSarana::where('created_by', auth()->user()->id)
                                      ->when(request()->nomor, function($query) {
                                        $query->where('nomor', request()->nomor);
                                      })
                                      ->when(request()->line, function($query) {
                                        $query->where('line', request()->line);
                                      })
                                      ->when(request()->status, function($query) {
                                        $query->where('status', request()->status);
                                      })
                                      ->when(request()->shift, function($query) {
                                        $query->where('shift', request()->shift);
                                      })
                                      ->where(function($query) {
                                        if(request()->tanggal) {
                                            $query->where('tanggal', date_db(request()->tanggal));
                                        } else {
                                            $query->where('tanggal', date_db(now()));
                                        }
                                      })
                                      ->get();

        return PitstopSaranaResource::collection($pitstopSarana);
    }

    public function findByCreatorWithDetail($id)
    {
        $pitstopSarana = PitstopSarana::with('pitstopSaranaDetail')
                                      ->find($id);
        
        if(! $pitstopSarana) return $this->dataNotFound();

        return new PitstopSaranaResource($pitstopSarana);
    }

    public function getWithFilter() 
    {
        $pitstopSarana = PitstopSarana::when(request()->has('nomor') && request()->nomor != '', function($query) {
                                        $query->where('nomor', request()->nomor);
                                      })
                                      ->when(request()->has('status') && request()->status != '', function($query) {
                                        $query->where('status', request()->status);
                                      })
                                      ->when(request()->has('line') && request()->line != '', function($query) {
                                        $query->where('line', request()->line);
                                      })
                                      ->get();

        return PitstopSaranaResource::collection($pitstopSarana);
    }

    public function store(StoreRequest $request)
    {
        $input = $request->all();

        $input['petugas_pitstop'] = auth()->user()->id;
        $input['created_by'] = auth()->user()->id;
        $input['fuelman'] = auth()->user()->id;

        PitstopSarana::create($input);

        return response()->json([
            'success' => true
        ]);
    }

    public function find(PitstopSarana $pitstopSarana) 
    {
        return new PitstopSaranaResource($pitstopSarana);
    }

    public function findWithDetail($id) 
    {
        $pitstopSarana = PitstopSarana::with('pitstopSaranaDetail')->find($id);

        return new PitstopSaranaResource($pitstopSarana);
    }

    public function update(UpdateRequest $request, $id)
    {
        $pitstopSarana = PitstopSarana::find($id);
        $pitstopSarana->update($request->all());

        return response()->json([
            'success' => true
        ]);
    }

    public function delete(PitstopSarana $pitstopSarana)
    {
        $pitstopSarana->delete();

        return response()->json([
            'success' => true
        ]);
    }

    public function finishInputDetail($id)
    {
        $pitstopSarana = PitstopSarana::find($id);
        $newPitstopSarana = $pitstopSarana->replicate();
        $pitstopSarana->status = 'finish-input';
        $newPitstopSarana->save();
        $pitstopSarana->save();

        return response()->json([
            'success' => true,
            'data' => $newPitstopSarana
        ]);
    }

    public function approve($id)
    {
        $pitstopSarana = PitstopSarana::find($id);
        $pitstopSarana->update([
            'approved_by' => auth()->user()->id,
            'approved_at' => \Carbon\Carbon::now(),
            'status' => 'approved'
        ]);

        return response()->json([
            'success' => true
        ]);
    }

    public function reject($id)
    {
        $pitstopSarana = PitstopSarana::find($id);
        $pitstopSarana->update(['status' => 'rejected']);

        return response()->json([
            'success' => true
        ]);
    }

    public function downloadExcel($id)
    { 
        $pitstopSarana = PitstopSarana::with('pitstopSaranaDetail', 'pitstopSaranaDetail.unit')->find($id);

        $fuelman = $pitstopSarana->rfuelman->nama;
        $tanggal = $pitstopSarana->tanggal;
        $fileName = "pitstop-sarana - $fuelman - $tanggal";
        $fileNameWithDirectori = "public/pitstop-sarana/$fileName";
        $fileDirectoryWithExtension = $fileNameWithDirectori.'.xlsx';
        
        $downloadFile = $fileName.'.xlsx';
        
        $headers = [
            'Content-Type' => 'application/xlsx',
            'Content-Disposition' => 'attachment'
        ];
        
        // \Excel::store(new PitstopSaranaExport($pitstopSarana), $fileDirectoryWithExtension); 

        // return Storage::download($fileDirectoryWithExtension, $downloadFile, $headers);

        return (new PitstopSaranaExport($pitstopSarana))->download($downloadFile, Excel::XLSX, $headers);
    }

    public function downloadPDF($id)
    {
        $pitstopSarana = PitstopSarana::with('pitstopSaranaDetail', 'pitstopSaranaDetail.unit')->find($id);

        $fuelman = $pitstopSarana->rfuelman->nama;
        $tanggal = $pitstopSarana->tanggal;
        $fileName = "pitstop-sarana - $fuelman - $tanggal";
        $fileNameWithDirectori = "public/pitstop-sarana/pdf/$fileName";
        $fileDirectoryWithExtension = $fileNameWithDirectori.'.pdf';
        $downloadFile = $fileName.'.pdf';

        $headers = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment'
        ];
        
        $pdf = \PDF::loadView('pdf.pitstop-sarana.report', compact('pitstopSarana'));
        $pdf->setPaper('folio', 'portrait');

        return $pdf->stream($downloadFile);
        // return view('pdf.pitstop-sarana.report', compact('pitstopSarana'));
    }

}
