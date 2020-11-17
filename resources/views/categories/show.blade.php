@extends('layouts.app')

@section('title')
    Show Category {{ $category->id }}
@endsection

@section('content')
    <h1>Category Name: {{ $category->name }}</h1>
    <hr>

    <p class="mb-0"><b>Jobs:</b></p>
    <ul>
        @if(count($category->jobs))
            @foreach ($category->jobs as $job)
                <li>
                    <a href="{{ route('jobs.show', $job->id) }}">
                        {{ $job->name }}
                    </a>
                </li>
            @endforeach
        @else
            <p class="d-inline-block">There is no Job yet for this Category, </p>
            <a href="{{ route('jobs.create') }}">Create new Job</a>
        @endif
    </ul>

    <hr>

    <a href="{{ route('categories.index') }}">Show all categories</a>


@endsection
