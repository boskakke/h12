<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	 <script>
    document.documentElement.className = document.documentElement.className.replace(/(\s|^)no-js(\s|$)/, '$1js$2');
    </script>
	@php
	$image = get_field('favicon', 'options');	
	$size = 'full'; // (thumbnail, medium, large, full or custom size)
	@endphp
	@if($image)
		<link rel="icon" type="image/png" sizes="32x32" href="{{ $image['url'] }}">
	@endif
	@if (get_field( 'meta_description', 'options' ) )
	<meta name="description" content="{{ the_field('meta_description', 'options') }}" />
	@endif
	<!-- Du burde trille en tur i skoven i stedet for at sidde her og nørde source-kode! 🙃 -->
		
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-149850936-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-149850936-1');
	</script>

  @php wp_head() @endphp
</head>
