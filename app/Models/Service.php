<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public $table = 'services';

    public $fillable = [
        'image',
        'position',
        'banner',
        'title_ar',
        'title_en',
        'summary_ar',
        'summary_en',
        'desc_ar',
        'desc_en',
        'publish'
    ];

    protected $casts = [
        'id' => 'integer',
        'position' => 'integer',
        'image' => 'string',
//        'icon' => 'string',
        'banner' => 'string',
        'title_ar' => 'string',
        'title_en' => 'string',
        'summary_ar' => 'string',
        'summary_en' => 'string',
        'desc_ar' => 'string',
        'desc_en' => 'string'
    ];

    public static array $rules = [
        'image' => 'required|file|mimes:jpg,jpeg,bmp,png|max:10240|nullable',
//        'icon' => 'file|mimes:jpg,jpeg,bmp,png|max:10240|nullable',
        'banner' => 'required|file|mimes:jpg,jpeg,bmp,png|max:10240|nullable',
        'title_ar' => 'required|string|max:255|string|max:255',
        'title_en' => 'required|string|max:255|string|max:255',
        'summary_ar' => 'required|string|string',
        'summary_en' => 'required|string|string',
        'desc_ar' => 'string|string',
        'desc_en' => 'string',
        'position' => 'integer',
        'publish' => 'in:0,1',
        'created_at' => 'nullable|nullable',
        'updated_at' => 'nullable|nullable'
    ];

    public static array $updateRules = [
        'image' => 'file|mimes:jpg,jpeg,bmp,png|max:10240|nullable',
//        'icon' => 'file|mimes:jpg,jpeg,bmp,png|max:10240|nullable',
        'banner' => 'file|mimes:jpg,jpeg,bmp,png|max:10240|nullable',
        'title_ar' => 'required|string|max:255|string|max:255',
        'title_en' => 'required|string|max:255|string|max:255',
        'summary_ar' => 'required|string|string',
        'summary_en' => 'required|string|string',
        'desc_ar' => 'string|string',
        'desc_en' => 'string',
        'publish' => 'in:0,1',
        'position' => 'integer',
        'created_at' => 'nullable|nullable',
        'updated_at' => 'nullable|nullable'
    ];


}
