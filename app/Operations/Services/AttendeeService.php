<?php

namespace App\Operations\Services;

use Carbon\Carbon;
use App\Jobs\SendQrJob;
use App\Mail\SendQRMail;
use App\Models\Attendee;
use App\Mail\SendExcelMail;
use App\Jobs\SendSingleQrJob;
use App\Exports\AttendeeExport;
use App\Operations\PDF\PdfHandler;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class AttendeeService
{
    /**
     * Add service logic here.
     */


    function generateExport(){

        $currentDate = Carbon::now()->format('Y_m_d_His');

        $excelName = "HMO_stafflist_{$currentDate}.xlsx";

       (new AttendeeExport)->store($excelName, 'excelexport');
        
        return $filePath = Storage::disk('excelexport')->path($excelName);

    }

    function exportAttendee($email, $filePath){

        if (!file_exists($filePath)) {
            Log::error("File not found: {$filePath}");
            return 1;
        }

        Log::info('Sending attendee export via email...');

         Mail::to($email)->send(new SendExcelMail($filePath));

        return 0;

    


    }

}