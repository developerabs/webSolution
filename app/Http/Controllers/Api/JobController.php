<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use App\Models\JobCategory;
use App\Models\Job;
use DB;

class JobController extends Controller
{
    public function index()
    {
        // $allData = Job::orderby('id','desc')->get();
        $allData = DB::table('jobs')
                    ->select('jobs.*','job_categories.title as c_title')
                    ->join('job_categories', 'job_categories.id', '=', 'jobs.job_type_id')
                    ->where('status', 1) 
                    ->get();
        return response()->json($allData);
    }
    function jobDetailsData(Request $request)
    {
        $jobDetails = DB::table('jobs')
                    ->select('jobs.*','job_categories.title as c_title')
                    ->join('job_categories', 'job_categories.id', '=', 'jobs.job_type_id')
                    ->where('jobs.id', $request->id)  
                    ->first();
        return response()->json($jobDetails);
    }
    public function jobSearch(Request $request)
    {
        $searchData = DB::table('jobs')
                    ->select('jobs.*','job_categories.title as c_title')
                    ->join('job_categories', 'job_categories.id', '=', 'jobs.job_type_id')
                    ->where('jobs.title','LIKE','%'.$request->keyword.'%') 
                    ->get();
        return response()->json($searchData);
    }
}
