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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/loginandroid', 'APIController@loginAndroid');
Route::post('/cekkodesesi', 'APIController@cekKodeSesi');
Route::post('/insertvote', 'APIController@insertVote');
Route::get('/kondisiabsen', 'APIController@kondisiAbsen');
Route::get('/kondisivote', 'APIController@kondisiVote');
