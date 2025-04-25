<!-- resources/views/categories/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>{{ $category->name }}</h1>

    <p>Hex Color: <span style="background-color: {{ $category->hex_color }};">{{ $category->hex_color }}</span></p>

    <h2>Associated Expenses</h2>
    <ul>
        @foreach ($category->expenses as $expense)
            <li>{{ $expense->amount }}€</li>
        @endforeach
    </ul>

    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back to Categories</a>
@endsection
