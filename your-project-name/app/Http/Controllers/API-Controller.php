<?php

namespace App\Http\Controllers;

use App\Models\CropModel;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function getData(){
        // input will be location and crop you want to search
        // data will include the location, crop, price, projected price, price trajectory

        // from db end point

        $location = "location";
        $crop = "crop";
        $price = "price";
        $projectedPrice = "projected price";
        $priceTrajectory = "price trajectory";

        $data = [$location,
                $crop,
                $price,
                $projectedPrice,
                $priceTrajectory
            ];
        return $data;
    }

    public function postData(){
        // from the api user
        $location = 'location';
        $crop = 'crop'; 

        $input = [$crop, $location];
        return $input;
    }
}
