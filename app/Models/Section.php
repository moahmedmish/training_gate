<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public $table = 'sections';

    public $fillable = [
        'page_id',
        'sub_page_id',
        'content_ar',
        'content_en',
        'image_path',
        'is_publish',
        'order',
        'title_en',
        'title_ar',
        'name'
    ];

    protected $casts = [
        'content_ar' => 'string',
        'content_en' => 'string',
        'image_path' => 'string',
        'is_publish' => 'boolean'
    ];

    public static array $rules = [
        'page_id' => 'required',
        'sub_page_id' => 'nullable',
        'title_en' => 'required|string',
        'title_ar' => 'required|string',
        'name' => 'required|string',
        'content_ar' => 'required|string|max:65535',
        'content_en' => 'required|string|max:65535',
        'image_path' => 'file|mimes:jpg,jpeg,bmp,png|max:10240|nullable',
        'is_publish' => 'required|boolean',
        'order' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function page(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Page::class, 'page_id');
    }

    public function subPage(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\SubPage::class, 'sub_page_id');
    }
}
