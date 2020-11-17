@extends('layouts.app')

@section('title')
    All Jobs
@endsection

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>All Jobs</h1>
        <a href="{{ route('jobs.create') }}" class="btn btn-primary">Create new Job</a>
    </div>

    @if(count($jobs))
        @foreach($jobs as $job)
            <hr>
            <div class="d-flex justify-content-between align-items-center">
                <a href="{{ route('jobs.show', $job->id) }}">
                    <h2>{{ $job->name }}</h2>
                </a>

                <a href="{{ route('jobs.delete', $job->id) }}" class="btn btn-danger">Delete</a>
            </div>
        @endforeach
    @else
        <hr>
        <h2>No Jobs Found yet</h2>
    @endif

@endsection

