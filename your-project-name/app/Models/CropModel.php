<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CropModel extends Model
{
    use HasFactory;
    
    // protected $table = 'crop-model';
   
    public function getdata($input){

        $data = ("SELECT * FROM crop-model WHERE crop = '$input[0]' AND location = '$input[1]'");

        return $data;
    }
}
