<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operations\Services\AttendeeService;

class OpenController extends Controller
{
    function verify($ref){
       $attendee =  (new AttendeeService())->getAttendee($ref);

         return view('verify') ->with('attendee',$attendee)->with('message','success');
    }
}
