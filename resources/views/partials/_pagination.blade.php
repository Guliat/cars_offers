@if ($paginator->hasPages())
    <nav class="pagination is-centered" role="navigation" aria-label="pagination">
        @if (!$paginator->onFirstPage())
            <a class="pagination-previous" href="{{ $paginator->previousPageUrl() }}" >
                <span class="icon"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
            </a>
        @endif

        @if ($paginator->hasMorePages())
            <a class="pagination-next" href="{{ $paginator->nextPageUrl() }}" >
                <span class="icon"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
            </a>
        @endif


        <ul class="pagination-list">
            @foreach ($elements as $element)


                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li><a class="pagination-link is-current is-size-6" aria-label="Goto page {{ $page }}">{{ $page }}</a></li>
                        @else
                            <li><a class="pagination-link" href="{{ $url }}" aria-label="Goto page {{ $page }}" @click="openLoading">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif


            @endforeach
        </ul>
    </nav>
@endif
