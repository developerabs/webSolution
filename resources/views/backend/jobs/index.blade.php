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
                            <li class="breadcrumb-item active" aria-current="page">All Jobs</li>
                        </ol>
                    </nav>
                    <h1 class="h3 m-0">All Jobs</h1>
                </div> 
                <div class="col-auto d-flex"><a href="{{ route('jobs.add') }}" class="btn btn-primary">Publish New Job</a></div>
            </div>
            <div class="row">
                <div class="col-12">
                    
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
                                    <th>Thumbnail</th>
                                    <th>Job Type</th>
                                    <th>Created Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($allData as $key => $item)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td class="min-w-10x">{{ $item->title }}</td>
                                    <td>
                                        <img src="{{ asset($item->thumbnail) }}" alt="job image" width="60">
                                    </td>
                                    <td>{{ $item->job_category->title }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td> 
                                        <label class="form-check form-switch mt-4">
                                            <input type="checkbox" name="status" onchange="jobStatusChange({{ $item->id }})" class="form-check-input is-valid" {{ $item->status == 1? 'checked': '' }} />
                                        </label>
                                    </td>
                                    <td>
                                        <a href="{{ route('jobs.edit',$item->id) }}" class="btn btn-primary btn-sa-pill btn-sm">Edit</a>
                                        <a href="{{ route('jobs.delete',$item->id) }}" id="delete" class="btn btn-danger btn-sa-pill btn-sm">Delete</a>
                                    </td>
                                </tr> 
                                @endforeach 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection