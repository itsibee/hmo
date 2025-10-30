<?php

namespace App\Jobs;

use App\Operations\Services\AttendeeService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendQrJob implements ShouldQueue
{
    use  Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $attendees;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($attendees)
    {
        $this->attendees = $attendees;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(AttendeeService $attendeeService)
    {
        foreach ($this->attendees as $attendee) {
            $generateQrData = $attendeeService->generateQrCode($attendee);
            $attendeeService->sendQrToAttendee($attendee, $generateQrData);
        }
    }
}
