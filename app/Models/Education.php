<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    //
    public $table = "educations";
    protected $fillable = ["degree_name", "location", "Specialization ","start_year", "end_year"];
}
