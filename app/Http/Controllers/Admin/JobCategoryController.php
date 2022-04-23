<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobCategory;

class JobCategoryController extends Controller
{
    public function index()
    {
        $allData = JobCategory::orderBy('id', 'desc')->get();
        return view('backend.job_categories.index', compact('allData'));
    }
    public function store(Request $request)
    {
        $request->validate([ 
            'title' => 'required|max:255|regex:/(^([a-zA-z]+)(\d+)?$)/u', 
        ]);
        $data = new JobCategory(); 
        $data->title = $request->title; 
        $data->save();
        $notification = array(
            'message' => 'Added Successfully',
            'alert-type' => 'success' 
        );
        return redirect()->route('jobCategory.view')->with($notification);
    }
    public function edit($id)
    {
        $allData = JobCategory::orderBy('id', 'desc')->get();
        $editData = JobCategory::find($id);
        return view('backend.job_categories.index', compact('allData','editData'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([ 
            'title' => 'required', 
        ]);
        $data = JobCategory::find($id); 
        $data->title = $request->title;  
        $data->save();
        $notification = array(
            'message' => 'Updated Successfully',
            'alert-type' => 'info' 
        );
        return redirect()->route('jobCategory.view')->with($notification);
    }

    public function delete($id)
    {
        $data = JobCategory::findOrFail($id);
        $data->delete();
        $notification = array(
            'message' => 'Deleted Successfully',
            'alert-type' => 'error' 
        );
        return redirect()->route('jobCategory.view')->with($notification);
    }
}
