@if ($paginator->hasPages())
    <div class="styled-pagination">
        <ul class="clearfix">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="prev-post disabled"><span><span class="fa fa-long-arrow-left"></span> Prev</span></li>
            @else
                <li class="prev-post"><a href="{{ $paginator->previousPageUrl() }}"><span class="fa fa-long-arrow-left"></span> Prev</a></li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active"><a href="#">{{ $page }}</a></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="next-post"><a href="{{ $paginator->nextPageUrl() }}">Next <span class="fa fa-long-arrow-right"></span></a></li>
            @else
                <li class="next-post disabled"><span>Next <span class="fa fa-long-arrow-right"></span></span></li>
            @endif
        </ul>
    </div>
@endif
