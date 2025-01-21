<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SectionType extends Model
{
    public $table = 'section_types';

    public $fillable = [
        'name',
        'image',
        'status'
    ];

    protected $casts = [
        'name' => 'string',
        'image' => 'string',
        'status' => 'boolean'
    ];

    public static array $rules = [
        'name' => 'required|string|max:255',
        'image' => 'nullable|string|max:255',
        'status' => 'required|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
