<?php

namespace App\Repositories;

use App\Models\SubPage;
use App\Repositories\BaseRepository;

class SubPageRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'title_ar',
        'title_en',
        'publish',
        'menu_order',
        'route_name',
        'page_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return SubPage::class;
    }
}
