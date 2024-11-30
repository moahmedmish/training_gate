<?php

namespace App\Repositories;

use App\Models\PhotoSetting;
use App\Repositories\BaseRepository;

class PhotoSettingRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'image'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return PhotoSetting::class;
    }
}
