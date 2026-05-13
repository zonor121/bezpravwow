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

        @foreach ($reports as $report)
   
    <div class="bg-neutral-primary-soft block max-w-sm p-6 border border-default rounded-base shadow-xs mb-4">
        
        <h5 class="mb-3 text-2xl font-semibold tracking-tight text-heading leading-8">
            Намбер: {{ $report->number }}
        </h5>
        
        <p class="text-body mb-6">
            Описание: {{ $report->description }}
        </p>
        
        <p>Создан: {{\Carbon\Carbon::parse($report->created_at)->translatedFormat('j F Y h:i');}}</p>

        <x-status :type="$report->status->id" >
            <strong>{{ $report->status->name }}</strong>
        </x-status>
        
        
        <div class="flex items-center gap-3 mt-4">
         
            <form method="POST" action="{{ route('reports.delete', $report->id) }}" class="inline">
                @method('DELETE')
                @csrf
                <button type="submit" class="inline-flex items-center text-black bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">
                    Удалить
                </button>
            </form>

            
            <a href="{{ route('reports.edit', $report->id) }}" class="inline-flex items-center text-black bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">
                Редактировать
            </a>
        </div>

    </div> 
@endforeach

<
<div class="mt-4">
    {{ $reports->links() }}
</div>

    </x-app-layout>
</body>
</html>

