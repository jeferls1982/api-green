<?php


namespace App\Substructure\Repositories;


use App\Models\JobStatus;

class JobsStatusRepository extends BaseRepository
{
    protected $model = JobStatus::class;

    protected $searchableFields = [
        ['field' => 'id'],
        ['field' => 'attempts'],
        ['field' => 'queue'],
        ['field' => 'job_id'],
    ];



}
