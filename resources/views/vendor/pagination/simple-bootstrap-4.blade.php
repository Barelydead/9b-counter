@if ($paginator->hasPages())
    <ul class="pager__list" role="navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="pager__item disabled" aria-disabled="true">
                <span class="pager__list">@lang('pagination.previous')</span>
            </li>
        @else
            <li class="pager__item">
                <a class="pager__list" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
            </li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="pager__item">
                <a class="pager__list" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
            </li>
        @else
            <li class="pager__item disabled" aria-disabled="true">
                <span class="pager__list">@lang('pagination.next')</span>
            </li>
        @endif
    </ul>
@endif
