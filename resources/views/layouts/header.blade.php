<header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero">
         <b> Megaworld Textfile Analyzer System </b>  {{-- <img src="home/img/logo.png"  alt="" title="" /></img> --}}
        </a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Galery</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact Us</a></li>
          <li class="menu-has-children"><a href="">Sign in/ Sign up</a>
            <ul>
                <li> @if (Route::has('login'))
                  <div class="top-right links">
                      @if (Auth::check())
                          <a href="{{ url('/home') }}">Home</a>
                      @else
                          <a href="{{ url('/login') }}">Login</a>
                          <a href="{{ url('/register') }}">Register</a>
                      @endif
                  </div>
              @endif</li>
                {{-- <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
    
                  <li class="menu-has-children"><a href="#">Drop Down 2</a> --}}

                  {{-- </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li> --}}
            </ul>
          </li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
