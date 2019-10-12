@php
  $design = get_field( 'hero_style' );
  $class = '';
  if($design == 'hero--waves') {
    $class = ' toggle-nav--light';
  }
@endphp
<header class="header">
  <div class="container">
    
    <div class="site-header">
      @if( !is_front_page()  )
      <div class="site-header__logo">
        <a class="header__logo" href="{{ home_url('/') }}" title="{{ get_bloginfo('name', 'display') }}">
            <img src="@asset('images/h12.svg')" alt="{{ get_bloginfo('name', 'display') }}">
        </a>
      </div>
      @endif

      <div class="toggle-nav js-toggle-nav {{ $class }}">
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
      </div>
      
      <nav class="menu-overlay">
        <a class="header__logo" href="{{ home_url('/') }}" title="{{ get_bloginfo('name', 'display') }}">
        <img src="@asset('images/h12.svg')" alt="{{ get_bloginfo('name', 'display') }}" class="menu-overlay__logo">
        </a>
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'main-menu' . $class ]) !!}
        @endif
      </nav>

    </div>
    
    
  </div>
  <a href="#" class="menu-backdrop js-toggle-nav" aria-label="Vis menuen"></a>
</header>
