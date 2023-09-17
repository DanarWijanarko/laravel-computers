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
                <p class="text-sm leading-5 text-gray-700">
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
                        <span class="pagination-first-page-active">
                            <i class="fa-solid fa-chevron-left flex h-5 w-5 items-center justify-center"></i>
                        </span>
                        {{-- on First Page End --}}
                    @else
                        {{-- Not in First Page Start --}}
                        <a href="{{ $paginator->previousPageUrl() }}" class="pagination-first-page-not-active">
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
                            <span class="pagination-three-dot-separator">
                                {{ $element }}
                            </span>
                        @endif
                        {{-- "Three Dots" Separator End --}}

                        {{-- Numbers Of Links Start --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    {{-- Page Number Active Start --}}
                                    <span class="pagination-page-number-link-active">
                                        {{ $page }}
                                    </span>
                                    {{-- Page Number Active End --}}
                                @else
                                    {{-- Page Number Not Active Start --}}
                                    <a href="{{ $url }}" class="pagination-page-number-link-not-active">
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
                        <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="pagination-has-more-page-not-active">
                            <i class="fa-solid fa-chevron-right flex h-5 w-5 items-center justify-center"></i>
                        </a>
                        {{-- Not in Last Page End --}}
                    @else
                        {{-- in Last Page Start --}}
                        <span class="pagination-has-more-page-active">
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
