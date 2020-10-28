<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link rel="stylesheet" href="{{ asset('css/link.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto&display=swap" rel="stylesheet">
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        {{-- header --}}
        <nav class="navbar navbar-expand-md navbar-light navbar-link">
            <div class="container">
                <link rel="stylesheet" href="{{ asset('css/link.css') }}">
                <img src="{{ asset('img/logo.png') }}" alt=""><a class="navbar-brand"
                    href="{{ route('main') }}">BookOfBooks</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest



                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('main') }}">Главная <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('allWorks') }}">Все работы</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('add') }}">Добавить работу</a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('allAutors') }}">Все авторы</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('search') }}">Поиск</a>
                            </li>


                        </div>
                        <ul class="navbar-nav ml-auto ">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Вход') }}</a>
                            </li>
                            @if (Route::has('reg'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('reg') }}">{{ __('Регистрация') }}</a>
                            </li>
                        </ul>
                        @endif
                        @else
                        {{-- header-auth --}}
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('main') }}">Главная <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('allWorks') }}">Все работы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('add') }}">Добавить работу</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('allAutors') }}">Все авторы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('search') }}">Поиск</a>
                        </li>
                        {{-- dropdown-logout --}}
                        <li class="nav-item dropdown">
                            <a href="{{ route('new_home', ['name'=>Auth::user()->name]) }}"> {{ Auth::user()->name }}
                                {{ Auth::user()->surname }}
                                 <img src="{{ asset('img/user 1.png') }}" alt="">
                                </a>
                        
                        </li>


                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

     
    </div>
</body>

</html>
