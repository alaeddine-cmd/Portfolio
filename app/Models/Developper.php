<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Developper extends Model
{
    //
    public $table = "developper";
    protected $fillable = ['firstName', 'lastName', 'socialLinks', 'role', 'skills', 'description', 'image'];

    protected $casts = [
        'socialLinks' => 'array',
        'description' => 'array',
        'skills' => 'array'
    ];
}
