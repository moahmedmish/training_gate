<?php

namespace App\Repositories;

use App\Models\Slider;
use App\Repositories\BaseRepository;

class SliderRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'image',
        'title_ar',
        'video_url',
        'title_en',
        'summary_ar',
        'summary_en',
        'publish'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Slider::class;
    }
}
