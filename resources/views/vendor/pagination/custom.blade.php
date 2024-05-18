@if ($paginator->hasPages())

@if ($paginator->onFirstPage())
        <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
            <span aria-hidden="true">&lsaquo;</span>
        </li>
    @else
        <li>
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
        </li>
    @endif




<div class="categories__pagination">
    <a href="#">1</a>

    <a href="#">2</a>

    <a href="#">3</a>

    <a href="#">Next</a>
</div>

@endif
