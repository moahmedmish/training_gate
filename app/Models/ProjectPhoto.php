<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectPhoto extends Model
{
    public $table = 'project_photos';

    public $fillable = [
        'image',
        'title_ar',
        'title_en',
        'project_id',
    ];

    protected $casts = [
        'image' => 'string',
        'title_ar' => 'string',
        'title_en' => 'string',
        'project_id' => 'integer',
    ];

    public static array $rules = [
        'image' => 'file|mimes:jpg,jpeg,bmp,png|max:10240|nullable',
        'title_ar' => 'required|string|max:255',
        'title_en' => 'required|string|max:255',
        'project_id' => 'required|integer',
        'created_at' => 'nullable|nullable',
        'updated_at' => 'nullable|nullable'
    ];

    public function project(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Project::class, 'project_id', 'id');
    }
}
