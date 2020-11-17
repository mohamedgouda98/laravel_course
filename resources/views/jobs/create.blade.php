@extends('layouts/app')

@section('title')
    Create Job
@endsection

@section('content')
    @include('includes.errors')

    <form method="POST" action="{{ route('jobs.store') }}">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}">
        </div>

        <div class="form-group">
            <textarea class="form-control" rows="8" name="description" placeholder="Description">{{ old('description') }}</textarea>
        </div>

        @if(count($categories))
            <select class="custom-select" name="category_id">
                <option selected disabled>Select Category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        @else
            <a href="{{ route('categories.create') }}" class="d-block">Create new category</a>
        @endif


        @if(count($categories))
            <button type="submit" class="btn btn-primary mt-3">Add Job</button>
        @else
            <button type="submit" disabled class="btn btn-primary mt-3">Add Job</button>
        @endif

    </form>
@endsection
