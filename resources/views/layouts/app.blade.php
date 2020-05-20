<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script> --}}
    <script src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <!--navigation -->

    <nav class="navbar  navbar-expand-md navbar-light bg-light shadow-sm sticky-top">
        <div class="container-fluid">

            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="/images/heart.png" width="35" height="32"> </a>
            <a class="navbar-brand" href="{{ url('/home') }}">
                {{ 'heart doctor' }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item {{ (request()->is('articles')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('Articles') }}">Articles</a>
                    </li>
                    <li class="nav-item {{ (request()->is('deits')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('Deits') }}">Deits</a>
                    </li>
                    <li class="nav-item {{ (request()->is('consultations/create')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('Contact Us') }}">Contant Us</a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item {{ (request()->is('login')) ? 'active' : '' }}">
                            <a class="nav-link "
                                href="{{ route('login') }}">{{ __('auth.Login') }}</a>
                        </li>
                        @if(Route::has('register'))
                            <li class="nav-item {{ (request()->is('register')) ? 'active' : '' }}">
                                <a class="nav-link"
                                    href="{{ route('register') }}">{{ __('auth.Register') }}</a>
                            </li>
                        @endif
                        @endguest
                        @Auth
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}"
                                    method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endauth
                </ul>
            </div>
        </div>
    </nav>

    <main style="flex: 1;">
        @yield('content')
    </main>

    <!--footer -->
    <footer>
        <div class="container-fluid padding">
            <div class="row text-center">
                <div class="col-md-4">
                    <img src={{ URL::asset("images/heart.png")}}>
                    <hr class="light">
                    <p>041-xxxxxx</p>
                    <p>syrian.doctor123@gmail.com</p>
                    <p>syria - lattakia</p>
                </div>
                <div class="col-md-4">

                    <hr class="light">
                    <h5>Our Hours</h5>
                    <hr class="light">

                    <p>sunday-monday-tuesday : 7am-7pm</p>
                    <p>wednesday-thursday : 10am-5pm</p>
                    <p>friday -saturday : closed</p>
                </div>
                <div class="col-md-4">

                    <hr class="light">
                    <h5>Our Services</h5>
                    <hr class="light">

                    <a style="text-decoration: none;" href="#">
                        <p>Articles</p>
                    </a>
                    <a style="text-decoration: none;" href="#">
                        <p>Deits</p>
                    </a>
                    <a style="text-decoration: none;" href="#">
                        <p>consultaions</p>
                    </a>
                </div>
                <div class="col-12">
                    <hr class="light">
                    <h5>&copy;heart-doctor.com</h5>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
