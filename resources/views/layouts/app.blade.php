<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Tracker</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <nav>
            <!-- Your navigation links here -->
            <ul>
                <li><a href="{{ route('categories.index') }}">Categories</a></li>
                <li><a href="{{ route('expenses.index') }}">Expenses</a></li>
            </ul>
        </nav>

        <!-- Content from child views will be injected here -->
        @yield('content')
    </div>
</body>
</html>
