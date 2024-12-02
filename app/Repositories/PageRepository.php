<?php

namespace App\Repositories;

use App\Models\Page;
use App\Repositories\BaseRepository;

class PageRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'image',
        'banner1',
        'banner2',
        'title_ar',
        'title_en',
        'summary_ar',
        'summary_en',
        'description_ar',
        'description_en',
        'publish'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Page::class;
    }
}
