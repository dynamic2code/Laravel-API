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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('data', function() {
    // input will be location and crop you want to search
    // data will include the location, crop, price, projected price, price trajectory
    $location = "location";
    $crop = "crop";
    $price = "price";
    $projectedPrice = "projected price";
    $priceTrajectory = "price trajectory";

    $data = ["location"=>$location,
             "crop"=> $crop,
             "currentPrice"=>$price,
             "projectedPrice"=> $projectedPrice,
             "price trajectory"=> $priceTrajectory
        ];
    return $data;
});
