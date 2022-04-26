@extends('backend.layouts.app')

@section('content')
<div class="container pb-6">
    <div class="py-5">
        <div class="row g-4 align-items-center">
            <div class="col"><h1 class="h3 m-0">Dashboard</h1></div>
            <div class="col-auto d-flex">
                <select class="form-select me-3">
                    <option selected="">7 October, 2021</option>
                </select>
                <a href="#" class="btn btn-primary">Export</a>
            </div>
        </div>
    </div>
    <div class="row g-4 g-xl-5">
        <div class="col-12 col-md-4 d-flex">
            <div class="card saw-indicator flex-grow-1" data-sa-container-query='{"340":"saw-indicator--size--lg"}'>
                <div class="sa-widget-header saw-indicator__header">
                    <h2 class="sa-widget-header__title">Total Job Type</h2>
                    <div class="sa-widget-header__actions">
                        <div class="dropdown">
                            <button
                                type="button"
                                class="btn btn-sm btn-sa-muted d-block"
                                id="widget-context-menu-1"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                                aria-label="More"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" width="3" height="13" fill="currentColor">
                                    <path
                                        d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z"
                                    ></path>
                                </svg>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="widget-context-menu-1">
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Move</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item text-danger" href="#">Remove</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="saw-indicator__body">
                    <div class="saw-indicator__value">{{ $jobCatCount }}</div>
                    <div class="saw-indicator__delta saw-indicator__delta--rise">
                        <div class="saw-indicator__delta-direction">
                            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="currentColor">
                                <path d="M9,0L8,6.1L2.8,1L9,0z"></path>
                                <circle cx="1" cy="8" r="1"></circle>
                                <rect
                                    x="0"
                                    y="4.5"
                                    transform="matrix(0.7071 -0.7071 0.7071 0.7071 -2.864 4.0858)"
                                    width="7.1"
                                    height="2"
                                ></rect>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 d-flex">
            <div class="card saw-indicator flex-grow-1" data-sa-container-query='{"340":"saw-indicator--size--lg"}'>
                <div class="sa-widget-header saw-indicator__header">
                    <h2 class="sa-widget-header__title">Total Job Post</h2>
                    <div class="sa-widget-header__actions">
                        <div class="dropdown">
                            <button
                                type="button"
                                class="btn btn-sm btn-sa-muted d-block"
                                id="widget-context-menu-2"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                                aria-label="More"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" width="3" height="13" fill="currentColor">
                                    <path
                                        d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z"
                                    ></path>
                                </svg>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="widget-context-menu-2">
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Move</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item text-danger" href="#">Remove</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="saw-indicator__body">
                    <div class="saw-indicator__value">{{ $jobCount }}</div>
                    <div class="saw-indicator__delta saw-indicator__delta--fall">
                        <div class="saw-indicator__delta-direction">
                            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="currentColor">
                                <path d="M2.8,8L8,2.9L9,9L2.8,8z"></path>
                                <circle cx="1" cy="1" r="1"></circle>
                                <rect
                                    x="0"
                                    y="2.5"
                                    transform="matrix(0.7071 0.7071 -0.7071 0.7071 3.5 -1.4497)"
                                    width="7.1"
                                    height="2"
                                ></rect>
                            </svg>
                        </div> 
                    </div> 
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 d-flex">
            <div class="card saw-indicator flex-grow-1" data-sa-container-query='{"340":"saw-indicator--size--lg"}'>
                <div class="sa-widget-header saw-indicator__header">
                    <h2 class="sa-widget-header__title">Total User</h2>
                    <div class="sa-widget-header__actions">
                        <div class="dropdown">
                            <button
                                type="button"
                                class="btn btn-sm btn-sa-muted d-block"
                                id="widget-context-menu-3"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                                aria-label="More"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" width="3" height="13" fill="currentColor">
                                    <path
                                        d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z"
                                    ></path>
                                </svg>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="widget-context-menu-3">
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Move</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item text-danger" href="#">Remove</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="saw-indicator__body">
                    <div class="saw-indicator__value">{{ $userCount }}</div>
                    <div class="saw-indicator__delta saw-indicator__delta--rise">
                        <div class="saw-indicator__delta-direction">
                            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="currentColor">
                                <path d="M9,0L8,6.1L2.8,1L9,0z"></path>
                                <circle cx="1" cy="8" r="1"></circle>
                                <rect
                                    x="0"
                                    y="4.5"
                                    transform="matrix(0.7071 -0.7071 0.7071 0.7071 -2.864 4.0858)"
                                    width="7.1"
                                    height="2"
                                ></rect>
                            </svg>
                        </div> 
                    </div> 
                </div>
            </div>
        </div>
        
        <div class="col-12 col-xxl-9 d-flex">
            <div class="card flex-grow-1 saw-table">
                <div class="sa-widget-header saw-table__header">
                    <h2 class="sa-widget-header__title">Recent Jobs</h2>
                    <div class="sa-widget-header__actions">
                        <div class="dropdown">
                            <button
                                type="button"
                                class="btn btn-sm btn-sa-muted d-block"
                                id="widget-context-menu-6"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                                aria-label="More"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" width="3" height="13" fill="currentColor">
                                    <path
                                        d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z"
                                    ></path>
                                </svg>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="widget-context-menu-6">
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Move</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item text-danger" href="#">Remove</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="saw-table__body sa-widget-table text-nowrap">
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
                            @foreach ($recentJob as $key => $item)
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

@endsection