<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class CropModel extends Model
{
    use HasFactory;
    
    // protected $table = 'crop-model';
   
    public function getdata($input){

        DB::table('crop-models')->where('crop',$input[0])->where('location',$input[1])->get();
              
    }
}
