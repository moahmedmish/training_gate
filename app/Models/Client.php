<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public $table = 'clients';

    public $fillable = [
        'name_ar',
        'name_en',
        'logo',
        'url'
    ];

    protected $casts = [
        'name_ar' => 'string',
        'name_en' => 'string',
        'logo' => 'string',
        'url' => 'string'
    ];

    public static array $rules = [
        'name_ar' => 'required|string|max:255',
        'name_en' => 'required|string|max:255',
        'logo' => 'file|mimes:jpg,jpeg,bmp,png|max:10240|nullable',
        'url' => 'nullable|string|max:255',
        'created_at' => 'nullable|nullable',
        'updated_at' => 'nullable|nullable'
    ];

    
}
