<?php

namespace App\Repositories;

use App\Models\Gallery;
use App\Repositories\BaseRepository;

class GalleryRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'image',
        'video_url',
        'title_ar',
        'title_en',
        'category',
        'summary_ar',
        'summary_en',
        'order'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Gallery::class;
    }
}
