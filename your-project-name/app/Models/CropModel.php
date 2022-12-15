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

        DB::table('crop_models')->where('crop','Beans')->where('location','nairobi')->get();
              
    }

}
