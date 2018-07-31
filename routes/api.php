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

Route::middleware('api')->get('/root', function (Request $request) {
    return $request->user();
});


Route::middleware('api')->get('/master', function (Request $request) {
    return $request->user();
});

Route::middleware('api')->get('/admin', function (Request $request) {
    return $request->user();
});

    Route::group(['middleware' => ['auth:api']], function () {
        Route::get('/test', function (Request $request) {
             return response()->json(['name' => 'test']);
        });
    });