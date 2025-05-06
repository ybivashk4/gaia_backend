@if ($paginator->hasPages())
    <nav class="container">
        <ul class="pagination container flex-row align-items-center me-auto pe-auto">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled carousel-control-prev-icon bg-info me-4" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span aria-hidden="true"></span>
                </li>
            @else
                <li class="carousel-control-prev-icon me-4">
                    <a class="carousel-control-prev-icon bg-info" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"></a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active link-info fs-4 me-4" aria-current="page"><span>{{ $page }}</span></li>
                        @else
                            <li class="me-4"><a class="link-info fs-4" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="me-4">
                    <a class="carousel-control-next-icon bg-info " href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"></a>
                </li>
            @else
                <li class="disabled carousel-control-next-icon bg-info me-4" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true"></span>
                </li>
            @endif
        </ul>

    </nav>

@endif
