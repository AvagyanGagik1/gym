<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/front/front.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    {{--    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">--}}
    {{--        <div class="container">--}}
    {{--            <a class="navbar-brand" href="{{ url('/') }}">--}}
    {{--                {{ config('app.name', 'Laravel') }}--}}
    {{--            </a>--}}
    {{--            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
    {{--                <span class="navbar-toggler-icon"></span>--}}
    {{--            </button>--}}

    {{--            <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
    {{--                <!-- Left Side Of Navbar -->--}}
    {{--                <ul class="navbar-nav mr-auto">--}}

    {{--                </ul>--}}

    {{--                <!-- Right Side Of Navbar -->--}}
    {{--                <ul class="navbar-nav ml-auto">--}}
    {{--                    <!-- Authentication Links -->--}}
    {{--                    @guest--}}
    {{--                        <li class="nav-item">--}}
    {{--                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
    {{--                        </li>--}}
    {{--                        @if (Route::has('register'))--}}
    {{--                            <li class="nav-item">--}}
    {{--                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
    {{--                            </li>--}}
    {{--                        @endif--}}
    {{--                    @else--}}
    {{--                        <li class="nav-item dropdown">--}}
    {{--                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
    {{--                                {{ Auth::user()->name }}--}}
    {{--                            </a>--}}

    {{--                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
    {{--                                <a class="dropdown-item" href="{{ route('logout') }}"--}}
    {{--                                   onclick="event.preventDefault();--}}
    {{--                                                     document.getElementById('logout-form').submit();">--}}
    {{--                                    {{ __('Logout') }}--}}
    {{--                                </a>--}}

    {{--                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
    {{--                                    @csrf--}}
    {{--                                </form>--}}
    {{--                            </div>--}}
    {{--                        </li>--}}
    {{--                    @endguest--}}
    {{--                </ul>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </nav>--}}
        @guest
        <header>
            <nav class="mainNav">
                <a href="#" class="navHome">
                    <img src="images/logo.png" alt="">
                </a>
                <div class="nav">
                    <ul class="navList">
                        <a href="">
                            <li>Программы тренировок</li>
                        </a>
                        <a href="">
                            <li>Тренеры</li>
                        </a>
                        <a href="">
                            <li>Результаты</li>
                        </a>
                        <a href="">
                            <li>Программы подписки</li>
                        </a>
                        <a href="">
                            <li>Блог</li>
                        </a>
                    </ul>
                </div>
                <div class="navClient">
                    <div>
                        <img src="images/lang.png" alt="" class="mr-1">
                        <select name="" id="">
                            <option value="RU">RU</option>
                        </select>
                    </div>
                    <a href="">
                        <img src="images/shop_icon.png" alt="">
                        <span>ЛИЧНЫЙ КАБИНЕТ</span>
                    </a>
                </div>
            </nav>
        </header>
        @else
    <header>
        <nav class="mainNavUser position-fixed">
            <a href="#" class="navHome navHomeBorder">
                <img src="images/logo.png" alt="">
            </a>
            <div class="navSearch">
                <input id="search" type="text" placeholder="Поиск занятий, например йога">
                <label for="search"><img src="images/search.png" alt=""></label>
            </div>
            <div class="navClient">
                <button class="btn btnNorm btnNormal1">Календарь
                    <img src="images/calendar.png" alt="">
                </button>
                <div>
                    <img src="images/lang.png" alt="" class="mr-1">
                    <select name="" id="">
                        <option value="RU">RU</option>
                    </select>
                </div>
                <div class="clientCabinet">
                    <div>
                        <h1>Алёна Кнопочкина</h1>
                        <p>Misterolympia@gmail.com</p>
                    </div>
                    <div>
                        <img src="images/roundUser.png" alt="">
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <section class="sideNav">
        <div class="sideNavTop">
            <a class="active" href="">Мои программы</a>
            <a href="">Питание</a>
            <a href="">Достижения</a>
            <a href="">Личная информация</a>
            <a href="">Моя подписка</a>
            <a href="">Выход</a>
        </div>
        <div class="sideNavBottom">
            <h1>Подписка</h1>
            <p>Осталось дней:<span>323/365</span></p>
            <div></div>
            <button class="btn btnNorm btnNormal1">Продлить</button>
        </div>
    </section>
        @endguest
    <main>
        @yield('content')
    </main>
    @guest
        @include('front.footer')
    @else
        @include('front.user.footer')
    @endguest
</div>
</body>
</html>
