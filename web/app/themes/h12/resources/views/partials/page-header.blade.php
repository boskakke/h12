@php
	if ( is_front_page() ) {
			$tag = 'h2';
	} else {
		$tag = 'h1';
	}
@endphp
<div class="page-header h1">
  <{!! $tag !!} class="h1">{!! App::title() !!}</{!! $tag !!}>
</div>
