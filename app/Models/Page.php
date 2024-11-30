<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public $table = 'pages';

    public $fillable = [
        'image',
        'banner1',
        'banner2',
        'on_menu',
        'menu_order',
        'title_ar',
        'video_url',
        'title_en',
        'summary_ar',
        'summary_en',
        'description_ar',
        'description_en',
        'publish'
    ];

    protected $casts = [
        'id' => 'integer',
        'image' => 'string',
        'banner1' => 'string',
        'banner2' => 'string',
        'title_ar' => 'string',
        'video_url' => 'string',
        'title_en' => 'string',
        'summary_ar' => 'string',
        'summary_en' => 'string',
        'route_name' => 'string',
        'description_ar' => 'string',
        'description_en' => 'string'
    ];

    public static array $rules = [
        'image' => 'file|mimes:jpg,jpeg,bmp,png|max:10240|nullable',
        'banner1' => 'file|mimes:jpg,jpeg,bmp,png|max:10240|nullable',
        'banner2' => 'file|mimes:jpg,jpeg,bmp,png|max:10240|nullable',
        'title_ar' => 'required|string|max:255|string|max:255',
        'video_url' => 'nullable|string|max:255|string|max:255',
        'title_en' => 'required|string|max:255|string|max:255',
//        'summary_ar' => 'string|max:2550',
//        'summary_en' => 'string|max:2550',
//        'description_ar' => 'string',
//        'description_en' => 'string',
        'publish' => 'in:0,1',
        'created_at' => 'nullable|nullable',
        'updated_at' => 'nullable|nullable'
    ];


}
