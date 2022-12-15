<?php


namespace App\Substructure\Managers;



use App\Jobs\PrepareMailJob;
use App\Jobs\VerificaStatusJobs;
use App\Notifications\PromotionNotification;
use App\Substructure\Repositories\EmailRepository;
use App\Substructure\Repositories\FailedJobsRepository;
use App\Substructure\Repositories\JobsStatusRepository;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;


class EmailManager extends BaseManager
{
    use DispatchesJobs;

    public function __construct(EmailRepository $repository, JobsStatusRepository $jobs_status_repository)
    {
        $this->repository = $repository;
        $this->jobs_status_repository = $jobs_status_repository;
    }



    public function storeOrUpdate($values, int $id = null, array $relations = [])
    {
//        Aqui estou salvando a request no banco
        $values['status'] = "Enviado";
        $email = $this->repository->storeOrUpdate($values);
//        E disparo o job de email
        $job = new PrepareMailJob($email);
        $this->dispatch($job);

//        pego o id do job
        $jobStatusId = $job->getJobStatusId();


         $this->repository->storeOrUpdate([
             'job_id'=>$jobStatusId], $email->id);



//        retornando o email que vai ser tratado no EmailResource
        return $email;
    }


    public  function verificaFalhas(){
        $this->failed_jobs_repository = app()->make(FailedJobsRepository::class);
        $faileds = $this->failed_jobs_repository->setSelect('payload')->list();
        foreach ($faileds as $item){
            $email_id = unserialize(json_decode($item->payload)->data->command)->mailable->data->id;
            $this->repository->storeOrUpdate(['status'=> 'Falha'], $email_id);
//            $item->delete();

        }
        return "ok";

    }




}
