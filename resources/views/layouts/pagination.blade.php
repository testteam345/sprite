@if ($paginator->hasPages())
    <div class="row">
            @if ($paginator->onFirstPage())
            <div class="col-sm-3 hidden-xs">
                    <a class="button size-1 style-5" href="#" disabled>
                        <span class="button-wrapper">
                            <span class="icon"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                            <span class="text">prev page</span>
                        </span>
                    </a>
                </div>
        @else
        <div class="col-sm-3 hidden-xs">
                <a class="button size-1 style-5" href="{{ $paginator->previousPageUrl() }}" disabled>
                    <span class="button-wrapper">
                        <span class="icon"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                        <span class="text">prev page</span>
                    </span>
                </a>
            </div>
        @endif

       

        {{-- <ul class="pagination-list"> --}}
            {{-- Pagination Elements --}}
            <div class="col-sm-6 text-center">
                    <div class="pagination-wrapper">
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
                            <a class="pagination active">{{ $page }}</a>
                        @else
                            <a href="{{ $url }}" class="pagination">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach
                    </div>
            </div>


            @if ($paginator->hasMorePages())
            <div class="col-sm-3 hidden-xs text-right">
                    <a class="button size-1 style-5" href="{{ $paginator->nextPageUrl() }}">
                        <span class="button-wrapper">
                            <span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                            <span class="text">prev page</span>
                        </span>
                    </a>
                </div>
        @else
        <div class="col-sm-3 hidden-xs text-right">
                <a class="button size-1 style-5" href="{{ $paginator->nextPageUrl() }}" disabled>
                    <span class="button-wrapper">
                        <span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                        <span class="text">prev page</span>
                    </span>
                </a>
            </div>
        @endif

    </div>
    @endif


         
            
           
                    {{-- <a class="pagination active">1</a>
                    <a class="pagination">2</a>
                    <a class="pagination">3</a>
                    <a class="pagination">4</a>
                    <a class="pagination">23</a>
                </div>
            </div> --}}
            {{-- <div class="col-sm-3 hidden-xs text-right">
                <a class="button size-1 style-5" href="#">
                    <span class="button-wrapper">
                        <span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                        <span class="text">prev page</span>
                    </span>
                </a>
            </div> --}}
        {{-- </div> --}}


{{-- <div class="pagination-wrapper">
        <a class="pagination active">1</a>
        <a class="pagination">2</a>
        <a class="pagination">3</a>
        <a class="pagination">4</a>
        <span class="pagination">...</span>
        <a class="pagination">23</a>
    </div> --}}
