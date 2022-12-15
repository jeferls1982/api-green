<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Exception;

class SendMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $data,$dest;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $dest)
    {
        $this->data = $data;
        $this->dest = $dest;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        try{
            return $this->from($this->data->remetente)
                ->to($this->dest)
                ->from($this->data->remetente)
                ->subject($this->data->titulo)
                ->view('emails.teste')
                ->with([
                    "data" => $this->data
                ]);
        }catch (Exception $e){
            dd($e);
        }


    }
}
