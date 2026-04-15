<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>НАРУШЕНИЙ.NET</title>
</head>
<body>
    <h1>Список заявок</h1>
        <a href="{{url('reports/create')}}"><button>Создать заявку</button></a>
        @foreach ($reports as $report)
           <div class="card">
            <h2>{{ $report -> number }}</h2>
            <p>{{ $report -> description }}</p>
            <p>{{ $report -> created_at }}</p>
            <p>{{ $report -> status -> name }}</p>
           </div>
        

            <div>
            <form method="POST" action="{{route('reports.delete', $report->id)}}">
            @method('delete')
            @csrf
            <input type="submit" value="Удалить">
            </form>
            </div>
            <div>
            <a href="{{ url(route('reports.edit', $report->id)) }}">
            <button type="submit" value="Обновить"> Редактировать </button></a>
            </div>    
        @endforeach
</body>
</html>
