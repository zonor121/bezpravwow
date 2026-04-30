<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>НАРУШЕНИЙ.NET</title>
    @Vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>Список заявок</h1>
        <div>
            <span> Сортировка по дате создания: </span>
            <a href="{{ route('reports.index', ['sort' => 'desc', 'status' => $status]) }}">Сначало новые</a>
            <a href="{{ route('reports.index', ['sort' => 'asc', 'status' => $status]) }}">Сначало старые</a>
        </div>
        <div>
            <p>Фильтрация по статусу заявки</p>
            <ul>
                @foreach ($statuses as $status)
                    <li>
                        <a href="{{ route('reports.index', ['sort' => $sort, 'status' => $status -> id ]) }}">{{ $status->name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <a href="{{url('reports/create')}}"><button>Создать заявку</button></a>
        @foreach ($reports as $report)
           <div class="card">
            <h2>Намбер: {{ $report -> number }}</h2>
            <p>Описание: {{ $report -> description }}</p>
            <p>Создан: {{ $report -> created_at }}</p>
            <p><strong>Статус: {{ $report->status->name }} </strong></p>
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
        {{ $reports->links() }}
</body>
</html>
