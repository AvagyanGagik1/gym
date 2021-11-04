@extends('layouts.front.index')

@section('content')
    <div class="container-fluid">
        <div class="row auth-wrapper">
            <div class="col-xl-4 col-lg-12 d-flex justify-content-end aside-wrapper">
                @include('auth.aside',[ 'data'=> 2])
            </div>
            <div class="col-xl-8 col-lg-12 second-step">
                <h1>{{__('language.yourAim')}}</h1>
                <form action="" method="post"  class="d-flex flex-column FormNotSubmit">
                    @csrf
                    <div class="d-flex flex-column login-input">
                        <h2>{{__('language.gender')}}</h2>
                        <div class="gender-select">
                            <div class="gender-item">
                                <input type="radio" name="gender" @if(Session::has('user.gender') && Session::get('user.gender')==='male') checked @endif checked value="male">
                                <label>
                                    <svg width="16" height="38" viewBox="0 0 16 38" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14.8679 11.404L11.1091 9.26506C12.3611 8.32424 13.1722 6.83066 13.1722 5.15189C13.1722 2.31105 10.8511 0 7.99785 0C5.14498 0 2.82384 2.31105 2.82384 5.15189C2.82384 6.83102 3.6353 8.32459 4.88762 9.26577L1.12852 11.4075C0.416805 11.814 -0.0155457 12.5735 0.000427807 13.3934L0.0288252 14.6046C0.0405391 15.1044 0.456561 15.4991 0.958486 15.4882C1.46041 15.4765 1.85762 15.062 1.84591 14.5626L1.81751 13.3546C1.81396 13.169 1.92648 13.0379 2.03191 12.9778L6.62377 10.3614C6.6898 10.3236 6.76115 10.3045 6.83711 10.3045H6.83746L9.15895 10.3034C9.24237 10.3034 9.31975 10.3257 9.38897 10.3695C9.40069 10.3769 9.41276 10.384 9.42518 10.3911L13.9659 12.9746C14.1132 13.0584 14.1974 13.2213 14.1803 13.3895C14.1782 13.4125 14.1764 13.4355 14.1761 13.4585L13.8538 27.188C13.8495 27.393 13.7064 27.5329 13.5662 27.581C13.5591 27.5835 13.5517 27.586 13.5446 27.5888L10.9459 28.5522C10.5909 28.684 10.3552 29.0212 10.3545 29.3983L10.3421 35.7614C10.3421 35.995 10.1511 36.1855 9.91503 36.1855L6.07961 36.1905C5.84213 36.1905 5.64868 35.9982 5.64868 35.7614C5.64868 33.9254 5.64655 31.9038 5.64158 29.3987C5.64087 29.0212 5.40517 28.684 5.0502 28.5526L2.41989 27.5771C2.22963 27.5064 2.14337 27.3283 2.1423 27.1827C2.1423 27.1781 2.14195 27.1732 2.14195 27.1686L2.01594 21.7986C2.00422 21.2989 1.58571 20.9037 1.08627 20.915C0.58435 20.9267 0.187141 21.3413 0.198855 21.8407L0.324868 27.205C0.335872 28.1221 0.921924 28.9523 1.78556 29.2729L3.82556 30.0292C3.82947 32.2476 3.83124 34.0823 3.83124 35.7614C3.83124 36.9959 4.84006 38 6.08103 38L9.9161 37.9947C11.1532 37.9947 12.1595 36.9927 12.1595 35.7632L12.1705 30.0292L14.1693 29.2881C15.0496 28.9809 15.6524 28.1528 15.6705 27.2269L15.9924 13.5313C16.0638 12.6671 15.6258 11.8355 14.8679 11.404ZM7.99821 1.80954C9.84901 1.80954 11.3548 3.30877 11.3548 5.15189C11.3548 6.99465 9.84901 8.49389 7.99821 8.49389C6.14705 8.49389 4.64128 6.99465 4.64128 5.15189C4.64128 3.30913 6.14705 1.80954 7.99821 1.80954Z"
                                            fill="#999999"/>
                                        <path
                                            d="M1.022 19.1068C1.52392 19.1068 1.93072 18.7017 1.93072 18.202V18.2013C1.93072 17.7019 1.52392 17.2969 1.022 17.2969C0.520074 17.2969 0.113281 17.7023 0.113281 18.202C0.113281 18.7017 0.520074 19.1068 1.022 19.1068Z"
                                            fill="#111111"/>
                                    </svg>
                                </label>
                                <span>{{__('language.male')}}</span>
                            </div>
                            <div class="gender-item">
                                <input type="radio" name="gender" @if(Session::has('user.gender') && Session::get('user.gender')==='female') checked @endif value="female">
                                <label for="">
                                    <svg width="16" height="32" viewBox="0 0 16 32" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.9467 21.98L15.7318 21.0913C15.633 20.682 15.2214 20.4308 14.8122 20.5297C14.4032 20.6285 14.1518 21.0404 14.2509 21.4493L14.4657 22.3383C14.5107 22.5237 14.4026 22.7112 14.2202 22.7651C14.2089 22.7684 14.1976 22.7719 14.1863 22.7758L10.4877 24.0565C10.1815 24.1627 9.97583 24.4508 9.97524 24.7749L9.96482 30.1146C9.96482 30.3116 9.8047 30.4717 9.60678 30.4717L6.39128 30.4762C6.25319 30.4762 6.16599 30.4036 6.1264 30.3604C6.08593 30.3164 6.01985 30.2217 6.03146 30.0815C6.03325 30.0598 6.03414 30.0381 6.03414 30.0164L6.02402 24.7749C6.02343 24.4508 5.81777 24.1627 5.51152 24.0565L1.76506 22.7591C1.59304 22.6999 1.49184 22.5157 1.5347 22.3383L4.35079 10.6888C4.37609 10.5852 4.4374 10.5218 4.48472 10.4861L6.81093 8.74889C6.8901 8.68966 6.97105 8.67716 7.02611 8.67716H7.02671L8.97315 8.67627C9.07851 8.67627 9.1547 8.71972 9.19964 8.75633C9.20738 8.76258 9.21541 8.76853 9.22315 8.77449L11.5166 10.484C11.5913 10.54 11.641 10.6212 11.6565 10.7132C11.6595 10.7311 11.663 10.7489 11.6675 10.7665L12.8181 15.5248C12.9169 15.9338 13.3282 16.1853 13.7378 16.0865C14.1467 15.9874 14.3982 15.5757 14.2994 15.1668L13.1541 10.4313C13.0678 9.96289 12.811 9.5489 12.4276 9.26259L10.5374 7.85364C11.6273 7.06465 12.3381 5.78309 12.3381 4.33814C12.3381 1.94585 10.3919 0 7.99993 0C5.60795 0 3.6618 1.94585 3.6618 4.33814C3.6618 5.78339 4.37282 7.06495 5.463 7.85394L3.5737 9.26497C3.22311 9.52687 2.97311 9.90515 2.87013 10.3308L0.0543348 21.9794C-0.176322 22.9273 0.346004 23.8821 1.26803 24.1996L4.50169 25.3196L4.51062 29.9908C4.47758 30.5045 4.65675 31.0131 5.00497 31.3917C5.36032 31.7783 5.86569 32 6.39277 32L9.60827 31.9955C10.6452 31.9955 11.4892 31.1518 11.4892 30.1161L11.4985 25.3193L14.6708 24.2208C15.6211 23.9294 16.1812 22.9493 15.9467 21.98ZM7.99963 1.52353C9.55143 1.52353 10.8139 2.78604 10.8139 4.33814C10.8139 5.88994 9.55143 7.15245 7.99963 7.15245C6.44783 7.15245 5.18532 5.88994 5.18532 4.33814C5.18532 2.78604 6.44783 1.52353 7.99963 1.52353Z"
                                            fill="#999999"/>
                                        <path
                                            d="M14.0656 17.5754C13.6612 17.6909 13.4269 18.1129 13.5424 18.5177C13.6382 18.8522 13.9433 19.0703 14.2748 19.0703C14.3439 19.0703 14.4144 19.0608 14.4844 19.0409C14.8891 18.9251 15.1234 18.5034 15.0076 18.0989V18.0983C14.8918 17.6938 14.4701 17.4599 14.0656 17.5754Z"
                                            fill="#999999"/>
                                    </svg>
                                </label>
                                <span>{{__('language.female')}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="target">
                        <h2>{{__('language.important')}}</h2>
                        <div class="target-group">
                            <div class="item">
                                <input type="radio"  @if(Session::has('user.target') && Session::get('user.target')==='flexibility') checked @endif name="target" checked value="flexibility">
                                <label for="">
                                    <img src="/images/yoga.svg" alt="">

                                    <span class="desc">{{__('language.flexibility')}}</span>
                                    <span class="target-ellipse"></span>
                                </label>

                            </div>
                            <div class="item">

                                <input type="radio"  @if(Session::has('user.target') && Session::get('user.target')==='BurnFat') checked @endif name="target"  value="BurnFat">
                                <label for="">
                                    <img src="/images/scales.svg" alt="">
                                    <span class="desc">{{__('language.burn')}}</span>
                                    <span class="target-ellipse"></span>
                                </label>
                            </div>
                            <div class="item">
                                <input type="radio"  @if(Session::has('user.target') && Session::get('user.target')==='muscleSet') checked @endif name="target" value="muscleSet">
                                <label for="">
                                    <img src="/images/dumbbell.svg" alt="">
                                    <span class="desc">{{__('language.muscle')}}</span>
                                    <span class="target-ellipse"></span>
                                </label>
                            </div>
                            <div class="item">
                                <input type="radio"  @if(Session::has('user.target') && Session::get('user.target')==='keepingInShape') checked @endif name="target" value="keepingInShape">
                                <label for="">
                                    <img src="/images/brawn.svg" alt="">
                                    <span class="desc">{{__('language.shape')}}</span>
                                    <span class="target-ellipse"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="submit-group">
                        <button type="submit" class="next">{{__('language.proceed')}}</button>
                        <a href="{{route('register')}}" class="prev">{{__('language.cancel')}}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
