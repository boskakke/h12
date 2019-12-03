@extends('layouts.app')

@section('content')

  @while(have_posts()) @php the_post() @endphp
    <div class="entry__content">
    	@php
    		$design = get_field( 'hero_style' );
    	@endphp
    	@if (is_front_page() || $design == 'hero--standard' )
				@include('partials.page-header', ['class' => 'default'])
			@endif

    	@include('partials.content-page')
	</div>
	@include('partials.teasers')
  @endwhile
@endsection
