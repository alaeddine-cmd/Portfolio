<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    public $table = "projects";
    protected $fillable = ["title", "youtube_id"];
}
