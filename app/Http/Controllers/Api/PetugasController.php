<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Petugas\StoreRequest;
use App\Http\Requests\Api\Petugas\UpdateRequest;
use App\Http\Requests\Api\Petugas\ChangePasswordRequest;
use App\Models\Petugas;
use App\User;
use App\Http\Resources\Petugas as PetugasResource;

class PetugasController extends Controller
{
    public function index()
    {
        return PetugasResource::collection(Petugas::get());
    }

    public function store(StoreRequest $request)
    {
        \DB::beginTransaction();
        try {
            $input = $request->all();

            $input['password'] = bcrypt('password');
            $user = User::create($input);

            $input['created_by'] = $user->id;
            $user->petugas()->create($input);

            \DB::commit();
        } catch (\Exception $e) {
            \DB::rollback();

            return response()->json([
                'message' => $e
            ], 500);
        }

        return response()->json([
            'message' => 'success'
        ]);
    }

    public function find(Petugas $petugas) 
    {
        return new PetugasResource($petugas);
    }

    public function update(UpdateRequest $request, Petugas $petugas) {
        try {
            $petugas->user()->update($request->all());
            $petugas = $petugas->update($request->all());
        } catch(\Exception $e) {
            return response()->json([
                'message' => $e
            ], 500);
        }

        return response()->json([
            'message' => "Berhasil mengubah petugas"
        ]);
    }

    public function toggleStatus(Petugas $petugas)
    {
        if($petugas->user->status == 'aktif') {
            $petugas->user->status = 'non-aktif';
        } else {
            $petugas->user->status = 'aktif';
        }

        $petugas->user->save();

        return response()->json([
            'message' => 'Berhasil mengganti status menjadi aktif',
        ]);
    }

    public function changePassword(ChangePasswordRequest $request, Petugas $petugas) 
    {
        $petugas->user->password = bcrypt($request->password);
        $petugas->user->save();

        return response()->json([
            'message' => 'Berhasil mengubah password.',
        ]);
    }
}
