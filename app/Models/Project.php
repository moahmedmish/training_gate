<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public $table = 'projects';

    public $fillable = [
        'banner',
        'image',
        'title_ar',
        'title_en',
        'category',
        'summary_ar',
        'summary_en',
        'order'
    ];

    protected $casts = [
        'banner' => 'string',
        'image' => 'string',
        'title_ar' => 'string',
        'title_en' => 'string',
        'category' => 'string',
        'summary_ar' => 'string',
        'summary_en' => 'string',
        'order' => 'integer'
    ];

    public static array $rules = [
        'banner' => 'file|mimes:jpg,jpeg,bmp,png|max:10240|nullable',
        'image' => 'file|mimes:jpg,jpeg,bmp,png|max:10240|nullable',
        'title_ar' => 'required|string|max:255|string|max:255',
        'title_en' => 'required|string|max:255|string|max:255',
        'category' => 'required|in:exterior,interior,washbasins,flooring,stairs,table,others',
        'summary_ar' => 'required|string',
        'summary_en' => 'required|string',
        'order' => 'required|integer|min:1',
        'created_at' => 'nullable|nullable',
        'updated_at' => 'nullable|nullable'
    ];

    public function projectPhotos(){
        return $this->hasMany(ProjectPhoto::class);
    }


}
