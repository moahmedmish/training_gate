<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $table = 'contacts';

    public $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message'
    ];

    protected $casts = [
        'name' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'subject' => 'string',
        'message' => 'string'
    ];

    public static array $rules = [
        'name' => 'required|string|max:255|string|max:255',
        'email' => 'required|string|max:150|string|max:150',
//        'phone' => 'required|string|max:100|string|max:100',
//        'subject' => 'required|string|max:500|string|max:500',
        'message' => 'required|string|string',
        'created_at' => '',
        'updated_at' => 'nullable|nullable'
    ];


}
