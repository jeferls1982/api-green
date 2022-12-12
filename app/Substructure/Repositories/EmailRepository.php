<?php


namespace App\Substructure\Repositories;


use App\Models\Email;

class EmailRepository extends BaseRepository
{
    protected $model = Email::class;

    protected $searchableFields = [
        ['field' => 'name'],
        ['field' => 'previous_id'],
        ['field' => 'next_id'],
        ['field' => 'status'],
    ];



}
