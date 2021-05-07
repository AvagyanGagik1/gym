@extends('layouts.front.index')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 d-flex justify-content-end">
                @include('auth.aside',['data'=>4])
            </div>
            <div class="col-8 login-page">
                <h1>Создайте свой аккаунт</h1>
                <div class="submit-group">
                    <a class="next">Продолжить</a>
                    <a class="prev" href="{{route('register.thirdStep')}}">Отмена</a>
                </div>
            </div>
        </div>
    </div>
@endsection
