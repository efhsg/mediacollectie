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
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::group(['prefix' => 'v1'], function () {
    Route::resource('schijven', 'SchijfController', ['only' => ['index', 'show']]);
    Route::resource('bestanden', 'BestandController', ['only' => ['index', 'show']]);
    Route::resource('bestandstypes', 'BestandstypeController', ['only' => ['index', 'show']]);
    Route::resource('mappen', 'MapController', ['only' => ['index', 'show']]);
});