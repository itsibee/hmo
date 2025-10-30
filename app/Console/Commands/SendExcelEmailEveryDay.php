<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\ExportAndSendAttendeesJob;
use App\Operations\Services\AttendeeService;

class SendExcelEmailEveryDay extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'attendee:send-export';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate attendee export and send it via email.';


    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $listOfEmailAddresses = [
            'olasoji.olatunji@faan.gov.ng',
            'ibrahim_usman@faan.gov.ng',
            'HMO@faan.gov.ng',
            'mariam.nasir@faan.gov.ng'
        ];

        $filepath = (new AttendeeService())->generateExport();


        foreach ($listOfEmailAddresses as $email) {
            ExportAndSendAttendeesJob::dispatch($email, $filepath);
        }
        

    }
}
