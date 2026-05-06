<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Читы - бан, кемперство - бан, оскорбление администрации - расстрел, потом бан</title>
</head>
<body>
<x-app-layout>
<h3 style="text-align:center;"><strong>Административная панель</strong></h3>

<table>
    <thead>
        <tr>
            <th>ФИО</th>
            <th>Текст заявления</th>
            <th>Номер автомобиля</th>
            <th>Статус</th>
        </tr>
    </thead>
    <tbody>
        @foreach($reports as $report)
            <tr>
                <td>{{ $report->user->name ?? 'Не указано' }}</td>
                <td>{{ $report->description }}</td>
                <td>{{ $report->number }}</td>
                            <td><div>
                @if($report->status_id === 1)
                    <form class="status-form" action="{{ route('reports.status.update', $report->id) }}" method="POST">
                        @method('patch')
                        @csrf
                        <select name="status_id" id="status_id">
                            @foreach($statuses as $status)
                                <option value="{{ $status->id }}" {{ $status->id === $report->status_id ? 'selected' : '' }}>
                                    {{ $status->name }}
                                </option>
                            @endforeach
                        </select>
                    </form>
                @else
                    <strong>{{ $report->status->name }}</strong>
                @endif
                </div></td>
            </tr>
        @endforeach
    </tbody>
</table>

</x-app-layout>
</body>
</html>

