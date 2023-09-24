@if ($paginator->hasPages())
    <nav class="flex items-center justify-between">
        {{-- Pagination in Mobile Device Start --}}
        <div class="flex flex-1 justify-evenly md:hidden">
            {{-- Previous Button Start --}}
            @if ($paginator->onFirstPage())
                {{-- First Page Active Start --}}
                <span class="pagination-mobile-page-active">
                    {!! __('pagination.previous') !!}
                </span>
                {{-- First Page Active End --}}
            @else
                {{-- First Page Not Active Start --}}
                <a href="{{ $paginator->previousPageUrl() }}" class="pagination-mobile-page-not-active">
                    {!! __('pagination.previous') !!}
                </a>
                {{-- First Page Not Active End --}}
            @endif
            {{-- Previous Button End --}}

            {{-- Next Button Start --}}
            @if ($paginator->hasMorePages())
                {{-- Has More Page Not Active Start --}}
                <a href="{{ $paginator->nextPageUrl() }}" class="pagination-mobile-page-not-active">
                    {!! __('pagination.next') !!}
                </a>
                {{-- Has More Page Not Active End --}}
            @else
                {{-- Has More Page Active Start --}}
                <span class="pagination-mobile-page-active">
                    {!! __('pagination.next') !!}
                </span>
                {{-- Has More Page Active End --}}
            @endif
            {{-- Next Button End --}}
        </div>
        {{-- Pagination in Mobile Device End --}}

        {{-- Pagination in Desktop Device Start --}}
        <div class="hidden md:flex md:flex-1 md:items-center md:justify-between">
            {{-- Showing Information of Page Start --}}
            <div>
                <p class="text-sm leading-5 text-white dark:text-slate-300">
                    {!! __('Showing') !!}
                    @if ($paginator->firstItem())
                        <span class="font-medium">{{ $paginator->firstItem() }}</span>
                        {!! __('to') !!}
                        <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    @else
                        <span class="font-medium">{{ $paginator->count() }}</span>
                    @endif
                    {!! __('of') !!}
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    {!! __('results') !!}
                </p>
            </div>
            {{-- Showing Information of Page End --}}

            {{-- Page Link Start --}}
            <div class="relative z-0 inline-flex rounded-md shadow-sm">
                {{-- Previous Page Link Button Start --}}
                <div>
                    @if ($paginator->onFirstPage())
                        {{-- on First Page Start --}}
                        <span
                            class="relative my-1 inline-flex cursor-default items-center rounded-l-md border border-none bg-transparent px-2 py-2 text-sm font-medium leading-5 text-white dark:border-slate-400 dark:bg-slate-600 dark:text-slate-300">
                            <i class="fa-solid fa-chevron-left flex h-5 w-5 items-center justify-center"></i>
                        </span>
                        {{-- on First Page End --}}
                    @else
                        {{-- Not in First Page Start --}}
                        <a href="{{ $paginator->previousPageUrl() }}" class="my-1 relative inline-flex items-center rounded-l-md border border-none bg-transparent px-2 py-2 text-sm font-medium leading-5 text-white ring-slate-300 transition duration-150 ease-in-out hover:text-slate-400 focus:z-10 focus:border-blue-300 focus:outline-none focus:ring active:bg-white active:text-slate-500 dark:bg-slate-600 dark:border-slate-400 dark:text-slate-300">
                            <i class="fa-solid fa-chevron-left flex h-5 w-5 items-center justify-center"></i>
                        </a>
                        {{-- Not in First Page End --}}
                    @endif
                </div>
                {{-- Previous Page Link Button End --}}

                {{-- Pagination Elements (1,2,3,4,5,6,7,8,9,10) Start --}}
                <div class="flex">
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator Start --}}
                        @if (is_string($element))
                            <span class="my-1 relative -ml-px inline-flex cursor-default items-center border border-none bg-transparent px-4 py-2 text-sm font-medium leading-5 text-white dark:bg-slate-600 dark:border-slate-400 dark:text-slate-300">
                                {{ $element }}
                            </span>
                        @endif
                        {{-- "Three Dots" Separator End --}}

                        {{-- Numbers Of Links Start --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    {{-- Page Number Active Start --}}
                                    <span class="my-1 relative -ml-px inline-flex cursor-default items-center border border-none bg-transparent px-4 py-2 text-sm font-medium leading-5 text-slate-300 dark:bg-slate-600 dark:border-slate-400 dark:text-slate-300">
                                        {{ $page }}
                                    </span>
                                    {{-- Page Number Active End --}}
                                @else
                                    {{-- Page Number Not Active Start --}}
                                    <a href="{{ $url }}" class="my-1 relative -ml-px inline-flex items-center border border-none bg-transparent px-4 py-2 text-sm font-medium leading-5 text-white ring-slate-300 transition duration-150 ease-in-out hover:text-slate-500 focus:z-10 focus:border-blue-300 focus:outline-none focus:ring active:bg-slate-100 active:text-slate-700 dark:bg-slate-600 dark:border-slate-400 dark:text-slate-300">
                                        {{ $page }}
                                    </a>
                                    {{-- Page Number Not Active End --}}
                                @endif
                            @endforeach
                        @endif
                        {{-- Numbers Of Links End --}}
                    @endforeach
                </div>
                {{-- Pagination Elements (1,2,3,4,5,6,7,8,9,10) End --}}

                {{-- Next Page Link Button Start --}}
                <div>
                    @if ($paginator->hasMorePages())
                        {{-- Not in Last Page Start --}}
                        <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="my-1 relative -ml-px inline-flex items-center rounded-r-md border border-none bg-transparent px-2 py-2 text-sm font-medium leading-5 text-white ring-slate-300 transition duration-150 ease-in-out hover:text-slate-400 focus:z-10 focus:border-blue-300 focus:outline-none focus:ring active:bg-slate-100 active:text-slate-500 dark:bg-slate-600 dark:border-slate-400 dark:text-slate-300">
                            <i class="fa-solid fa-chevron-right flex h-5 w-5 items-center justify-center"></i>
                        </a>
                        {{-- Not in Last Page End --}}
                    @else
                        {{-- in Last Page Start --}}
                        <span class="my-1 relative -ml-px inline-flex cursor-default items-center rounded-r-md border border-none bg-transparent px-2 py-2 text-sm font-medium leading-5 text-white dark:bg-slate-600 dark:border-slate-400 dark:text-slate-300">
                            <i class="fa-solid fa-chevron-right flex h-5 w-5 items-center justify-center"></i>
                        </span>
                        {{-- in Last Page End --}}
                    @endif
                </div>
                {{-- Next Page Link Button End --}}
            </div>
            {{-- Page Link End --}}
        </div>
        {{-- Pagination in Desktop Device End --}}
    </nav>
@endif
