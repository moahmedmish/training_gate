<?php

namespace App\Repositories;

use App\Models\Member;
use App\Repositories\BaseRepository;

class MemberRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'image',
        'banner',
        'name_ar',
        'name_en',
        'type',
        'role_ar',
        'role_en',
        'notes_ar',
        'notes_en'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Member::class;
    }
}
