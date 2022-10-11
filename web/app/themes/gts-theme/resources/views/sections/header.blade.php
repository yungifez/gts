<header class="banner">
  <div class="w-screen bg-purple-600 p-3 text-white ">
    <a class="brand font-bold text-2xl" href="{{ home_url('/') }}">
      {!! $siteName !!}
    </a>
    @if (has_nav_menu('primary_navigation'))
      <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
      </nav>
    @endif
  </div>
</header>
