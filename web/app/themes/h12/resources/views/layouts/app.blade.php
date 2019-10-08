<!doctype html>
<html {!! get_language_attributes() !!} class="no-js">
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div class="wrap" role="document">
      <div class="content">
        <main class="main">
          @include('partials.hero-illu')
          <div class="container">
            @yield('content')
          </div>
        </main>
        
      </div>
    </div>
    @include('partials.instagram')
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
