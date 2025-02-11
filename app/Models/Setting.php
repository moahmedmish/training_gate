<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    public $table = 'settings';

    public $fillable = [
        'name',
        'value',
        'value_ar',
        'path'
    ];

    protected $casts = [
        'name' => 'string',
        'value' => 'string',
        'value_ar' => 'string',
        'path' => 'string'
    ];

    public static array $rules = [
        'name' => 'required|string|max:200|string|max:200',
        'value' => 'required|string|max:500|string|max:500',
        'value_ar' => 'nullable',
//        'path' => 'required|string|max:255|string|max:255',
        'created_at' => 'nullable|nullable',
        'updated_at' => 'nullable|nullable'
    ];


}
