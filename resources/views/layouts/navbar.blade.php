<section class-=content>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CoCo') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!-- <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet"> -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/coco.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
    <!-- Navbar -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light"style="background-color: #FD7EC2;">
        <a class="navbar-brand"><img src="/img/logo.png" alt="logo" width="150px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <ul class="navbar-nav ml-auto" style="margin-right: 20px;">
                @if (Auth::user())
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}" style="color: #FFF2F9; font-weight :600">Beranda</span></a>
                </li>
                @else
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('beranda') }}" style="color: #FFF2F9; font-weight :600">Beranda</span></a>
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('tentang') }}" style="color: #FFF2F9; font-weight :600">Tentang</a>
                </li>
                <a class="nav-link" aria-current="page" href="#" style="color: white;">|</a>
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" style="color: #FFF2F9; font-weight :600; margin-left:20px" href="{{ route('login') }}">{{ __('Masuk') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link btn btn-light" style="background-color:#FFF2F9; color:#FD7EC2; font-weight :600;margin-left:20px" href="{{ route('register') }}">{{ __('Daftar') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color: #FFF2F9; font-weight :600" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" style="color: #FD7EC2; font-weight :600" href="{{ route('logout') }}">
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
    </nav>
        <main>
            @yield('main-content')
        </main>
    </div>
</body>
</html>
</section>