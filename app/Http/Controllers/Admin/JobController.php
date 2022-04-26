<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobCategory;
use App\Models\Job;

class JobController extends Controller
{
    public function index()
    {
        $allData = Job::orderby('id','desc')->get();
        return view('backend.jobs.index', compact('allData'));
    }
    public function add()
    {
        $jobCategories = JobCategory::orderBy('id', 'desc')->get();
        return view('backend.jobs.create', compact('jobCategories'));
    }
    public function store(Request $request)
    {
        $request->validate([ 
            'title' => 'required', 
            'job_type_id' => 'required', 
            'description' => 'required', 
            'thumbnail' => 'required', 
        ]);
        $data = new Job(); 
        $data->job_type_id = $request->job_type_id; 
        $data->title = $request->title; 
        $data->description = $request->description; 

        if($request->hasFile('thumbnail')){
            $thumbnail = $request->file('thumbnail');
            $name = $thumbnail->getClientOriginalName();
            $uploadPath = 'upload/job-thumbnail/';
            $imageName = $uploadPath.time().$name;
            $thumbnail->move($uploadPath, $imageName);
            $data->thumbnail = $imageName;
        } 
        if(isset($data->status)){
            $data->status = $request->status;
        }else{
            $data->status = 0;
        }



        $data->save();
        $notification = array(
            'message' => 'New Shift Added Successfully',
            'alert-type' => 'success' 
        );
        return redirect()->route('jobs.view')->with($notification);
    }
    public function edit($id)
    { 
        $editData = Job::find($id);
        $jobCategories = JobCategory::orderBy('id', 'desc')->get();
        return view('backend.jobs.edit', compact('editData','jobCategories'));
    }
    public function update(Request $request, $id)
    { 
        $request->validate([ 
            'title' => 'required', 
            'job_type_id' => 'required', 
            'description' => 'required',  
        ]);
        $data = Job::find($id); 
        $data->job_type_id = $request->job_type_id; 
        $data->title = $request->title; 
        $data->description = $request->description; 

        if($request->hasFile('thumbnail')){
            unlink($data->thumbnail);
            $thumbnail = $request->file('thumbnail');
            $name = $thumbnail->getClientOriginalName();
            $uploadPath = 'upload/job-thumbnail/';
            $imageName = $uploadPath.time().$name;
            $thumbnail->move($uploadPath, $imageName);
            $data->thumbnail = $imageName;

            
        } 
        if(isset($data->status)){
            $data->status = $request->status;
        }else{
            $data->status = 0;
        } 
        $data->save();
        $notification = array(
            'message' => 'Shift Updated Successfully',
            'alert-type' => 'info' 
        );
        return redirect()->route('jobs.view')->with($notification);
    }
    public function delete($id)
    {
        $data = Job::find($id);
        $data->delete();
        unlink($data->thumbnail);
        $notification = array(
            'message' => 'Deleted Successfully',
            'alert-type' => 'error' 
        );
        return redirect()->route('jobs.view')->with($notification);
    }

    public function statusCtanges(Request $request)
    {
        $data = Job::find($request->id); 
        if ($data->status == 0) {
            $data->status = 1; 
        }else{
            $data->status = 0; 
        }
        

        $data->save();
        return response()->json(['success'=>'Status changed Successfully.']);
    }
}
