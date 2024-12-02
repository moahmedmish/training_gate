<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table = 'categories';

    public $fillable = [
        'name_ar',
        'name_en',
        'parent_id'
    ];

    protected $casts = [
        'name_ar' => 'string',
        'name_en' => 'string',
        'parent_id' => 'integer'
    ];

    public static array $rules = [
        'name_ar' => 'required|string|max:255',
        'name_en' => 'required|string|max:255',
        'parent_id' => 'nullable',
        'created_at' => 'nullable|nullable',
        'updated_at' => 'nullable|nullable'
    ];

    
}
