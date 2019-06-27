<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->group(function() {
    Route::prefix('petugas')->group(function() {
        Route::get('', 'PetugasController@index');
        Route::post('store', 'PetugasController@store');
        Route::get('find/{petugas}', 'PetugasController@find');
        Route::post('update/{petugas}', 'PetugasController@update');
        Route::post('change-status-aktif/{petugas}', 'PetugasController@changeToActive');
        Route::post('change-status-nonaktif/{petugas}', 'PetugasController@changeToNonActive');
    });

    Route::prefix('maintank-inlet')->group(function() {
        Route::get('', 'MaintankInletController@index');
        Route::post('store', 'MaintankInletController@store');
        Route::get('show/{maintankInlet}', 'MaintankInletController@show');
        Route::post('update/{maintankInlet}', 'MaintankInletController@update');
        Route::post('destroy/{maintankInlet}', 'MaintankInletController@destroy');
    });
});

Route::prefix('login')->group(function() {
    Route::post('attempt', 'LoginController@attempt');
});