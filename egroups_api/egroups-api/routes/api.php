<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/egroups', function () {
    // do a get
});
Route::post('/egroups', function () {
    // do a post
});
Route::delete('/egroups', function () {
    // do a delete
});
Route::put('/egroups', function () {
    // do a put
});
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
