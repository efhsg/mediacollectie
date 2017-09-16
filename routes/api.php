<?php

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

Route::group(['prefix' => 'v1'], function () {
    Route::resource('schijven', 'SchijfController',
        [
            'only' => ['index', 'show'],
            'parameters' => ['schijven' => 'schijf']
        ]);
    Route::resource('bestanden', 'BestandController',
        [
            'only' => ['index', 'show'],
            'parameters' => ['bestanden' => 'bestand']
        ]);
    Route::resource('bestandstypes', 'BestandstypeController',
        [
            'only' => ['index', 'show']
        ]);
    Route::resource('mappen', 'MapController',
        [
            'only' => ['index', 'show'],
            'parameters' => ['mappen' => 'map']
        ]);
});

