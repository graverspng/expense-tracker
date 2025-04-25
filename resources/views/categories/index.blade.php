<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategoriju saraksts</title>
</head>
<body>
    <h1>Kategoriju saraksts</h1>
    <a href="{{ route('categories.create') }}">Izveidot jaunu kategoriju</a>

    <table border="1">
        <thead>
            <tr>
                <th>Nosaukums</th>
                <th>Krāsa</th>
                <th>Izdevumi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td style="background-color: {{ $category->hex_color }};">{{ $category->hex_color }}</td>
                    <td>
                        @foreach ($category->expenses as $expense)
                            <p>{{ $expense->description }} - {{ $expense->amount }} EUR</p>
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
