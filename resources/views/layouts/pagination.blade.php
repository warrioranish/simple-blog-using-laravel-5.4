@if ($paginator->hasPages())
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="btn btn-outline-primary disabled" href="#">Previous</a>
        @else
            <a class="btn btn-outline-primary" href="{{ $paginator->previousPageUrl() }}" rel="prev">Previous</a>
        @endif
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <a class="btn btn-outline-primary" href="#">{{ $element }}</a>
            {{-- Array Of Links --}}
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a class="btn btn-outline-primary active my-active" href="#">{{ $page }}</a>
                    @else
                        <a class="btn btn-outline-primary" href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach
        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="btn btn-outline-primary" href="{{ $paginator->nextPageUrl() }}" rel="next">Next</a>
        @else
            <a class="btn btn-outline-primary disabled"><span>Next </span></a>
        @endif
@endif