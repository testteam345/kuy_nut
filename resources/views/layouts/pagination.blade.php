@if ($paginator->hasPages())
<ul class="pagination">
        {{-- <nav class="pagination"> --}}
        @if ($paginator->onFirstPage())
        <li class="prev"><a href="#">prev</a></li>
        @else
        <li class="prev"><a href="{{ $paginator->previousPageUrl() }}">prev</a></li> 
        {{-- <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="page-numbers"><</a> --}}
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
                            <li class="active"><a>{{ $page }}</a></li>
                        @else
                            {{-- <a href="{{ $url }}" class="page-numbers">{{ $page }}</a> --}}
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach


            @if ($paginator->hasMorePages())
            <li class="next"><a href="{{ $paginator->nextPageUrl() }}">next</a></li>
            {{-- <a class="page-numbers" href="{{ $paginator->nextPageUrl() }}" rel="next">></a> --}}
        @else
        <li class="next"><a href="#">next</a></li>
        {{-- <a class="page-numbers" disabled>></a> --}}
            {{-- <a class="page-numbers" disabled>></a> --}}
        @endif

        </ul>
    {{-- </nav> --}}
@endif

{{-- <ul class="pagination">
        <li class="prev"><a href="#">prev</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li class="active"><a>3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li class="next"><a href="#">next</a></li>
      </ul> --}}

