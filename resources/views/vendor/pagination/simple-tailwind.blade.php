{{-- If we want ti customize the existing style we run the command "php artisan vendor:publish --tag=laravel-pagination
" and then we can customize this file if we are using simplePagination funtion or if we are using pagination we can
customize tailwind.blade.php file --}}


@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex gap-2 items-center justify-between">

        {{-- Previous --}}
        @if ($paginator->onFirstPage())
            <span
                class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-400 border border-gray-300 cursor-not-allowed rounded-md">
                {!! __('pagination.previous') !!}
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
                class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-800 border border-gray-300 rounded-md hover:border-gray-500">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        {{-- Next --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-800 border border-gray-300 rounded-md hover:border-gray-500">
                {!! __('pagination.next') !!}
            </a>
        @else
            <span
                class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-400 border border-gray-300 cursor-not-allowed rounded-md">
                {!! __('pagination.next') !!}
            </span>
        @endif

    </nav>
@endif