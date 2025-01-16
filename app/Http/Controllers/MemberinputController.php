<?php

namespace App\Http\Controllers;

use App\Repository\Database2Repository;
use App\Repository\MemberInputRepository;
use Illuminate\Http\Request;

class MemberinputController extends Controller{


    public static function memberCheckin(){
        return view('checkmember');
    }

    public static function memberSaveCheckin(Request $request){
        $fname = $request->fname;
        $lname = $request->lname;
        $staff_code = Database2Repository::findMemberByname($fname, $lname);
        MemberInputRepository::checkIn($fname,$lname,$request->room, $staff_code);
        $result = "ลูกค้า ".$fname;
        if($staff_code == -1){
            $result = $result." ไม่เป็นสมาชิก";

        }else{
            $result = $result." เป็นสมาชิก";
        }
        return redirect('/checkin')->with('result',$result);

    }
}
