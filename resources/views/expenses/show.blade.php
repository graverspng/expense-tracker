<!-- resources/views/expenses/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Expense Details</h1>

    <p>Amount: {{ $expense->amount }}€</p>
    <p>Category: {{ $expense->category->name }}</p>

    <a href="{{ route('expenses.index') }}" class="btn btn-secondary">Back to Expenses</a>
@endsection
