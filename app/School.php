<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class School extends Model
{
    protected $fillable=[
        'school_name',
        'school_address1',
        'school_address2',
        'school_city',
        'school_zip',
        'school_phone'
    ];
    
    public static function getAllSchools(){
        return \DB::table('schools')->orderBy('school_name')->get();
    }
}
