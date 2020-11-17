@extends('layouts.app')

@section('title')
    All Categories
@endsection

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>All Categories</h1>
        <a href="{{ route('categories.create') }}" class="btn btn-primary">Create new category</a>
    </div>

    @if(count($categories))
        @foreach($categories as $category)
            <hr>
            <div class="d-flex justify-content-between align-items-center">

                <a href="{{ route('categories.show', $category->id) }}">
                    <h2>{{ $category->name }}</h2>
                </a>

                <a href="{{ route('categories.delete', $category->id) }}" class="btn btn-danger">Delete</a>
            </div>
        @endforeach
    @else
        <hr>
        <h2>No Categories Found</h2>
    @endif

@endsection

