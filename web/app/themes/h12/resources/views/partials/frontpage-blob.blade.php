
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
				<p class="blob__after">{{ the_field( 'blob_after' )}}</strong></p>
			@endif
			
			
				@if (get_field( 'signup_open' ))
					
					<a href="{{ the_field( 'signup_link' ) }}" class="btn btn--primary btn--arrow" target="_blank">
						{{ the_field( 'signup_cta_open' ) }} <svg class="btn__arrow" viewBox="0 0 23.5 15">
							<use xlink:href="#arrow"></use>
							</svg>
					</a>
				
				@else 

					<button class="btn btn--primary" disabled>
						{{ the_field( 'signup_cta_closed' ) }}
					</button>
					@if(get_field( 'signup_small' ))
						<small class="blob__small">{{ the_field( 'signup_small' ) }}</small>
					@endif

				@endif
			
			
			@if (get_field('sponsor_logo', 'options'))
			<div class="blob__center">
				<figure class="blob__sponsor">
					<img src="{{the_field('sponsor_logo', 'options')}}" alt="">
				</figure>
			</div>
			@endif
			
		</div>
		<div class="blob__svg"></div>
	</div>

@endif
