<?php

namespace App\Repositories;

use App\Models\SectionType;
use App\Repositories\BaseRepository;

class SectionTypeRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'image',
        'status'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return SectionType::class;
    }
}
