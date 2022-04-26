@extends('frontend.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="applay-job mt-4">
                <h5>Job Title: {{ $jobData->title }} </h5>
                <p>Job Type: {{ $jobData->job_category->title }}</p>

                <div class="job-applay-form">
                    <form>

                        <div class="form-group">
                          <label for="exampleInputEmail1">Full Name</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Phone Number</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Job Description</label>
                          <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                        </div> 
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection