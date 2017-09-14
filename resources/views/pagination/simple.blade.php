@php
$max = 7;
@endphp

@if ($paginator->lastPage() > 1)
<div class="text-center ak-pagination">
  	<nav>
		<ul class="ak-pagination pagination">
			<li class="{{ ($paginator->currentPage() == 1) ? 'disabled' : '' }}">
				<a href="{{ $paginator->url(1) }}" class="ak-ajaxloader" data-target=".ak-main-page"><<</a>
			</li>
			<li class="{{ ($paginator->currentPage() == 1) ? 'disabled' : '' }}">
				<a href="{{ $paginator->previousPageUrl() }}" class="ak-ajaxloader" data-target=".ak-main-page">‹</a>
			</li>
			@for ($i = 1; $i <= $paginator->lastPage(); $i++)
			@php
			$half = floor($max / 2);
			$from = $paginator->currentPage() - $half;
			$to = $paginator->currentPage() + $half;

			if ($paginator->currentPage() < $half)
			{
				$to += $half - $paginator->currentPage();
			}
			if ($paginator->lastPage() - $paginator->currentPage() < $half) 
			{
				$from -= $half - ($paginator->lastPage() - $paginator->currentPage()) - 1;
			}
			@endphp
			@if ($from < $i && $i < $to)
			<li class="{{ ($paginator->currentPage() == $i) ? 'active' : '' }}">
				<a href="{{ $paginator->url($i) }}" class="ak-ajaxloader" data-target=".ak-main-page">{{ $i }}</a>
			</li>
			@endif
			@endfor
			<li class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? 'disabled' : '' }}">
				<a href="{{ $paginator->nextPageUrl() }}" class="ak-ajaxloader" data-target=".ak-main-page">›</a>
			</li>
			<li class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? 'disabled' : '' }}">
				<a href="{{ $paginator->url($paginator->lastPage()) }}" class="ak-ajaxloader" data-target=".ak-main-page">>></a>
			</li>
		</ul>
	</nav>
</div>
@endif