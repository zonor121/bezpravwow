<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports</title>
    <!-- @Vite(['resources/css/app.css']) -->
</head>
<body class="reports-page">

    <header class="main-header">
        <div class="header-logo">
            <span class="logo-blue">НАРУШЕНИЙ</span><span class="logo-red">.НЕТ</span>
        </div>
        <div class="user-menu">
            <span class="user-name">username</span>
            <button class="btn-logout">Выйти</button>
        </div>
    </header>

    <div class="reports-wrapper">
    <a href="{{ url('reports/create') }}"> <button class="btn-create"> СОЗДАТЬ ЗАЯВЛЕНИЕ </button> </a> 

        <div class="reports-grid">
            @foreach ($reports as $report)
                <div class="report-card">
                    <div class="card-header">
                        <span class="card-date">
                        </span>
                        <div class="card-actions">
                            <form action="{{ route('reports.delete', $report->id) }}" method="POST" style="display: inline;">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn-icon btn-delete" title="Удалить">Удалить</button>
                            </form>
                            <form action="{{ route('reports.edit', $report->id) }}" method="GET" style="display: inline" >
                                @method('update')
                                @csrf
                                <button type="submit" class="btn-icon btn-update" title="Редактировать">Редактировать</button>
                            </form>

                        </div>
                    </div>

                    <h3 class="card-number">{{ $report->number }}</h3>
                    <p class="card-description">{{ $report->description }}</p>

                    @if($report->status)
                        <div class="card-status status-{{ strtolower($report->status->name) }}">
                            <strong>{{ $report->status->name }}</strong>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>

</body>
</html>