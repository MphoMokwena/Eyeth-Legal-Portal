<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    
    //Connect to Database Table
    protected $table = 'application_forms';
    // protected $guarded = array();
    // protected $table = 'application_forms'; 
    // public $timestamps = 'true' ; 

    // model function to store form data to database
    // public static function saveFormData($data)
    // {
    //     DB::table('application_forms')->insert($data);
    // }
}
