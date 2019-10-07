@php
$posts = get_field('teasers');
@endphp
@if( $posts )
<div class="container--padding">
	<div class="teasers">
		@foreach( $posts as $p )
		<a href="{{ get_permalink( $p->ID ) }}" title="{{ get_the_title($p->ID) }}"></a>
		<div class="teasers__item">
			<article class="teaser-card fadeUp">
				<a href="{{ get_permalink( $p->ID) }}" class="teaser-card__overlaylink"></a>

				@if (get_the_post_thumbnail($p->ID ))
				<figure class="teaser-card__figure">
					{!! get_the_post_thumbnail( $p->ID, 'teaser_lg', array( 'class' => 'teaser-card__image' ) ) !!}
				</figure>
				@endif
				<div class="teaser-card__body">
					<h3 class="teaser-card__header">
						{{ get_the_title($p->ID) }}
					</h3>
					{{ the_excerpt($p->ID) }}
					<a href="{{ get_permalink($p->ID) }}" class="teaser-card__readmore">
						Læs mere
					</a>
				</div>
			</article>
		</div>
		@endforeach
	</div>
</div>
@endif
