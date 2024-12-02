<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Join extends Model
{
    public $table = 'joins';

    public $fillable = [
        'name',
        'email',
        'cv',
        'message'
    ];

    protected $casts = [
        'name' => 'string',
        'email' => 'string',
        'cv' => 'string',
        'message' => 'string'
    ];

    public static array $rules = [
        'name' => 'required|string|max:255|string|max:255',
        'email' => 'required|string|max:150|string|max:150',
        'cv' => 'file|mimes:pdf,doc,docx|max:10240|nullable',
        'message' => 'required|string|string',
        'created_at' => 'nullable|nullable',
        'updated_at' => 'nullable|nullable'
    ];

    
}
