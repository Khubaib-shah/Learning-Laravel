@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="pagination">

        {{-- MOBILE VIEW --}}
        <div class="flex gap-2 items-center justify-between sm:hidden">

            {{-- Previous --}}
            @if ($paginator->onFirstPage())
                <span class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-400 border border-gray-300 rounded-md cursor-not-allowed">
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
                <span class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-400 border border-gray-300 rounded-md cursor-not-allowed">
                    {!! __('pagination.next') !!}
                </span>
            @endif

        </div>

        {{-- DESKTOP VIEW --}}
        <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">

            {{-- Showing X to Y --}}
            <div>
                <p class="text-sm text-gray-700 dark:text-gray-300">
                    {!! __('Showing') !!}
                    @if ($paginator->firstItem())
                        <span class="font-medium">{{ $paginator->firstItem() }}</span>
                        {!! __('to') !!}
                        <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    @else
                        {{ $paginator->count() }}
                    @endif
                    {!! __('of') !!}
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    {!! __('results') !!}
                </p>
            </div>

            {{-- Page Numbers --}}
            <div>
                <span class="inline-flex shadow-sm rounded-md">

                    {{-- Previous --}}
                    @if ($paginator->onFirstPage())
                        <span class="inline-flex items-center px-3 py-2 text-sm text-gray-400 border border-gray-300 rounded-l-md cursor-not-allowed">
                            ‹
                        </span>
                    @else
                        <a href="{{ $paginator->previousPageUrl() }}"
                           class="inline-flex items-center px-3 py-2 text-sm text-gray-700 border border-gray-300 rounded-l-md hover:border-gray-500">
                            ‹
                        </a>
                    @endif

                    {{-- Page Numbers --}}
                    @foreach ($elements as $element)
                        {{-- Separator --}}
                        @if (is_string($element))
                            <span class="inline-flex items-center px-4 py-2 text-sm text-gray-500 border border-gray-300 cursor-default">
                                {{ $element }}
                            </span>
                        @endif

                        {{-- Numbers --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span class="inline-flex items-center px-4 py-2 text-sm font-semibold text-blue-600 border border-blue-400 cursor-default">
                                        {{ $page }}
                                    </span>
                                @else
                                    <a href="{{ $url }}"
                                       class="inline-flex items-center px-4 py-2 text-sm text-gray-700 border border-gray-300 hover:border-gray-500">
                                        {{ $page }}
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next --}}
                    @if ($paginator->hasMorePages())
                        <a href="{{ $paginator->nextPageUrl() }}"
                           class="inline-flex items-center px-3 py-2 text-sm text-gray-700 border border-gray-300 rounded-r-md hover:border-gray-500">
                            ›
                        </a>
                    @else
                        <span class="inline-flex items-center px-3 py-2 text-sm text-gray-400 border border-gray-300 rounded-r-md cursor-not-allowed">
                            ›
                        </span>
                    @endif

                </span>
            </div>
        </div>
    </nav>
@endif
