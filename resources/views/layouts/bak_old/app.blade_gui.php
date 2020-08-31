<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

  <!-- Font-Awsome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <!-- Jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

  <!-- Styles from APP.CSS -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <!-- GUI STYLES CSS -->
  <link rel="stylesheet" href="{{ asset('css/gui.css') }}">
  <title>{{ config('app.name', 'FBN') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

</head>

<body>
  <div id="app">

    <!-- NAVIGATION BAR -->
    <nav class="navbar custom-navbar navbar-expand-md shadow-sm">
      <div class="container-fluid ">
        <a class="navbar-brand custom-navbar-brand " href="{{ url('/') }}">
          {{ config('app.name', 'FBN') }}
        </a>
        <button class="navbar-toggler ml-auto custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="nav justify-content-center ">
            <li class="nav-item ">
              <a class="nav-link custom-nav-item" href="/about">About</a>
            </li>
            <li>
              <a class="nav-link custom-nav-item" href="/recipes">Recipes</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link custom-nav-item " href="/blog">Blog</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link custom-nav-item " href="/faq">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link custom-nav-item" href="/ingredients">Ingredients</a>
            </li>
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
            <li class="nav-item">
              <a class="nav-link custom-nav-item" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item ">
              <a class="nav-link custom-nav-item" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>

    <!-- CONTENT OF EACH PAGE -->
    <main>
      @yield('content')
    </main>
  </div>
</body>


<!-- FOOTER -->
<footer class=" page-footer font-lg blue">
  <div class="footer-copyright text-center align-center">© 2020 Powered by:
    <a href="http://www.numericall.fr/">Numericall</a>
  </div>
</footer>

</html>