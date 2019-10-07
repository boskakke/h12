
@if(is_front_page() )


	<div class="blob">
		<div class="blob__logo">
			<img src="@asset('images/h12.svg')" alt="H12" class="blob__h12">
		</div>
		<div class="blob__body">
			@if(get_field( 'blob_first' ))
				<p class="blob__first">{{ the_field( 'blob_first' )}}</p>
			@endif
			@if(get_field( 'blob_title' ))
				<h1 class="blob__header">{{ the_field( 'blob_title' )}}</h1>
			@endif
			@if(get_field( 'blob_after' ))
				<p class="blob__after">{{ the_field( 'blob_after' )}}</strong>.</p>
			@endif
			@if (get_field( 'signup_open' ))
				<a href="{{ the_field( 'signup_link' ) }}" class="btn btn--primary" target="_blank">
					{{ the_field( 'signup_cta' ) }}
				</a>
			@endif
			@if (get_field('sponsor_logo', 'options'))
				<figure class="blob__sponsor">
					<img src="{{the_field('sponsor_logo', 'options')}}" alt="">
				</figure>
			@endif
		</div>
		<div class="blob__svg"></div>
	</div>

@endif
