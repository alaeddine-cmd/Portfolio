<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Developper;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Project;
use Illuminate\Http\Request;

class DevelopperController extends Controller
{
    //
    public function fetch_me()
    {
        $data = Developper::first();
        $experiences = Experience::all();
        $educations = Education::all();
        $projects = Project::all();
        $certificates = Certificate::all();
        if ($data) {
            return view('layouts.profile', compact('data', 'experiences', 'educations', 'projects', "certificates"));
        }
    }
}
