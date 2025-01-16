<?php

namespace App\Repository;
use App\Models\database2;
class Database2Repository
{
    public  static function getAll(){
        return database2::all();
    }


    public static function findMemberByname($fname,$lname){
        $memdata = database2::where('fname','=',$fname)->where('lname','=',$lname)->first();
        if(is_null($memdata)){
            return -1;
        }
        return $memdata->staff_code;
    }
}
