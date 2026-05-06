<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- @Vite(['resources/css/app.css', 'resources/js/app.js']) -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создатель заявления</title>
</head>
<body>
<x-app-layout>
    <form action=" {{ route('reports.store') }}" method="Post">Создать заявление <br>
        @csrf
        <input type="text" name="number" required placeholder="Введите номер авто"><br>
        <textarea name="description" id="" cols="30" rows="10" required placeholder="Введите описание заявки"></textarea><br>
        <input type="submit" value="Создать заявку"><br>
    </form>
</x-app-layout>
</body>
</html>