<?php

namespace App\Repository;


use App\Models\MemberInput;
use Carbon\Carbon;

class MemberInputRepository{
    public static function getAllcheckin(){
        return MemberInput::all();
    }

    public static function checkIn($firstName, $lastName, $room, $staff_code){
        $memberInput = new MemberInput();
        $memberInput->firstName = $firstName;
        $memberInput->lastName = $lastName;
        $memberInput->datetime = Carbon::now();
        $memberInput->room = $room;
        $memberInput->memberId = $staff_code;
        $memberInput->save();
    }
}
