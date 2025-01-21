<?php

namespace App\Repositories;

use App\Models\Section;
use App\Repositories\BaseRepository;

class SectionRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'page_id',
        'sub_page_id',
        'content_ar',
        'content_en',
        'image_path',
        'is_publish',
        'order'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Section::class;
    }
}
