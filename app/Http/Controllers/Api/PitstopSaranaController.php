<?php

namespace App\Http\Controllers\Api;

use App\Models\PitstopSarana;
use App\Http\Controllers\Controller;
use App\Http\Resources\PitstopSarana as PitstopSaranaResource;
use App\Http\Requests\Api\PitstopSarana\StoreRequest;
use App\Http\Requests\Api\PitstopSarana\UpdateRequest;

class PitstopSaranaController extends Controller
{
    public function index()
    {
        $pitstopSarana = PitstopSarana::where('created_by', auth()->user()->id)
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

    public function update(UpdateRequest $request, PitstopSarana $pitstopSarana)
    {
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
}
