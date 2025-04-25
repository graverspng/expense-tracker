<!-- resources/views/expenses/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Create New Expense</h1>

    <form action="{{ route('expenses.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="number" name="amount" id="amount" class="form-control" value="{{ old('amount') }}" required>
        </div>

        <div class="form-group">
            <label for="category_id">Category</label>
            <select name="category_id" id="category_id" class="form-control" required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Create Expense</button>
    </form>
@endsection
