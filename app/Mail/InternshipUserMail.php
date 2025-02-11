<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class InternshipUserMail extends Mailable
{
    use Queueable, SerializesModels;
    public $internship;

    /**
     * Create a new message instance.
     */
    public function __construct($internship)
    {
        //
        $this->internship = $internship;
    }

    // /**
    //  * Get the message envelope.
    //  */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'Internship User Mail',
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
        return $this->subject('Thank You for Your Internship Application')
                    ->view('emails.internship_user')
                    ->with(['internship' => $this->internship])
                    ->attach(public_path('img/Tecnozard v1.png'), [
                        'as' => 'company_logo.png',
                        'mime' => 'image/png'
                    ]);
    }
}
