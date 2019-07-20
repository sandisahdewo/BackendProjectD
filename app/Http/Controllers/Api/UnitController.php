<?php

namespace App\Http\Controllers\Api;

use App\Models\Unit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Unit as UnitResource;
use App\Http\Requests\Api\Unit\StoreRequest;
use App\Http\Requests\Api\Unit\UpdateRequest;

class UnitController extends Controller
{
    public function search(Request $request) 
    {
        $unit = Unit::when($request->q, function($query) use ($request) {
                        $query->orWhere('kode_unit', 'like', '%'.$request->q.'%');
                        $query->orWhere('no_polisi', 'like', '%'.$request->q.'%');
                        $query->orWhere('tipe_unit', 'like', '%'.$request->q.'%');
                    })
                    ->get();

        return UnitResource::collection($unit);
    }

    public function get() 
    {
        $unit = Unit::when(request()->q, function($query){
                        $query->orWhere('kode_unit', 'like', '%'.request()->q.'%');
                        $query->orWhere('no_polisi', 'like', '%'.request()->q.'%');
                        $query->orWhere('tipe_unit', 'like', '%'.request()->q.'%');
                    })
                    ->orderBy('kode_unit')
                    ->paginate(25);
    
        return UnitResource::collection($unit);
    }

    public function find($id)
    {
        $unit = Unit::find($id);
        
        return new UnitResource($unit);
    }

    public function store(StoreRequest $request)
    {
        Unit::create($request->all());

        return response()->json([
            'success' => true
        ]);
    }

    public function update($id, UpdateRequest $request)
    {
        $unit = Unit::find($id);
        $unit->update($request->all());

        return response()->json([
            'success' => true
        ]);
    }

    public function destroy($id)
    {
        $unit = Unit::destroy($id);
        
        return response()->json([
            'success' => true
        ]);
    }

}
