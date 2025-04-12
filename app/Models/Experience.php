<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    //
    public $table = "experiences";
    protected $fillable = ["role", "company", "location", "start_year", "end_year", "tasks"];
    protected $casts = [
        "tasks" => "array"
    ];
}


