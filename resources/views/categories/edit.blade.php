@extends('layouts.app')

@section('content')
    <h1>Edit Category</h1>

    <form action="{{ route('categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Category Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $category->name) }}" required>
        </div>

        <div class="form-group">
            <label for="hex_color">Hex Color</label>
            <input type="text" name="hex_color" id="hex_color" class="form-control" value="{{ old('hex_color', $category->hex_color) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Category</button>
    </form>
@endsection