<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public $table = 'pages';

    public $fillable = [
        'name',
        'image',
        'title_ar',
        'title_en',
        'has_sub',
        'publish',
        'menu_order',
        'route_name',
        'show_footer',
        'on_menu',
        'summary_ar',
        'summary_en',
        'desc_ar',
        'desc_en',
    ];

    protected $casts = [
        'id' => 'integer',
        'image' => 'string',
        'title_ar' => 'string',
        'title_en' => 'string',
        'route_name' => 'string',
        'has_sub' => 'boolean',
        'publish' => 'boolean',
        'show_footer' => 'boolean',
        'on_menu' => 'integer',
        'menu_order' => 'integer',
        'summary_ar' => 'string',
        'summary_en' => 'string',
        'desc_ar' => 'string',
        'desc_en' => 'string',
    ];

    public static array $rules = [
        'name' => 'required|string|max:255',
        'image' => 'file|mimes:jpg,jpeg,bmp,png|max:10240|nullable',
        'title_ar' => 'required|string|max:255',
        'title_en' => 'required|string|max:255',
        'has_sub' => 'in:0,1',
        'publish' => 'in:0,1',
        'menu_order' => 'nullable|integer',
        'route_name' => 'nullable|string|max:255',
        'show_footer' => 'in:0,1',
        'on_menu' => 'nullable|integer',
        'summary_ar' => 'required|string|string',
        'summary_en' => 'required|string|string',
        'desc_ar' => 'string',
        'desc_en' => 'string',
    ];

    public function subPages()
    {
        return $this->hasMany(SubPage::class, 'page_id'); // Assuming 'page_id' is the foreign key in sub_pages table
    }


}
