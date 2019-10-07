<header class="header">
  <div class="container">
    @if(is_home())
    <a class="header__logo" href="{{ home_url('/') }}" title="{{ get_bloginfo('name', 'display') }}">
    	<img src="@asset('images/h12.svg')" alt="{{ get_bloginfo('name', 'display') }}">
    </a>
    @endif
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
