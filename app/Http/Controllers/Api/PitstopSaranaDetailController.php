<?php

namespace App\Http\Controllers\Api;

use App\Models\PitstopSarana;
use App\Models\PitstopSaranaDetail;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\PitstopSaranaDetail\StoreRequest;
use App\Http\Requests\Api\PitstopSaranaDetail\UpdateRequest;
use App\Http\Resources\PitstopSaranaDetail as PitstopSaranaDetailResource;

class PitstopSaranaDetailController extends Controller
{

    public function index()
    {
        $pitstopSaranaDetail = PitstopSaranaDetail::where('created_by', auth()->user()->id)
                                                  ->get();

        return PitstopSaranaDetailResource::collection($pitstopSaranaDetail);
    }

    public function store(StoreRequest $request)
    {
        $input = $request->all();

        $pitstopSarana = PitstopSarana::find($input['pitstop_sarana_id']);

        $pitstopSarana->pitstopSaranaDetail()->create($input);

        return response()->json([
            'success' => true
        ]);
    }

    public function find(PitstopSaranaDetail $pitstopSaranaDetail) 
    {
        return new PitstopSaranaDetailResource($pitstopSaranaDetail);
    }

    public function findLast()
    {
        $pitstopSaranaDetail = PitstopSaranaDetail::orderBy('id', 'desc')->first();

        return new PitstopSaranaDetailResource($pitstopSaranaDetail);
    }

    public function update(UpdateRequest $request, PitstopSaranaDetail $pitstopSaranaDetail)
    {
        $pitstopSaranaDetail->update($request->all());

        return response()->json([
            'success' => true
        ]);
    }

    public function delete(PitstopSaranaDetail $pitstopSaranaDetail)
    {
        $pitstopSaranaDetail->delete();

        return response()->json([
            'success' => true
        ]);
    }
}