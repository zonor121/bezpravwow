<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>НАРУШЕНИЙ.NET</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#dfe5f5] min-h-screen">

<x-app-layout>
    <div class="px-6 pt-6">
        <x-filter :sort="$sort" :status="$status"></x-filter>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-6">
        @foreach ($reports as $report)
            <div class="bg-white rounded-3xl p-7 shadow-md hover:shadow-xl transition duration-300 min-h-[360px] flex flex-col justify-between">
                <div>
                    <p class="text-red-500 font-bold text-[18px] mb-4">
                        {{ \Carbon\Carbon::parse($report->created_at)->translatedFormat('d.m.Y H:i') }}
                    </p>

                    <h2 class="text-3xl font-extrabold text-black mb-5">
                        {{ $report->number }}
                    </h2>

                    <p class="text-gray-800 text-[20px] leading-[1.7] mb-10 break-words">
                        {{ $report->description }}
                    </p>

                </div>
                <div>

                    <div class="mb-8 text-[20px]">

                        <span class="text-black">
                            Статус заявления -
                        </span>
                        @if($report->status->id == 1)
                            <span class="font-bold text-black">
                                {{ mb_strtolower($report->status->name) }}
                            </span>
                        @elseif($report->status->id == 2)
                            <span class="font-bold text-blue-600">
                                {{ mb_strtolower($report->status->name) }}
                            </span>
                        @elseif($report->status->id == 3)
                            <span class="font-bold text-red-500">
                                {{ mb_strtolower($report->status->name) }}
                            </span>
                        @else
                            <span class="font-bold text-gray-500">
                                {{ mb_strtolower($report->status->name) }}
                            </span>
                        @endif
                    </div>
                    <div class="flex items-center gap-4">
                        <form method="POST"
                              action="{{ route('reports.delete', $report->id) }}"
                              class="inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit"
                                class="px-6 py-3 rounded-xl border border-gray-300 bg-white text-black text-lg font-medium hover:bg-gray-100 transition duration-200">
                                Удалить
                            </button>
                        </form>
                        <a href="{{ route('reports.edit', $report->id) }}"
                           class="px-6 py-3 rounded-xl bg-blue-600 text-white text-lg font-medium hover:bg-blue-700 transition duration-200 shadow-md">
                            Редактировать
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="px-6 pb-10">
        {{ $reports->links() }}
    </div>

</x-app-layout>

</body>
</html>