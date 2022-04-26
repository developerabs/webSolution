<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobCategory;
use App\Models\Job;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $data['jobCatCount'] = JobCategory::count();
        $data['jobCount'] = Job::count();
        $data['userCount'] = User::count();
        $data['recentJob'] = Job::orderby('id','desc')->get();
        return view('backend.dashboard', $data);
    }
}
