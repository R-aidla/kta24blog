@if ($paginator->hasPages())
    <nav>
        <ul class="pagination join">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="btn btn-soft btn-disabled join-item" aria-disabled="true"><span>@lang('pagination.previous')</span></li>
            @else
                <li><a class="btn hover:btn-accent hover:text-white join-item"  href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a></li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li><a class="btn btn-soft hover:btn-accent hover:text-white join-item" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a></li>
            @else
                <li class="btn btn-soft btn-disabled join-item" aria-disabled="true"><span>@lang('pagination.next')</span></li>
            @endif
        </ul>
    </nav>
@endif
