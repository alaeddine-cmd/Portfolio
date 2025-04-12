<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    //
    public $table = "certificates";
    protected $fillable = ["title", "platform", "institution", "pdf_url", "verify_url", "issue_date"];
}
