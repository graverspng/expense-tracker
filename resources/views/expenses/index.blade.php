<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Izdevumu saraksts</title>
</head>
<body>
    <h1>Izdevumu saraksts</h1>
    <a href="{{ route('expenses.create') }}">Izveidot jaunu izdevumu</a>

    <table border="1">
        <thead>
            <tr>
                <th>Apraksts</th>
                <th>Summa</th>
                <th>Kategorija</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($expenses as $expense)
                <tr>
                    <td>{{ $expense->description }}</td>
                    <td>{{ $expense->amount }} EUR</td>
                    <td>{{ $expense->category->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
