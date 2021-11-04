<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Glass Pool Fences &amp; Glass Railings | Aquaview Fencing</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    {{--Favicon--}}
    <link rel="icon" type="image/png" href="/image/static/favicon/favicon.png"/>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/admin.css') }}" rel="stylesheet">
</head>
<body>
<div id="wrapper" class="animate">
    <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
        @if(Auth::check())<span class="navbar-toggler-icon leftmenutrigger"></span>@endif
        <a class="navbar-brand" href="{{route('dashboard')}}">Панель администратора</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                aria-controls="navbarText"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        @if(Auth::check())
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav animate side-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin') ? 'active' : '' }}" href="{{route('dashboard')}}">Приборная панель
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link {{ Request::is('admin/clientComment') ? 'active' : '' }}"--}}
{{--                           href="{{route('clientComment.index')}}">Коменты клиентов</a>--}}
{{--                    </li>--}}
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin/foodCategory') ? 'active' : '' }}"
                           href="{{route('foodCategory.index')}}">Категория (Питание\Еда)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin/dish') ? 'active' : '' }}"
                           href="{{route('dish.index')}}">Питание</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin/purposeOfNutrition') ? 'active' : '' }}"
                           href="{{route('purposeOfNutrition.index')}}">Филтр(цель питания)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin/dietRestriction') ? 'active' : '' }} "
                           href="{{route('dietRestriction.index')}}">Филтр(Огроничения по питанию)</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin/news') ? 'active' : '' }}"
                           href="{{route('news.index')}}">Новости</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin/trainer') ? 'active' : '' }}"
                           href="{{route('trainer.index')}}">Тренеры</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin/programCategory') ? 'active' : '' }}"
                           href="{{route('programCategory.index')}}">Категория (Програмы)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin/program') ? 'active' : '' }}"
                           href="{{route('program.index')}}">Програмы</a>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link {{ Request::is('admin/workOut') ? 'active' : '' }}"--}}
{{--                           href="{{route('workOut.index')}}">Тренировкы</a>--}}
{{--                    </li>--}}
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin/achievement') ? 'active' : '' }}"
                           href="{{route('achievement.index')}}">Достижения</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin/subscription') ? 'active' : '' }}"
                           href="{{route('subscription.index')}}">Подпискы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin/clientComment') ? 'active' : '' }}"
                           href="{{route('clientComment.index')}}">Коменты (на главной странице)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin/comment') ? 'active' : '' }}"
                           href="{{route('comment.index')}}">Коменты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin/users') ? 'active' : '' }}"
                           href="{{route('users.index')}}">Users</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-md-auto d-md-flex">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>@endif
    </nav>
    @yield('content')
</div>
<script src="{{ asset('js/admin/index.js') }}" defer></script>
</body>
</html>
