<?php

namespace App\Http\Controllers;

use App\Models\CropModel;
use Illuminate\Http\Request;

class API_Controller extends Controller
{
    public function postData(){
        // from the api user
      

        $location = ('location');
        $crop = ('crop');
        
        $input = [$crop, $location];
        return $input;
    }

    public function getData($input){
        
        $fromDb = app(CropModel::class);
        $data = $fromDb -> getdata($input);
        
        return $data;
    }


}
