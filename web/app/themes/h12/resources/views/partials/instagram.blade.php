@if(is_front_page() && get_field( 'instagram', 'options' ))
@php
	$instagram = get_field( 'instagram', 'options' )
@endphp
<section class="section--dark">
	<div class="container container--padding">
		<h2 class="instagram__header">
			<svg class="instagram__logo" viewBox="0 0 64 64">
				<use xlink:href="#instagram"></use>
			</svg>
						<a href="{{ the_field( 'instagram_link', 'options' ) }}" class="instagram__link" target="_blank">{{ the_field( 'instagram_header', 'options' )}}</a></h2>
		@php
			echo do_shortcode( '[insta-gallery id="'.get_field('instagram', 'options').'"]' );
		@endphp
	</div>
</section>
@endif