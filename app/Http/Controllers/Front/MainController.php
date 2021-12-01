<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\JobType;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{

    public function index()
    {
        $jobTypes = JobType::all();
        return view('front.welcome', compact('jobTypes'));
    }
}
