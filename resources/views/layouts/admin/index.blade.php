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
    <link rel="icon" type="image/png" href="/image/static/favicon/favicon.png" />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>
<body>
<div id="wrapper" class="animate">
    <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
        @if(Auth::check())<span class="navbar-toggler-icon leftmenutrigger"></span>@endif
        <a class="navbar-brand" href="#">Admin Panel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        @if(Auth::check())<div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav animate side-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('admin') ? 'active' : '' }}" href="{{route('dashboard')}}">Dashboard
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('admin/service') ? 'active' : '' }}" href="{{route('service.index')}}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('admin/hardware') ? 'active' : '' }}" href="{{route('hardware.index')}}">Hardware</a>
                </li>
                {{--                <li class="nav-item">--}}
                {{--                    <a class="nav-link {{ Request::is('admin/contact') ? 'active' : '' }}" href="{{route('contact.index')}}">Contact</a>--}}
                {{--                </li>--}}
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('admin/work') ? 'active' : '' }}" href="{{route('work.index')}}">Work</a>
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
