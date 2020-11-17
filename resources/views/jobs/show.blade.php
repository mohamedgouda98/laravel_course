@extends('layouts.app')

@section('title')
    Show Job {{ $job->id }}
@endsection

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Job title: {{ $job->name }}</h1>
        <a href="{{ route('jobs.edit', $job->id) }}" class="btn btn-info">Edit</a>
    </div>
    <hr>

    <p><b>Description:</b> {{ $job->description }}</p>

    <p class="d-inline-block"><b>Category:</b></p>
    <a href="{{ route('categories.show', $job->category->id) }}">
        {{ $job->category->name }}
    </a>

    <hr>

    <a href="{{ route('jobs.index') }}">Show all Jobs</a>


@endsection
