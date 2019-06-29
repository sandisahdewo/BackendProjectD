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

    Route::prefix('pitstop-sarana')->group(function() {
        Route::get('', 'PitstopSaranaController@index');
        Route::post('store', 'PitstopSaranaController@store');
        Route::get('find/{pitstopSarana}', 'PitstopSaranaController@find');
        Route::patch('update/{pitstopSarana}', 'PitstopSaranaController@update');
        Route::delete('delete/{pitstopSarana}', 'PitstopSaranaController@delete');
    });

    Route::prefix('pitstop-sarana-detail')->group(function() {
        Route::get('', 'PitstopSaranaDetailController@index');
        Route::post('store/{pitstopSarana}', 'PitstopSaranaDetailController@store');
        Route::get('find/{pitstopSaranaDetail}', 'PitstopSaranaDetailController@find');
        Route::patch('update/{pitstopSaranaDetail}', 'PitstopSaranaDetailController@update');
        Route::delete('delete/{pitstopSaranaDetail}', 'PitstopSaranaDetailController@delete');
    });
});

Route::prefix('login')->group(function() {
    Route::post('attempt', 'LoginController@attempt');
});