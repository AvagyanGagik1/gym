@extends('layouts.front.index')

@section('content')
    <div class="container-fluid">
        <div class="row auth-wrapper">
            <div class="col-xl-4 col-lg-12 justify-content-end aside-wrapper">
                @include('auth.aside',['data'=>3])
            </div>
            <div class="col-xl-8 col-lg-12 third-step">
                <h1>Личные данные</h1>
                <div class="personal-data">
                    <div class="item age">
                        <div class="header">
                            <h3>Возраст</h3>
                        </div>
                        <div class="value">
                            <h3 id="setAge">
                                @if(Session::has('user.age') && Session::get('user.age'))
                                    {{Session::get('user.age')}}
                                @else
                                    24
                                @endif
                            </h3>
                            <div class="underline"></div>
                        </div>
                        <div class="plus-minus-group">
                            <span class="calcButton" data-calc="-" data-type="setAge" data-input="inputAge">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 8H16V10H2V8Z" fill="#111111"/>
                                </svg>
                            </span>
                            <span class="calcButton" data-calc="+" data-type="setAge" data-input="inputAge">
                                <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                 <path d="M16 9H10V3H8V9H2V11H8V17H10V11H16V9Z" fill="#111111"/>
                                </svg>

                            </span>
                        </div>
                    </div>
                    <div class="item weight">
                        <div class="header">
                            <h3>Вес</h3>
                        </div>
                        <div class="value">
                            <h3 id="setWeight">
                                @if(Session::has('user.weight') && Session::get('user.weight'))
                                    {{Session::get('user.weight')}}
                                @else
                                    82
                                @endif
                            </h3>
                            <div class="underline"></div>
                        </div>
                        <div class="plus-minus-group">
                            <span class="calcButton" data-calc="-" data-type="setWeight" data-input="inputWeight">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 8H16V10H2V8Z" fill="#111111"/>
                                </svg>
                            </span>
                            <span class="calcButton" data-calc="+" data-type="setWeight" data-input="inputWeight">
                                <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                 <path d="M16 9H10V3H8V9H2V11H8V17H10V11H16V9Z" fill="#111111"/>
                                </svg>

                            </span>
                        </div>
                    </div>
                    <div class="item height">
                        <div class="header">
                            <h3>Рост</h3>
                        </div>
                        <div class="value">
                            <h3 id="setHeight">
                                @if(Session::has('user.height') && Session::get('user.height'))
                                    {{Session::get('user.height')}}
                                @else
                                    178
                                @endif
                            </h3>
                            <div class="underline"></div>
                        </div>
                        <div class="plus-minus-group">
                            <span class="calcButton" data-calc="-" data-type="setHeight" data-input="inputHeight">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 8H16V10H2V8Z" fill="#111111"/>
                                </svg>
                            </span>
                            <span class="calcButton" data-calc="+" data-type="setHeight" data-input="inputHeight">
                                <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                 <path d="M16 9H10V3H8V9H2V11H8V17H10V11H16V9Z" fill="#111111"/>
                                </svg>

                            </span>
                        </div>
                    </div>
                </div>

                <div class="submit-group">
                    <form id="fourStepForm" action="{{route('register.thirdStep')}}" method="post" class="FormNotSubmit">
                        @csrf
                        <input type="hidden" name="age" id="inputAge"
                               @if(Session::has('user.age') && Session::get('user.age')) value="{{Session::get('user.age')}}" @else value="24"@endif>
                        <input type="hidden" name="height" id="inputHeight"
                               @if(Session::has('user.height') && Session::get('user.height')) value="{{Session::get('user.height')}}" @else value="178"@endif>
                        <input type="hidden" name="weight" id="inputWeight"
                               @if(Session::has('user.weight') && Session::get('user.weight')) value="{{Session::get('user.weight')}}" @else value="82"@endif>
                        <button type="submit" class="next">Продолжить</button>
                        <a class="prev" href="{{route('register.get.secondStep')}}">Отмена</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
