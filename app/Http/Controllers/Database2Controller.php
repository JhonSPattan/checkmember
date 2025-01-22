<?php

namespace App\Http\Controllers;

use App\Repository\Database2Repository;
use Illuminate\Http\Request;

class Database2Controller extends Controller
{
    public static function getAllMembers(){
        $members = Database2Repository::getAll();
        return view('allmms', ['members' => $members]);
    }


    public static function findMemberlikeId(Request $request){
        if($request->has('item')){
            return  response()->json(Database2Repository::findMemberBylikeId($request->input('item')));
        }
    }

}
