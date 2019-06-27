<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Api\Login\AttemptRequest;

class LoginController extends Controller
{
    public function attempt(AttemptRequest $request)
    {
        if(Auth::attempt(['username' => $request->username, 'password' => $request->password, 'status' => 'aktif'])) {
            $token = auth()->user()->createToken('Personal Access Token')->accessToken;
            return response()->json([
                'success' => true,
                'message' => 'Berhasil login',
                'access_token' => $token
            ]);
        }
        return response()->json([
            'success' => false,
            'message' => 'no'
        ]);
    }
}
