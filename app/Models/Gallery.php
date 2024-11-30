<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public $table = 'galleries';

    public $fillable = [
        'image',
        'video_url',
        'title_ar',
        'title_en',
        'category',
        'category_id',
        'summary_ar',
        'summary_en',
        'order'
    ];

    protected $casts = [
        'image' => 'string',
        'video_url' => 'string',
        'title_ar' => 'string',
        'title_en' => 'string',
        'category' => 'string',
        'category_id' => 'string',
        'summary_ar' => 'string',
        'summary_en' => 'string',
        'order' => 'integer'
    ];

    public static array $rules = [
        'image' => 'file|mimes:jpg,jpeg,bmp,png|max:10240|nullable',
        'video_url' => 'nullable|string|max:255|string|max:255',
        'title_ar' => 'required|string|max:255|string|max:255',
        'title_en' => 'required|string|max:255|string|max:255',
//        'category' => 'required|in:Marble,Stone,Onyx,Granite',
//        'summary_ar' => 'required|string|max:255|string|max:255',
//        'summary_en' => 'required|string|max:255|string|max:255',
        'order' => 'required|integer|min:1',
        'created_at' => 'nullable|nullable',
        'updated_at' => 'nullable|nullable'
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

}
