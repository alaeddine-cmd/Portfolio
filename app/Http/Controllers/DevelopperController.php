<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Developper;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Freelance;
use Illuminate\Http\Request;

class DevelopperController extends Controller
{
    //
    public function fetch_me()
    {
        $data = Developper::first();

        if ($data) {
            // Check if socialLinks is a JSON string and decode it if necessary
            if (is_string($data->socialLinks) && !empty($data->socialLinks)) {
                $data->socialLinks = json_decode($data->socialLinks, true);
            }
        }

        $experiences = Experience::all();
        $educations = Education::all();
        $projects = Project::all();
        $certificates = Certificate::all();
        $freelances = Freelance::orderBy('start_date', 'desc')->get();

        return view('layouts.profile', compact('data', 'experiences', 'educations', 'projects', 'certificates', 'freelances'));
    }
}
