@extends('layouts.front.index')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 d-flex justify-content-end">
                @include('auth.aside',['data'=>2])
            </div>
            <div class="col-8 second-step">
                <h1>Ваша цель</h1>
                <form action="" class="d-flex flex-column">
                    <div class="d-flex">

                    </div>
                    <div class="social-form">
                        <h1>Выберите самую важную для себя цель</h1>
                        <div class="social-btn-grp">

                        </div>
                    </div>
                    <div class="submit-group">
                        <a href="{{route('register.thirdStep')}}" class="next">Продолжить</a>
                        <a href="{{route('register')}}" class="prev">Отмена</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
