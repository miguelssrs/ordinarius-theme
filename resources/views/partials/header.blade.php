<header class="nav-primary">
  <nav class="container nav">
    <div class="nav-lang">
      <a href="{{ home_url('/') }}">PT</a>
      <span>|</span>
      <a href="{{ home_url('/') }}">EN</a>
    </div>
    <div class="nav-links">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </div>
  </nav>
</header>

<section class="banner">
  <img src="@asset('images/header-img.png')" alt="Imagem Ordinarius">
  <div class="banner-title">
    <h1>ORDINARIUS</h1>
  </div>
</section>
