@include('layout.head')
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div id="logo">
        <h1><a href="{{url('/')}}">ادارة<span>مهام</span></a></h1>
    
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{url('/')}}">الرئسية</a></li>
          <li><a class="nav-link scrollto" href="{{url('tasks')}}">قائمة المهام</a></li>
          <li><a class="nav-link scrollto" href="{{ url('catogry') }}">التصنيفات</a></li>
      
        
          @if(Route::has('login'))
          @auth
          <li class="dropdown"><a href="#"><span>{{Auth::user()->name}}</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li>

              <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                 تسجيل خروج
                </x-dropdown-link>
            </form>
              </li>
            </ul>
          </li>
          @else
          <li class="dropdown"><a href="{{route('login')}}"><span>تسجيل دخول</span> <i class="bi bi-chevron-down"></i></a>
          @endauth
          @endif
       
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  @yield('content')
  <body>
  @include('layout.footer')
  </body>