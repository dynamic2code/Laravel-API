<?php

use App\Http\Controllers\API_Controller;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/getdata',[API_Controller::class,'getData($input)']);

Route::post('/postdata', [API_Controller::class,'postData']);

Route::get('/get', function(){
    return "prouct";
});