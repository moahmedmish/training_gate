<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    public $table = 'sliders';

    public $fillable = [
        'image',
        'title_ar',
        'video_url',
        'title_en',
        'summary_ar',
        'summary_en',
        'publish'
    ];

    protected $casts = [
        'id' => 'integer',
        'image' => 'string',
        'title_ar' => 'string',
        'video_url' => 'string',
        'title_en' => 'string',
        'summary_ar' => 'string',
        'summary_en' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'image' => 'required|file|mimes:jpg,jpeg,bmp,png|max:10240|nullable',
        'title_ar' => 'required|string',
        'video_url' => 'nullable|string',
        'title_en' => 'required|string',
        'summary_ar' => 'required|string',
        'summary_en' => 'required|string',
        'publish' => 'in:0,1',
        'created_at' => 'nullable|nullable',
        'updated_at' => 'nullable|nullable'
    ];
    public static $updateRules = [
        'image' => 'file|mimes:jpg,jpeg,bmp,png|max:10240|nullable',
        'title_ar' => 'required|string',
        'video_url' => 'nullable|string',
        'title_en' => 'required|string',
        'summary_ar' => 'required|string',
        'summary_en' => 'required|string',
        'publish' => 'in:0,1',
        'created_at' => 'nullable|nullable',
        'updated_at' => 'nullable|nullable'
    ];


}
