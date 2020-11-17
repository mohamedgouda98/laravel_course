@extends('layouts.app')

@section('title')
    Create Category
@endsection

@section('content')
    @include('includes.errors')

    <form method="POST" action="{{ route('categories.store') }}">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}">
        </div>

        <button type="submit" class="btn btn-primary">Add Category</button>
    </form>
@endsection

