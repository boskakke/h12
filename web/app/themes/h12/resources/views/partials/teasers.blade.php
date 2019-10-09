@php
$posts = get_field('teasers');
@endphp
@if( $posts )
<div class="container--padding container--section">
	<div class="teasers">
		@foreach( $posts as $p )
		<a href="{{ get_permalink( $p->ID ) }}" title="{{ get_the_title($p->ID) }}"></a>
		<div class="teasers__item">
			<article class="teaser-card fadeUp">
				<a href="{{ get_permalink( $p->ID) }}" class="teaser-card__overlaylink"></a>

				@if (get_the_post_thumbnail($p->ID ))
				<figure class="teaser-card__figure">
					{!! get_the_post_thumbnail( $p->ID, 'teaser_lg', array( 'class' => 'teaser-card__image', 'loading' => 'lazy', 'alt' => get_the_title($p->ID)) ) !!}
				</figure>
				@endif
				<div class="teaser-card__body">
					<h3 class="teaser-card__header">
						{{ get_the_title($p->ID) }}
					</h3>
					{{ the_excerpt($p->ID) }}
					<a href="{{ get_permalink($p->ID) }}" class="teaser-card__readmore">
						<span>Læs mere</span> <span><svg class="teaser-card__arrow" viewBox="0 0 23.5 15">
						<use xlink:href="#arrow"></use>
						</svg></span>
					</a>
				</div>
			</article>
		</div>
		@endforeach
	</div>
</div>
@endif
