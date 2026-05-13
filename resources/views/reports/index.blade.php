<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>НАРУШЕНИЙ.NET</title>
    @Vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-app-layout>
        <x-filter :sort=$sort :status=$status></x-filter>
        <a href="{{url('reports/create')}}"><button>Создать заявку</button></a>
        @foreach ($reports as $report)
           <div class="card">
            <h2>Намбер: {{ $report -> number }}</h2>
            <p>Описание: {{ $report -> description }}</p>
            <p>Создан: {{ $report -> created_at }}</p>
            <p><strong>Статус: {{ $report->status->name }} </strong></p>
            <x-status :type="$report->status->id">
              {{ $report->status->name }}
            </x-status>
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
    </x-app-layout>
</body>
</html>
