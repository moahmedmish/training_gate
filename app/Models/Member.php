<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public $table = 'members';

    public $fillable = [
        'image',
        'banner',
        'name_ar',
        'name_en',
        'type',
        'role_ar',
        'role_en',
        'notes_ar',
        'notes_en'
    ];

    protected $casts = [
        'id' => 'integer',
        'image' => 'string',
        'banner' => 'string',
        'name_ar' => 'string',
        'name_en' => 'string',
        'type' => 'string',
        'role_ar' => 'string',
        'role_en' => 'string',
        'notes_ar' => 'string',
        'notes_en' => 'string'
    ];

    public static array $rules = [
        'image' => 'file|mimes:jpg,jpeg,bmp,png|max:10240|nullable',
        'banner' => 'file|mimes:jpg,jpeg,bmp,png|max:10240|nullable',
        'name_ar' => 'required|string|max:255|string|max:255',
        'name_en' => 'required|string|max:255|string|max:255',
        'type' => 'string|max:255|string|max:255',
        'role_ar' => 'required|string|max:255|string|max:255',
        'role_en' => 'required|string|max:255|string|max:255',
//        'notes_ar' => 'required|string|max:255|string|max:255',
//        'notes_en' => 'required|string|max:255|string|max:255',
        'created_at' => 'nullable|nullable',
        'updated_at' => 'nullable|nullable'
    ];


}
