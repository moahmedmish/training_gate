<?php

namespace App\Repositories;

use App\Models\ProjectPhoto;
use App\Repositories\BaseRepository;

class ProjectPhotoRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'image',
        'title_ar',
        'title_en',
        'project_id',
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return ProjectPhoto::class;
    }
}
