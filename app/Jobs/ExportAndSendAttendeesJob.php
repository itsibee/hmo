<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Operations\Services\AttendeeService;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class ExportAndSendAttendeesJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    public $email;
    public $filepath;


    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email, $filepath)
    {
        $this->email = $email;
        $this->filepath = $filepath;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
    
        (new AttendeeService())->exportAttendee($this->email, $this->filepath);
    
    }
}
