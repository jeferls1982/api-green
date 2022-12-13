<?php

namespace App\Jobs;

use App\Mail\SendMail;
use App\Substructure\Repositories\EmailRepository;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Imtigger\LaravelJobStatus\Trackable;


class PrepareMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels, Trackable;

    protected $data, $email_repository;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->prepareStatus();
        $this->data = $data;
        $this->email_repository = app()->make(EmailRepository::class);
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
//        Aqui crio uma Job para criar uma fila para que os emails sejam enviados

//        converto para array os emails separados por virgula
        $array_emails = explode(",", $this->data->destinatarios);
        foreach ($array_emails as $dest){
//            aqui disparo o email, com o email em si e o endereço email que vem do foroeach
            Mail::send(new SendMail($this->data,$dest));
        }

    }
}
