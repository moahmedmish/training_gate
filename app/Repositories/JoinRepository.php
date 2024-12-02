<?php

namespace App\Repositories;

use App\Models\Join;
use App\Repositories\BaseRepository;

class JoinRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'email',
        'message'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Join::class;
    }
}
