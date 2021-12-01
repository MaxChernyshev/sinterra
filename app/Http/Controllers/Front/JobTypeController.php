<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\JobType;
use Illuminate\Http\Request;

class JobTypeController extends Controller
{
    public function index()
    {
        $jobTypes = JobType::all();
        return view('front.jobtypes.index', compact('jobTypes'));
    }

    public function show($slug)
    {
        $jobType = JobType::whereSlug($slug)->first();
        return view('front.jobtypes.show', compact('jobType'));
    }
}
