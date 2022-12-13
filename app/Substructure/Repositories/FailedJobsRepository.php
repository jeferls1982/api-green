<?php


namespace App\Substructure\Repositories;


use App\Models\FailedJob;

class FailedJobsRepository extends BaseRepository
{
    protected $model = FailedJob::class;

    protected $searchableFields = [
        ['field' => 'id']
    ];



}
