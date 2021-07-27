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
    <script src="{{ asset('js/package/owl.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/front/front.css') }}" rel="stylesheet">
    <link href="{{ asset('css/front/media.css') }}" rel="stylesheet">
    <link href="{{ asset('css/package/owl.css') }}" rel="stylesheet">
</head>
<body>
<div class="overlay">
    <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="17" cy="17" r="17" fill="white"/>
        <path
            d="M24.0005 11.0844L22.9183 10L17.0015 15.9169L11.0851 10L10.002 11.0839L15.9183 17L10.002 22.9161L11.0851 24L17.0015 18.0826L22.9183 24L24.0005 22.9156L18.0848 17L24.0005 11.0844Z"
            fill="#010002"/>
    </svg>
</div>
<div id="app">
        <header>
            <nav class="mainNav">
{{--                <button id="mainButton" class=" btn d-none">--}}
{{--                    <svg width="32" height="17" viewBox="0 0 32 17" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                        <rect y="7" width="23.3333" height="3" fill="#111111"></rect>--}}
{{--                        <rect width="32" height="3" fill="#111111"></rect>--}}
{{--                        <rect y="14" width="32" height="3" fill="#111111"></rect>--}}
{{--                    </svg>--}}
{{--                </button>--}}
                <a href="/" class="navHome">
                    <img src="/images/logo.png" alt="">
                </a>
                <div class="nav d-lg-flex d-none">
                    <ul class="navList">
                        <a class="active" href="#program">
                            <li>{{__("language.training")}}</li>
                        </a>
                        <a href="#expert">
                            <li>{{__("language.trainer")}}</li>
                        </a>
                        <a href="#about">
                            <li>{{__("language.results")}}</li>
                        </a>
                        <a href="#subscribe">
                            <li>{{__("language.subscriptionPrograms")}}</li>
                        </a>
                        <a href="#news">
                            <li>{{__("language.blog")}}</li>
                        </a>
                        <div class="dropdown d-none">
                            <button id="mainButtonResponsive" class=" btn d-none" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg width="32" height="17" viewBox="0 0 32 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect y="7" width="23.3333" height="3" fill="#111111"></rect>
                                    <rect width="32" height="3" fill="#111111"></rect>
                                    <rect y="14" width="32" height="3" fill="#111111"></rect>
                                </svg>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="mainButtonResponsive">
                                <a class="dropdown-item d-none" href="#about">{{__("language.results")}}</a>
                                <a class="dropdown-item d-none" href="#subscribe">{{__("language.subscriptionPrograms")}}</a>
                                <a class="dropdown-item d-none" href="#news">{{__("language.blog")}}</a>
                            </div>
                        </div>
                    </ul>
                </div>
                <div class="navClient">
                    <div class="language">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path
                                    d="M16.3357 3.80486C16.3354 3.79906 16.3348 3.79326 16.3338 3.78749C16.3113 3.75535 16.2836 3.7277 16.2605 3.6962C16.0924 3.46726 15.9145 3.24692 15.7267 3.03513C15.6753 2.97726 15.6238 2.92003 15.5711 2.86343C15.3778 2.65639 15.175 2.45896 14.9628 2.27121C14.9236 2.23647 14.8869 2.20049 14.8477 2.16639C14.3247 1.71836 13.7521 1.3317 13.1411 1.01408C13.1166 1.00123 13.0909 0.990301 13.0658 0.977415C12.7937 0.839136 12.5147 0.714835 12.2299 0.605079C12.1655 0.581944 12.107 0.560053 12.046 0.540762C11.7926 0.449468 11.5354 0.369515 11.2743 0.300903C11.1971 0.280331 11.12 0.259118 11.0415 0.241108C10.7843 0.181312 10.5271 0.135646 10.2641 0.098345C10.1844 0.0867778 10.1059 0.0713297 10.0255 0.0616841C9.34809 -0.0206427 8.66321 -0.0206427 7.98576 0.0616841C7.90539 0.0713297 7.82694 0.0867778 7.74718 0.098345C7.48419 0.135646 7.22439 0.181312 6.96973 0.241108C6.89128 0.259118 6.81412 0.280331 6.73695 0.300903C6.47415 0.369477 6.21696 0.44943 5.9653 0.540762C5.90099 0.562616 5.84247 0.584507 5.7814 0.605079C5.49659 0.714835 5.21754 0.839098 4.94543 0.977415C4.92034 0.990263 4.89464 1.00119 4.87019 1.01408C4.25712 1.33136 3.68257 1.71798 3.15775 2.16639C3.11853 2.20045 3.08187 2.23647 3.04264 2.27121C2.82829 2.45983 2.62551 2.65726 2.43433 2.86343C2.38162 2.92003 2.33015 2.97726 2.27872 3.03513C2.09052 3.24647 1.9126 3.46681 1.74501 3.69616C1.72187 3.72766 1.69422 3.75531 1.67169 3.78745C1.66875 3.79307 1.66615 3.79887 1.66396 3.80482C-0.554003 6.91316 -0.554003 11.0868 1.66396 14.1951C1.66615 14.201 1.66871 14.2068 1.67169 14.2124C1.69418 14.2446 1.72184 14.2722 1.74501 14.3037C1.91264 14.5327 2.09052 14.753 2.27872 14.9648C2.33015 15.0227 2.38162 15.0799 2.43433 15.1365C2.62811 15.3435 2.83085 15.541 3.04264 15.7287C3.08187 15.7635 3.11853 15.7994 3.15775 15.8335C3.68072 16.2816 4.25336 16.6682 4.86438 16.9859C4.88884 16.9987 4.91453 17.0096 4.93963 17.0225C5.21174 17.1608 5.49075 17.2851 5.77559 17.3949C5.83991 17.418 5.89842 17.4399 5.9595 17.4592C6.21285 17.5505 6.47008 17.6304 6.73115 17.699C6.80831 17.7196 6.88548 17.7408 6.96393 17.7588C7.22116 17.8186 7.47835 17.8643 7.74138 17.9016C7.82111 17.9132 7.89955 17.9286 7.97996 17.9382C8.65737 18.0206 9.34225 18.0206 10.0197 17.9382C10.1001 17.9286 10.1785 17.9132 10.2583 17.9016C10.5213 17.8643 10.7811 17.8186 11.0357 17.7588C11.1142 17.7408 11.1913 17.7196 11.2685 17.699C11.5317 17.6305 11.789 17.5505 12.0402 17.4592C12.1045 17.4373 12.163 17.4154 12.2241 17.3949C12.5089 17.2851 12.7879 17.1608 13.06 17.0225C13.0851 17.0097 13.1108 16.9987 13.1353 16.9859C13.7463 16.6682 14.3189 16.2816 14.8419 15.8335C14.8811 15.7994 14.9178 15.7635 14.957 15.7287C15.1714 15.5405 15.3741 15.3431 15.5653 15.1365C15.618 15.0799 15.6695 15.0227 15.7209 14.9648C15.9091 14.753 16.0871 14.5327 16.2547 14.3037C16.2778 14.2722 16.3054 14.2446 16.328 14.2124C16.3309 14.2068 16.3335 14.201 16.3357 14.1951C18.5537 11.0868 18.5537 6.9132 16.3357 3.80486ZM15.602 5.02153C16.217 6.03436 16.5883 7.17615 16.6868 8.35699H12.835C12.7878 7.59077 12.6672 6.83087 12.4749 6.08771C13.5629 5.88394 14.6161 5.52487 15.602 5.02153ZM10.639 1.46098C10.675 1.46934 10.7097 1.48091 10.7457 1.48927C10.9759 1.5433 11.2042 1.60502 11.4274 1.68219C11.4615 1.69375 11.4949 1.70728 11.5283 1.71949C11.7495 1.79665 11.9675 1.88218 12.181 1.97672C12.2183 1.99409 12.255 2.01338 12.2923 2.03075C12.4968 2.12807 12.6965 2.2333 12.8916 2.34649L13.0202 2.42429C13.2054 2.53748 13.3855 2.65858 13.5604 2.78763C13.6054 2.82041 13.6504 2.85194 13.6948 2.88792C13.8662 3.01652 14.0304 3.15435 14.1873 3.30141C14.2285 3.33871 14.2709 3.37537 14.3114 3.41395C14.4761 3.5702 14.6329 3.73546 14.7847 3.90652C14.804 3.92901 14.8246 3.94958 14.8439 3.97083C13.9732 4.38578 13.0508 4.68208 12.1013 4.85179C11.6615 3.64262 11.0804 2.48959 10.3703 1.41667C10.4596 1.43272 10.5509 1.44172 10.639 1.46098ZM6.45406 8.35695C6.50478 7.66119 6.62324 6.97201 6.80775 6.29923C7.53633 6.38578 8.2694 6.4287 9.00311 6.42783C9.73749 6.4276 10.4712 6.38359 11.2004 6.29599C11.3846 6.96987 11.5024 7.66013 11.5521 8.35695H6.45406ZM11.5521 9.64306C11.5014 10.3388 11.3829 11.028 11.1984 11.7008C10.4698 11.6142 9.73678 11.5713 9.00307 11.5722C8.26872 11.5714 7.53501 11.6143 6.80579 11.7008C6.62181 11.028 6.50403 10.3388 6.45403 9.64306H11.5521ZM9.00307 1.7028C9.73485 2.73996 10.3367 3.86296 10.7952 5.04662C10.2 5.10985 9.60174 5.14161 9.00307 5.1418C8.40508 5.14108 7.8075 5.10913 7.21283 5.04598C7.6719 3.86311 8.27305 2.74049 9.00307 1.7028ZM3.22214 3.90584C3.37327 3.73478 3.5308 3.56952 3.69542 3.41327C3.73592 3.37469 3.77839 3.33803 3.81953 3.30073C3.97816 3.15627 4.14236 3.01844 4.3121 2.88725C4.35648 2.85315 4.40147 2.82293 4.4465 2.78695C4.6214 2.65835 4.80146 2.53722 4.98665 2.42362L5.11525 2.34581C5.31031 2.2318 5.51008 2.12652 5.71456 2.03007C5.75186 2.0127 5.78852 1.99341 5.82582 1.97604C6.0393 1.87958 6.25731 1.79405 6.47852 1.71881C6.51194 1.7066 6.54283 1.69307 6.57946 1.68151C6.80259 1.6069 7.0296 1.54519 7.26109 1.48859C7.29711 1.48023 7.33182 1.46866 7.36848 1.46094C7.45657 1.44165 7.5479 1.43264 7.63727 1.41655C6.92681 2.48967 6.34559 3.64292 5.90555 4.85231C4.95609 4.68261 4.03366 4.38631 3.16299 3.97136C3.18228 3.9489 3.20285 3.92833 3.22214 3.90584ZM2.40419 5.02153C3.38989 5.52483 4.4428 5.88391 5.53065 6.08771C5.33853 6.83091 5.21814 7.5908 5.1712 8.35699H1.31939C1.41789 7.17615 1.78924 6.03436 2.40419 5.02153ZM2.40419 12.9785C1.7892 11.9657 1.41785 10.8239 1.31939 9.64306H5.1712C5.21837 10.4093 5.33894 11.1692 5.53129 11.9123C4.44326 12.1161 3.39011 12.4751 2.40419 12.9785ZM7.3672 16.539C7.33118 16.5307 7.29647 16.5191 7.26045 16.5107C7.03024 16.4567 6.80195 16.395 6.57882 16.3178C6.54472 16.3063 6.5113 16.2927 6.47784 16.2805C6.25663 16.2034 6.03866 16.1178 5.82514 16.0233C5.78784 16.0059 5.75118 15.9866 5.71388 15.9693C5.5094 15.8719 5.30963 15.7667 5.11457 15.6535L4.98597 15.5757C4.80078 15.4625 4.62072 15.3414 4.44582 15.2124C4.40079 15.1796 4.3558 15.1481 4.31142 15.1121C4.13995 14.9835 3.97574 14.8457 3.81885 14.6986C3.77771 14.6613 3.73524 14.6246 3.69474 14.5861C3.53012 14.4298 3.37323 14.2646 3.22146 14.0935C3.20217 14.071 3.1816 14.0504 3.16231 14.0292C4.03301 13.6142 4.95541 13.3179 5.90487 13.1482C6.34472 14.3574 6.92576 15.5104 7.63592 16.5833C7.54658 16.5673 7.45529 16.5583 7.3672 16.539ZM9.00307 16.2973C8.27128 15.2601 7.66941 14.1371 7.21091 12.9534C8.4018 12.8252 9.60302 12.8252 10.7939 12.9534L10.7933 12.9541C10.3343 14.1369 9.73312 15.2595 9.00307 16.2973ZM14.784 14.0942C14.6329 14.2652 14.4754 14.4305 14.3108 14.5867C14.2703 14.6253 14.2278 14.662 14.1866 14.6993C14.028 14.8442 13.8638 14.982 13.6941 15.1128C13.6497 15.1468 13.6047 15.1803 13.5597 15.2131C13.3848 15.3417 13.2047 15.4628 13.0195 15.5764L12.8909 15.6542C12.6963 15.7678 12.4965 15.873 12.2916 15.9699C12.2543 15.9873 12.2177 16.0066 12.1804 16.024C11.9669 16.1204 11.7489 16.206 11.5277 16.2812C11.4942 16.2934 11.4633 16.3069 11.4267 16.3185C11.2036 16.3931 10.9766 16.4548 10.7451 16.5114C10.7091 16.5198 10.6744 16.5313 10.6377 16.5391C10.5496 16.5584 10.4583 16.5674 10.3689 16.5835C11.0791 15.5105 11.6601 14.3575 12.1 13.1483C13.0494 13.318 13.9718 13.6143 14.8425 14.0293C14.8239 14.0511 14.8033 14.0717 14.784 14.0942ZM15.602 12.9785C14.6163 12.4752 13.5634 12.1161 12.4755 11.9123C12.6676 11.1691 12.788 10.4092 12.835 9.64306H16.6868C16.5883 10.8239 16.2169 11.9657 15.602 12.9785Z"
                                    fill="#111111"/>
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="18" height="18" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                        <div class="dropdown">
                            <button class="btn languageButton" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{App::getLocale()}}
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.862 6.19533L7.99998 9.05733L5.13798 6.19533L4.19531 7.13799L7.99998 10.9427L11.8046 7.13799L10.862 6.19533Z" fill="#111111"/>
                                </svg>

                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
{{--                                <a class="dropdown-item" href="{{route('change.locale','ru')}}">RU</a>--}}
{{--                                <a class="dropdown-item" href="{{route('change.locale','blr')}}">BLR</a>--}}
{{--                                <a class="dropdown-item" href="{{route('change.locale','en')}}">ENG</a>--}}
                                @foreach (config('languages') as $lang => $language)
                                    @if ($lang != App::getLocale())
                                            <a  class="dropdown-item" href="{{ route('lang.switch', $lang) }}">{{$language}}</a>

                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <a href="{{route('login')}}">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M5.3182 3.51818C5.3182 1.47273 6.95457 0 9.00002 0C11.0455 0 12.6818 1.55455 12.6818 3.51818C12.6818 5.48182 11.4546 8.18182 9.00002 8.18182C6.54548 8.18182 5.3182 5.56364 5.3182 3.51818ZM11.0455 3.51818C11.0455 2.29091 9.98184 1.63636 9.00002 1.63636C8.0182 1.63636 6.95457 2.29091 6.95457 3.51818C6.95457 4.74545 7.69093 6.54545 9.00002 6.54545C10.3091 6.54545 11.0455 4.74545 11.0455 3.51818ZM9.00002 10.2273C10.7182 10.2273 11.5364 9.40909 11.5364 9.40909C14.5637 9.40909 16.7727 11.6182 16.7727 16.9364C16.7727 16.9364 13.9909 18 9.00002 18C4.00911 18 1.22729 16.9364 1.22729 16.9364C1.22729 11.6182 3.43639 9.40909 6.46366 9.40909C6.46366 9.40909 7.28184 10.2273 9.00002 10.2273ZM15.0546 15.7091C14.8091 12.8455 13.8273 11.2909 11.9455 11.0455C11.3727 11.4545 10.3909 11.8636 9.00002 11.8636C7.69093 11.8636 6.6273 11.3727 6.05457 11.0455C4.17275 11.2909 3.19093 12.8455 2.94548 15.7091C4.09093 16.0364 6.13639 16.3636 9.00002 16.3636C11.7818 16.3636 13.9091 15.9545 15.0546 15.7091Z"
                                  fill="#111111"/>
                        </svg>
                        <span>{{__("language.personalArea")}}</span>
                    </a>
                </div>
            </nav>
        </header>
    <main>
        @yield('content')
    </main>
        @include('front.footer')
</div>
<script src="{{ asset('js/front/front.js') }}" defer></script>

</body>
</html>
