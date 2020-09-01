<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'FBN') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <!-- GUI STYLES CSS -->
    <link rel="stylesheet" href="{{ asset('css/gui.css') }}">

    <!-- Font-Awsome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

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
                <button class="navbar-toggler ml-auto custom-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
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
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span> </span> <span class="caret"> </span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="{{ url('/user/'.Auth::id()) }}"><span><i
                                            class="fas fa-users-cog"> </i></span> My Profile </a>

                                <a class="dropdown-item" href="{{ url('/user/'.Auth::id().'/posts') }}">My Posts</a>

                                <a class="dropdown-item" href="{{ url('/new-post') }}">Add a new post <span
                                        class="glyphicon glyphicon-cog pull-right"></span> </a>

                                <a class="dropdown-item" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>

                            </div>

                        </li>


                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

    </div>
    <div class="">
        @yield('content')
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

<footer id="sticky-footer" class="page-footer">
    <div class="container-fluid text-center">
        <h3 class="footer-copyright text-center ">
            © 2020 Powered by:<a href="http://www.numericall.fr/">Numericall</a>
        </h3>
    </div>
</footer>


</html>