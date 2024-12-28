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
        'page_id'
    ];

    protected $casts = [
        'name' => 'string',
        'title_ar' => 'string',
        'title_en' => 'string',
        'publish' => 'string',
        'route_name' => 'string'
    ];

    public static array $rules = [
        'name' => 'required|string|max:255',
        'title_ar' => 'required|string|max:255',
        'title_en' => 'required|string|max:255',
        'publish' => 'required|string|max:255',
        'menu_order' => 'nullable',
        'route_name' => 'nullable|string|max:255',
        'page_id' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    //
    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
