<?php


namespace App\Substructure\Managers;



use App\Jobs\PrepareMailJob;
use App\Mail\OrderShipped;
use App\Notifications\PromotionNotification;
use App\Substructure\Repositories\EmailRepository;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;


class EmailManager extends BaseManager
{

    public function __construct(EmailRepository $repository)
    {
        $this->repository = $repository;
    }

    public function storeOrUpdate($values, int $id = null, array $relations = [])
    {
//        Aqui estou salvando a request no banco
        $email = $this->repository->storeOrUpdate($values,$id);
//        E disparo o job de email
        PrepareMailJob::dispatch($email);
//        retornando o email que vai ser tratado no EmailResource
        return $email;
    }




}
