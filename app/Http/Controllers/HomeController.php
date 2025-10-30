<?php

namespace App\Http\Controllers;

use App\Models\Attendee;
use App\Models\Stafflist;
use Illuminate\Http\Request;
use App\Operations\PDF\PdfHandler;
use App\Jobs\ExportAndSendAttendeesJob;
use Illuminate\Support\Facades\Validator;
use App\Operations\Services\AttendeeService;
use Lunaweb\RecaptchaV3\Facades\RecaptchaV3;

class HomeController extends Controller
{
    function index() {
        return view('hmo');
    }

    function registerEvent(Request $request) {

        $request->validate([
            "name"=>'required|string',
            "department"=>'required|string',
            "staff_number"=>'required|numeric',
            "station"=>'required|string',
            "phone"=>'required|numeric',
            "nin"=>'required|numeric',
            "state_of_residence"=>'required|string',
            "hmo"=>'required|string',
        ]);




        // $validate = Validator::make($request->all(), [
        //     'g-recaptcha-response' => 'required|recaptchav3:register,0.5'
        // ]);

        // RecaptchaV3::shouldReceive('verify')
        //     ->once()



         

        // $score = RecaptchaV3::verify($request->get('g-recaptcha-response'), 'register');
        
        // if($score > 0.7) {
        //     // go
        //    // return "greater that 70";
        // } elseif($score > 0.3) {
        //     // require additional email verification
        //     return "greater that 30";
        // } else {
        //     return abort(400, 'You are most likely a bot');
        // }


       // return $request->all();
        $ref = uniqid();

        $attendee = Stafflist::where('staff_number',$request->staff_number)->first();

        if($attendee) {
        
            $attendee->fullname = $request->get('name');
            $attendee->state_of_residence = $request->get('state_of_residence');
            $attendee->staff_number = $request->get('staff_number');
            $attendee->nin = $request->get('nin');
            $attendee->phone = $request->get('phone');
            $attendee->hmo = $request->get('hmo');
            $attendee->station = $request->get('station');
            $attendee->department = $request->get('department');
            $attendee->save();

            return view('registration_response')->with('success',false);
        }

        $attendee = Stafflist::create([
            'fullname' => $request->get('name'),
            'state_of_residence' => $request->get('state_of_residence'),
            'staff_number' => $request->get('staff_number'),
            'nin' => $request->get('nin'),
            'phone' => $request->get('phone'),
            'hmo' => $request->get('hmo'),
            'station' => $request->get('station'),
            'department' => $request->get('department'),
            'ref' => $ref,
        ]);


        return view('registration_response')->with('success',true);

        
    }


    function qr() {

        return;
     return    $pdf = PdfHandler::generateCustomQrWorking("hello");

         return response()->file( $pdf );

         $pdf->Output($dmsname, 'D');

         return $pdf;
    }

    function card() {

        $uniqid = uniqid();
        $pdf = PdfHandler::generateCustomQrWorking($uniqid);
         $qrPath = $pdf;
        $qrCid = null;


        // embed from path and capture CID (e.g. "cid:xxxxx@...").
        $qrCid =  'data:image/png;base64,' . base64_encode(file_get_contents($qrPath));


        $attendee = Attendee::findorfail(1);


        (new AttendeeService())->processQr($attendee);

        return view('card') ->with([
            'name'        => "Ibrahim Usman",
            'eventTitle'  => 'HMO 2025',
            'eventDate'   => 'Nov 18-19, 2025',
            'backgroundUrl' => url('/').'frontend/assets/img/logo/card_bg.png', // optional
            'qrCid'       => $qrCid, // <— pass the CID into the Blade view
            'organizer'   => 'FAAN',
        ]);


    }


    function exportAttendee(){


        $listOfEmailAddresses = [
            'olasoji.olatunji@faan.gov.ng',
            'ibrahim_usman@faan.gov.ng',
            // 'HMO@faan.gov.ng',
            // 'mariam.nasir@faan.gov.ng'
        ];

        $filepath = (new AttendeeService())->generateExport();


        foreach ($listOfEmailAddresses as $email) {
            ExportAndSendAttendeesJob::dispatch($email, $filepath);
        }

        return "done";

     
    }

}
