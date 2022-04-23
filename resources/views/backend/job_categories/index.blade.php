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
                            <li class="breadcrumb-item active" aria-current="page">Job Categories</li>
                        </ol>
                    </nav>
                    <h1 class="h3 m-0">Job Categories</h1>
                </div> 
            </div>
            <div class="row">
                <div class="col-8">
                    
                    <div class="card">
                        <div class="p-4">
                            <input
                                type="text"
                                placeholder="Start typing to search ...."
                                class="form-control form-control--search mx-auto"
                                id="table-search"
                            />
                        </div>
                        <div class="sa-divider"></div>
                        <table class="sa-datatables-init" data-order='[[ 1, "asc" ]]' data-sa-search-input="#table-search">
                            <thead>
                                <tr>
                                    <th>SL.</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($allData as $key => $item)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td class="min-w-20x">{{ $item->title }}</td>
                                    <td>
                                        <a href="{{ route('jobCategory.edit',$item->id) }}" class="btn btn-primary btn-sa-pill btn-sm">Edit</a>
                                        @php
                                            $j_count = App\Models\Job::where('job_type_id', $item->id)->get()->count();
                                        @endphp
                                        @if ($j_count == 0)
                                        <a href="{{ route('jobCategory.delete',$item->id) }}" id="delete" class="btn btn-danger btn-sa-pill btn-sm">Delete</a> 
                                        @endif
                                    </td>
                                </tr> 
                                @endforeach 
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-4"> 
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @isset($editData)
                    <div class="card">
                        <div class="sa-example__body"> 
                            <form action="{{ route('jobCategory.update',$editData->id) }}" method="post">
                                @csrf
                                <h1 class="h5 m-0">Edit Job Category</h1>
                                <input type="text" name="title" placeholder="Enter title" value="{{ $editData->title }}" class="form-control mt-3" required/> 
                                <div class="col-auto mt-4">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div> 
                    </div>
                    @else
                    <div class="card">
                        <div class="sa-example__body"> 
                            <form action="{{ route('jobCategory.store') }}" method="post">
                                @csrf
                                <h1 class="h5 m-0">Add New</h1>
                                <input type="text" name="title" placeholder="Enter title" value="{{ old('title') }}" class="form-control mt-3" required/> 
                                <div class="col-auto mt-4">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </form>
                        </div> 
                    </div>
                    @endisset
                </div>
            </div>
        </div>
    </div>
</div>
@endsection