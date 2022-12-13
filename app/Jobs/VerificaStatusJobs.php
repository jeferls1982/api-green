<?php

namespace App\Jobs;


use App\Substructure\Managers\EmailManager;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class VerificaStatusJobs implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $email_manager;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->email_manager = app()->make(EmailManager::class);
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
//        $this->email_manager->verificaFalhas();
    }
}
