@extends('frontend.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="job-details mt-4">
                <img src="{{ asset($detailsData->thumbnail) }}" alt="" srcset="" width="100%" height="200">
                <h5>{{ $detailsData->title }}</h5>
                <p>Job Type: {{ $detailsData->job_category->title }}</p>
                <strong>Details:</strong>
                <div class="details">
                    {!! $detailsData->description !!}
                </div>
                <a href="{{ route('applyJob',['id'=>$detailsData->id,'slug'=>$detailsData->title]) }}" class="btn btn-warning btn-sm text-end mt-4">Apply Now</a>
            </div>
        </div>
    </div>
</div>

@endsection

