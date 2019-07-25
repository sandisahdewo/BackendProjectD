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

    Route::prefix('unit')->group(function() {
        Route::get('search', 'UnitController@search');
        Route::get('get', 'UnitController@get');
        Route::get('find/{id}', 'UnitController@find');
        Route::post('store', 'UnitController@store');
        Route::post('update/{id}', 'UnitController@update');
        Route::delete('destroy/{id}', 'UnitController@destroy');
    });

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
        Route::get('with-filter', 'PitstopSaranaController@getWithFilter');
        Route::get('find-by-creator-with-detail/{id}', 'PitstopSaranaController@findByCreatorWithDetail');
        Route::post('store', 'PitstopSaranaController@store');
        Route::get('find/{pitstopSarana}', 'PitstopSaranaController@find');
        Route::get('find-with-detail/{id}', 'PitstopSaranaController@findWithDetail');
        Route::post('update/{id}', 'PitstopSaranaController@update');
        Route::delete('delete/{pitstopSarana}', 'PitstopSaranaController@delete');

        Route::get('finish-input-detail/{id}', 'PitstopSaranaController@finishInputDetail');
        Route::get('approve/{id}', 'PitstopSaranaController@approve');
        Route::get('reject/{id}', 'PitstopSaranaController@reject');
        Route::get('export-excel/{id}', 'PitstopSaranaController@downloadExcel');
        Route::get('export-pdf/{id}', 'PitstopSaranaController@downloadPDF');
    });

    Route::prefix('pitstop-sarana-detail')->group(function() {
        Route::get('', 'PitstopSaranaDetailController@index');
        Route::post('store', 'PitstopSaranaDetailController@store');
        Route::get('find/{pitstopSaranaDetail}', 'PitstopSaranaDetailController@find');
        Route::get('find-last', 'PitstopSaranaDetailController@findLast');
        Route::post('update/{pitstopSaranaDetail}', 'PitstopSaranaDetailController@update');
        Route::delete('delete/{pitstopSaranaDetail}', 'PitstopSaranaDetailController@delete');
    });
});

Route::prefix('login')->group(function() {
    Route::post('attempt', 'LoginController@attempt');
});