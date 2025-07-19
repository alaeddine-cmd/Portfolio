<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Freelance extends Model
{
    //
    public $table = "freelances";
    protected $fillable = [
        "title", 
        "description", 
        "client", 
        "website_url", 
        "github_url", 
        "technologies", 
        "features", 
        "status", 
        "start_date", 
        "end_date", 
        "image_url"
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    // Accessors for JSON fields
    public function getTechnologiesAttribute($value)
    {
        return json_decode($value, true) ?: [];
    }

    public function setTechnologiesAttribute($value)
    {
        $this->attributes['technologies'] = json_encode($value);
    }

    public function getFeaturesAttribute($value)
    {
        return json_decode($value, true) ?: [];
    }

    public function setFeaturesAttribute($value)
    {
        $this->attributes['features'] = json_encode($value);
    }
} 