<?php

namespace App\Http\Controllers;

use App\Models\CropModel;
use Illuminate\Http\Request;

class API_Controller extends Controller
{
    public function postData(){
        // from the api user
        global $input;

        $location = ('nairobi');
        $crop = ('Beans');
        
        $input = [$crop, $location];
        return $input;
    }

    public function getData(){
        global $input;
        $fromDb = app(CropModel::class);
        $data = $fromDb -> getdata($input);
        
        return $data;
    }



}
