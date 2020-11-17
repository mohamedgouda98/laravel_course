@extends('layouts.app')

@section('title')
    Edit Job - {{ $job->name }}
@endsection


@section('content')
    @include('includes.errors')

    <form method="POST" action="{{ route('jobs.update', $job->id) }}">
        @csrf

        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') ?? $job->name }}">
        </div>

        <div class="form-group">
            <textarea class="form-control" rows="8" name="description" placeholder="Description">{{ old('description') ?? $job->description }}</textarea>
        </div>

        <select class="custom-select" name="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" @if($category->id == $job->category_id) selected @endif >
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
@endsection
