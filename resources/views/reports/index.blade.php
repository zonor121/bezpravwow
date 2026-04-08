<!DOCTYPE html>
<html lang="ru">
<head>
    @Vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports</title>
</head>
<body>
    <header>
    <form action="{{ route('reports.delete', $report -> id ) }}" method="POST"></form>
    @method('delete')
    @csrf
    <input type="submit" value="Удалить">

    </header>
    <main>
    @foreach ($reports as $report)
            <div class="card">
                <h2>{{ $report->number }}</h2>
                <p>{{ $report->description }}</p>
                
            </div>
        @endforeach
    </main>
    <footer>3</footer>
</body>
</html>