<header class="bg-white sticky inset-0 lg:flex lg:justify-between lg:items-center z-20" >
  <div class=" text-pink-700 p-3 flex justify-between items-center">
    <div class="flex gap-3 items-center">
      <img src="{{asset('images/logo.webp')}}" alt="Logo" class="h-10">
      <a class=" font-bold text-xl lg:text-2xl " href="{{ home_url('/') }}">
        {!! $siteName !!}
      </a> 
  </div>
  @if (has_nav_menu('primary_navigation'))
    <p class="text-2xl font-bold lg:hidden menu-sign cursor-pointer" onclick="toggleNav()">&#9776</p>
  @endif
  </div>
  @if (has_nav_menu('primary_navigation'))
      <nav class="hidden nav-primary h-screen bg-gray-800 backdrop-blur-sm bg-opacity-80 absolute w-full lg:static lg:h-full lg:bg-white lg:w-fit lg:block" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}" id="primary-navigation">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'text-white p-3 text-3xl lg:text-pink-700 lg:flex lg:h-full font-bold lg:text-xl lg:py-0 lg:px-3 lg:items-center', 'echo' => true]) !!}
      </nav>
    @endif
    <style>
      .nav-primary li{
        padding: 1rem;
      }
     

      @media (min-width: 1024px) {
        .nav-primary li{
          padding:0.5rem 1rem 0.5rem 1rem;
          text-transform: capitalize;
        }
        .nav-primary li:hover{
          --tw-text-opacity: 1;
          background-color: rgb(190 24 93 / var(--tw-text-opacity));
          color: rgb(255 255 255 / var(--tw-text-opacity));
        }
      }
      @media (max-width: 1024px) {
        .nav-primary {
          animation-timing-function: ease;
          animation-duration: 0.30s;
        }
        .nav-primary li:hover{
            --tw-text-opacity: 1;
            color: rgb(234 179 8 / var(--tw-text-opacity));
          }
        }
      @keyframes mobile-menu-slide-in {
        from {
          height: 0vh
        } to {
          height: 100vh;
        }
      }

    @keyframes mobile-menu-slide-out {
        from {
          height: 100vh;
          overflow: hidden;
        } to {
          height: 0vh;
          overflow: hidden;
        }
      }
    </style>
    <script> 
      let isToggled = false;
      let nav = document.querySelector('#primary-navigation');
      let menuSign = document.querySelector('.menu-sign');
      
      let toggleNav = function() {
        if (isToggled == false) { 
          nav.style.display = "block";
          nav.style.animationName = "mobile-menu-slide-in";
          menuSign.innerHTML = "&#10006"
          isToggled = true;
        }else{
          nav.style.animationName = "mobile-menu-slide-out";
          setTimeout(() => {
            nav.style.display = "none";
          }, 200);
          menuSign.innerHTML = "&#9776"
          isToggled = false;
        }
      }
      window.addEventListener("resize", function() {
      if (window.matchMedia("(min-width: 1024px)").matches) {
        isToggled = false;
        toggleNav();
      }})
    </script>
</header>
