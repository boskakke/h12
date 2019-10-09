@if( have_rows('partnere', 'options') )
	<section class="section--padding section--gray">
		<div class="container container--padding">
			@if(get_field('partners_header', 'options' ))
				<h2 class="section__header">{{ the_field( 'partners_header', 'options' ) }}</h2>
			@endif
		
			@if(get_field('partners_subheader', 'options'))
				<p class="section__subheader">{{ the_field( 'partners_subheader', 'options') }}</p>
			@endif
	<div class="partners">
	@while( have_rows('partnere', 'options') ) 
		@php
			the_row();

			$logo = get_sub_field('logo');
			$name = get_sub_field('name');
			$description = get_sub_field('description');
			$link = get_sub_field('link');
			$size = 'partner';
		@endphp
		<div class="partners__item">
			@if ($link)
				<a href="{{ $link}}" title="{{ $name ?? '' }}" target="_blank">
			@endif
				 @php
		echo wp_get_attachment_image( $logo, $size, false, array( "class" => "partners__logo", "loading" => "lazy" ));
				 @endphp
			@if ($link)
			</a>
			@endif
		</div>
	@endwhile
	</div>
	</div>
	</section>
@endif
