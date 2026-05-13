@props(['sort', 'status'])

<div class="flex gap-6">

    {{-- СОРТИРОВКА --}}
    <div class="w-56">
        <div class="mb-2 px-1">
            <h3 class="text-sm font-semibold text-heading">
                Сортировка
            </h3>
        </div>

        <div class="rounded-base shadow-xs overflow-hidden border border-default">

            <a href="{{ route('reports.index', ['sort' => 'desc', 'status' => $status]) }}"
               class="block w-full px-4 py-3 text-sm font-medium text-body bg-neutral-primary-soft hover:bg-neutral-secondary-medium hover:text-heading transition border-b border-default">
                🕒 Сначала новые
            </a>

            <a href="{{ route('reports.index', ['sort' => 'asc', 'status' => $status]) }}"
               class="block w-full px-4 py-3 text-sm font-medium text-body bg-neutral-primary-soft hover:bg-neutral-secondary-medium hover:text-heading transition">
                📁 Сначала старые
            </a>

        </div>
    </div>


    {{-- ФИЛЬТРАЦИЯ --}}
    <div class="w-56">
        <div class="mb-2 px-1">
            <h3 class="text-sm font-semibold text-heading">
                Фильтрация по статусу
            </h3>
        </div>

        <div class="rounded-base shadow-xs overflow-hidden border border-default">

            {{-- КНОПКА ВСЕ --}}
            <a href="{{ route('reports.index', ['sort' => $sort]) }}"
               class="block w-full px-4 py-3 text-sm font-medium transition

               {{ !$status
                    ? 'bg-brand-primary text-blue-600'
                    : 'bg-neutral-primary-soft text-body hover:bg-neutral-secondary-medium hover:text-heading'
               }}

               border-b border-default">
               
                Все
            </a>

            {{-- СТАТУСЫ --}}
            @foreach($statuses as $item)
                <a href="{{ route('reports.index', ['sort' => $sort, 'status' => $item->id]) }}"
                   class="block w-full px-4 py-3 text-sm font-medium transition
                   
                   {{ $status == $item->id
                        ? 'bg-brand-primary text-blue-600'
                        : 'bg-neutral-primary-soft text-body hover:bg-neutral-secondary-medium hover:text-heading'
                   }}

                   {{ !$loop->last ? 'border-b border-default' : '' }}">
                   
                    {{ $item->name }}
                </a>
            @endforeach

        </div>
    </div>

</div>