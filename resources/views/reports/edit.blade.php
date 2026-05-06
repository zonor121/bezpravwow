<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактирование {{$report->title}}</title>
</head>
<body>
<x-app-layout>
    <div class="container">
<form action="{{ route('reports.update', $report->id) }}" method="POST">
            @csrf
            @method('put')

            <label for="title">Название продукта</label><br>
            <input id="title" name="number" type="text" required value="{{ $report->number }}"><br>

            <label for="description">Описание продукта</label><br>
            <textarea id="description" name="description" cols="30" rows="10" required>{{$report->description}}</textarea><br>

            <input type="submit" value="Сохранить изменения">
        </form>
    </div>
</x-app-layout>
</body>
</html>