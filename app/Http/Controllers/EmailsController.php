<?php

namespace App\Http\Controllers;

use App\Substructure\Managers\EmailManager;
use App\Substructure\Repositories\EmailRepository;
use App\Substructure\Resources\EmailResource;
use Freelabois\LaravelQuickstart\Extendables\CrudController;
use Illuminate\Http\Client\Request;


class EmailsController extends CrudController
{
    protected $resource = EmailResource::class;


    public function __construct(
        EmailManager    $manager,
        EmailRepository $repository
    )
    {
        parent::__construct($manager, $repository);
    }

//    Trabalhando com Manager, Repository e Resource dentro da pasta app\Substructure

//    Obs.: como estou extendendo o CrudController, aqui não preciso fazer nada de implementação,
//    nesse caso devo passar pelo manager para tratar do envio dos emais. Caso não houvesse esse tratamento,
//    nãoprecisaria de implementação nem no manager e nem no repository. O Quickstart já abstrai todo esse
//    processo


    public function index()
    {
        $values = request()->all();
        $filter = $values['filter'] ?? null;

        if($filter){
            return $this->repository->setOrder('id','desc')->list(["status" => $filter],[],false);
        }else{
            return $this->repository->setOrder('id','desc')->list([],[],8);

        }
//
    }




    public function verificaFalhas(){
        $this->manager->verificaFalhas();
    }

}
