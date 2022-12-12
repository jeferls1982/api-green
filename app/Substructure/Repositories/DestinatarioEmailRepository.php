<?php


namespace App\Substructure\Repositories;


use App\Models\DestinatarioEmail;

class DestinatarioEmailRepository extends BaseRepository
{
    protected $model = DestinatarioEmail::class;

    protected $searchableFields = [
        ['field' => 'email_id'],
    ];



}
