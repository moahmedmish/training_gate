<?php

namespace App\Repositories;

use App\Models\Service;
use App\Repositories\BaseRepository;

class ServiceRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'title_ar',
        'title_en',
        'summary_ar',
        'summary_en',
        'desc_ar',
        'desc_en',
        'publish'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Service::class;
    }
}
