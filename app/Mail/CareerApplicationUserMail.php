<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CareerApplicationUserMail extends Mailable
{
    use Queueable, SerializesModels;
    public $career;
    public $testLink;
    /**
     * Create a new message instance.
     */
    public function __construct($career, $testLink = null)
    {
        //
        $this->career = $career;
        $this->testLink = $testLink;
    }

    // /**
    //  * Get the message envelope.
    //  */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'Career Application User Mail',
    //     );
    // }

    // /**
    //  * Get the message content definition.
    //  */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'view.name',
    //     );
    // }

    // /**
    //  * Get the attachments for the message.
    //  *
    //  * @return array<int, \Illuminate\Mail\Mailables\Attachment>
    //  */
    // public function attachments(): array
    // {
    //     return [];
    // }
    public function build()
    {
        return $this->subject('Thank You for Your Application')
                    ->view('emails.career-user')
                    ->with(['career' => $this->career, 'testLink' => $this->testLink])
                    ->attach(public_path('img/Tecnozard v1.png'), [
                        'as' => 'company_logo.png',
                        'mime' => 'image/png'
                    ]);
    }
}
