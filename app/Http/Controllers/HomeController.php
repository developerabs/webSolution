<?php

namespace App\Http\Controllers;
use App\Models\Job;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function allJobs()
    {
        
    }
    public function jobDetails($id)
    {
        $detailsData = Job::find($id);
        return view('frontend.job-details', compact('detailsData'));
    }
    public function applyJob($id)
    {
        $jobData = Job::find($id);
        return view('frontend.apply-job', compact('jobData'));
    }
}
