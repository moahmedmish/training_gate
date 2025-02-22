<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubPage extends Model
{
    public $table = 'sub_pages';

    public $fillable = [
        'name',
        'title_ar',
        'title_en',
        'publish',
        'menu_order',
        'route_name',
        'page_id',
        'image',
        'summary_ar',
        'summary_en',
        'desc_ar',
        'desc_en',
    ];

    protected $casts = [
        'name' => 'string',
        'title_ar' => 'string',
        'title_en' => 'string',
        'image' => 'string',
        'publish' => 'string',
        'route_name' => 'string',
        'summary_ar' => 'string',
        'summary_en' => 'string',
        'desc_ar' => 'string',
        'desc_en' => 'string',
    ];

    public static array $rules = [
        'name' => 'required|string|max:255',
        'title_ar' => 'required|string|max:255',
        'title_en' => 'required|string|max:255',
        'publish' => 'required|string|max:255',
        'image' => 'file|mimes:jpg,jpeg,bmp,png|max:10240|nullable',
        'menu_order' => 'nullable',
        'route_name' => 'nullable|string|max:255',
        'page_id' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'summary_ar' => 'required|string',
        'summary_en' => 'required|string',
        'desc_ar' => 'string',
        'desc_en' => 'string',
    ];

    //
    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
