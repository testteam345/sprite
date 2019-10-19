@if ($paginator->hasPages())
    <nav class="pagination">
        @if ($paginator->onFirstPage())
            <a class="page-numbers" disabled><</a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="page-numbers"><</a>
        @endif

       

        {{-- <ul class="pagination-list"> --}}
            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                   {{ $element }}
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            {{-- <li><a class="pagination-link is-current"></a></li> --}}
                            <span class="page-numbers current">{{ $page }}</span>
                        @else
                            <a href="{{ $url }}" class="page-numbers">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach


            @if ($paginator->hasMorePages())
            <a class="page-numbers" href="{{ $paginator->nextPageUrl() }}" rel="next">></a>
        @else
            <a class="page-numbers" disabled>></a>
        @endif

        {{-- </ul> --}}
    </nav>
@endif

