<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhotoSetting extends Model
{
    public $table = 'photo_settings';

    public $fillable = [
        'name',
        'image'
    ];

    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'image' => 'string'
    ];

    public static array $rules = [
        'name' => 'required|string',
        'image' => 'file|mimes:jpg,jpeg,bmp,png|max:10240|nullable',
        'created_at' => 'nullable|nullable',
        'updated_at' => 'nullable|nullable'
    ];


}
