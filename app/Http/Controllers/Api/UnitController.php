<?php

namespace App\Http\Controllers\Api;

use App\Models\Unit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Unit as UnitResource;

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

    public function find($id)
    {
        $unit = Unit::find($id);
        
        return new UnitResource($unit);
    }
}
