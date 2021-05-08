@extends('layouts.front.index')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 d-flex justify-content-end">
                @include('auth.aside',['data'=>3])
            </div>
            <div class="col-8 third-step">
                <h1>Личные данные</h1>
                <div class="personal-data">
                    <div class="item age">
                        <div class="header">
                            <h3>Возраст</h3>
                        </div>
                        <div class="value">
                            <h3>
                                24
                            </h3>
                            <div class="underline"></div>

                        </div>
                        <div class="plus-minus-group">
                            <span>
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 8H16V10H2V8Z" fill="#111111"/>
                                </svg>
                            </span>
                            <span>
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
                            <h3>
                                82
                            </h3>
                            <div class="underline"></div>

                        </div>
                        <div class="plus-minus-group">
                            <span>
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 8H16V10H2V8Z" fill="#111111"/>
                                </svg>
                            </span>
                            <span>
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
                            <h3>
                                178
                            </h3>
                            <div class="underline"></div>
                        </div>
                        <div class="plus-minus-group">
                            <span>
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 8H16V10H2V8Z" fill="#111111"/>
                                </svg>
                            </span>
                            <span>
                                <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                 <path d="M16 9H10V3H8V9H2V11H8V17H10V11H16V9Z" fill="#111111"/>
                                </svg>

                            </span>
                        </div>
                    </div>
                </div>

                <div class="submit-group">
                    <a class="next" href="{{route('register.fourStep')}}">Продолжить</a>
                    <a class="prev" href="{{route('register.secondStep')}}">Отмена</a>
                </div>
            </div>
        </div>
    </div>
@endsection
