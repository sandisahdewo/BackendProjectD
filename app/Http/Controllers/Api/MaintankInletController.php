<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\MaintankInlet;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\MaintankInlet\StoreRequest;
use App\Http\Requests\Api\MaintankInlet\UpdateRequest;
use App\Http\Resources\MaintankInlet as MaintankInletResource;

class MaintankInletController extends Controller
{
    public function index()
    {
        return MaintankInletResource::collection(MaintankInlet::get());
    }

    public function create()
    {
        //
    }

    public function store(StoreRequest $request)
    {
        $input = $request->all();
        try {
            MaintankInlet::create($input);
        } catch(\Exception $e) {
            return response()->json([
                'message' => $e
            ], 500);
        }

        return response()->json([
            'message' => 'Berhasil menyimpan maintank inlet'
        ]);
    }

    public function show(MaintankInlet $maintankInlet)
    {
        return new MaintankInletResource($maintankInlet);
    }

    
    public function edit(MaintankInlet $maintankInlet)
    {
        //
    }

    public function update(UpdateRequest $request, MaintankInlet $maintankInlet)
    {
        $input = $request->all();
        try {
            $maintankInlet->update($input);
        } catch(\Exception $e) {
            return response()->json([
                'message' => $e
            ], 500);
        }

        return response()->json([
            'message' => 'Berhasil memperbarui maintank inlet'
        ]);
    }

    public function destroy(MaintankInlet $maintankInlet)
    {
        try {
            $maintankInlet->delete();
        } catch(\Exception $e) {
            return response()->json([
                'message' => $e
            ], 500);
        }

        return response()->json([
            'message' => 'Berhasil menghapus maintank inlet'
        ]);
    }
}
