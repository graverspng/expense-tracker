<!-- resources/views/categories/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Create New Category</h1>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Category Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="form-group">
            <label for="hex_color">Hex Color</label>
            <input type="text" name="hex_color" id="hex_color" class="form-control" value="{{ old('hex_color') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Category</button>
    </form>
@endsection
