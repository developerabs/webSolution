@extends('backend.layouts.app')
@section('content')
<div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
    <div class="container">
        <div class="py-5">
            <div class="row g-4 align-items-center">
                <div class="col">
                    <nav class="mb-2" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-sa-simple">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Job</li>
                        </ol>
                    </nav>
                    <h1 class="h3 m-0">Edit Job</h1>
                </div> 
                <div class="col-auto d-flex"><a href="{{ route('jobs.view') }}" class="btn btn-primary">Back</a></div>
            </div>
            <div class="row">
                <div class="col-12">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card">
                        <div class="sa-example__body"> 
                            <form action="{{ route('jobs.update', $editData->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <h1 class="h5 m-0">Edit</h1>
                                <input type="text" name="title" placeholder="Enter title" value="{{ $editData->title }}" class="form-control mt-3" required/> 
                                <div class="mt-3">
                                    <select class="sa-select2 form-select" name="job_type_id">
                                        <option selected="" disabled>Select Job Type</option>
                                        @foreach ($jobCategories as $item) 
                                        <option value="{{ $item->id }}" {{ $item->id == $editData->job_type_id? 'selected': '' }}>{{ $item->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <input type="file" name="thumbnail" onchange="loadFile(event)" class="form-control mt-3"/>
                                <p class="mt-2"><img src="{{ asset($editData->thumbnail) }}" id="loadImage" width="200" /></p>  
                               
                                <textarea placeholder="Job Description" name="description" class="form-control mt-4" rows="8">{{ $editData->description }}</textarea>
                                <label class="form-check form-switch mt-4">
                                    <input type="checkbox" name="status" value="1" class="form-check-input is-valid" {{ $editData->status == 1? 'checked': '' }}/>
                                    <span class="form-check-label">Publish</span>
                                </label>
                                <div class="col-auto mt-4">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div> 
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection