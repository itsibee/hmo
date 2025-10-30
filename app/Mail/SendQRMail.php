<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendQRMail extends Mailable
{
    use Queueable, SerializesModels;

    private $attendee;
    private $qrData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($attendee, $qrData)
    {
        $this->attendee = $attendee;
        $this->qrData = $qrData;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $qrPath = $this->qrData;
        Log::info('A pth called: '.$qrPath);

    //$qrBase64 = 'data:image/png;base64,' . base64_encode(file_get_contents($qrPath));

    return $this->subject('HMO 2025 Attendance Confirmation Email')
    ->view('card')
        ->with([
            'name'        => $this->attendee->fullname,
            'eventTitle'  => 'HMO 2025',
            'eventDate'   => 'Nov 18-19, 2025',
            'backgroundUrl' => url('/').'frontend/assets/img/logo/card_bg.png', // optional
            'qrPath'       => $qrPath, // <— pass the CID into the Blade view
            'organizer'   => 'FAAN',
        ])
        ;
    }
}
