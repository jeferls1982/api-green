<?php


namespace App\Substructure\Resources;


use Freelabois\LaravelQuickstart\Overridden\BaseResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmailResource extends BaseResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "exemplo_de_resource"=> "passando pelo EmailResource, onde faço tratamento do retorno",
            "id" => $this->id ?? null,
            "remetente" => $this->remetente ?? null,
            "titulo" => $this->titulo ?? null,
            "conteudo" => $this->conteudo ?? null,
            "destinatarios" => $this->destinatarios ?? null,
        ];

    }
}
