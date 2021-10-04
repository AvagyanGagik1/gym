@extends('layouts.admin.index')
@section('content')
    <style>
        body {
            margin-top: 20px;
            color: #1a202c;
            text-align: left;
            background-color: #e2e8f0;
        }

        .main-body {
            padding: 15px;
        }

        .card {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid rgba(0, 0, 0, .125);
            border-radius: .25rem;
        }

        .card-body {
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1rem;
        }

        .gutters-sm {
            margin-right: -8px;
            margin-left: -8px;
        }

        .gutters-sm > .col, .gutters-sm > [class*=col-] {
            padding-right: 8px;
            padding-left: 8px;
        }

        .mb-3, .my-3 {
            margin-bottom: 1rem !important;
        }

        .bg-gray-300 {
            background-color: #e2e8f0;
        }

        .h-100 {
            height: 100% !important;
        }

        .shadow-none {
            box-shadow: none !important;
        }
    </style>
    <div class="container">
        <div class="main-body">

            <!-- Breadcrumb -->
            <div class="col-12 mb-3">
                <a href="{{route('users.index')}}" class="btn btn-danger btn-sm">Назад</a>
            </div>
            <!-- /Breadcrumb -->

            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="{{$user->avatar}}" alt="Admin" class="rounded-circle" width="150">

                                <div class="mt-3">
                                    <hr>
                                    <h5>{{count($user->subscriptions) > 1?'Подписки':'Подписка'}} {{$user->name}}</h5>
                                    @foreach($user->subscriptions as $subscription)
                                        <div>
                                            <img src="{{$subscription->image}}" alt="Admin" class="" width="150">
                                            <p class="text-secondary mb-1">{{$subscription->name_ru}}</p>
                                            <p class="text-secondary mb-1">Цена : {{$subscription->price}}-гр</p>
                                            <p class="text-secondary mb-1">Продолжительность {{$subscription->duration_subscribe}}</p>

                                        </div>
                                    @endforeach
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Полное имя</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{$user->name}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{$user->email}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Цель</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{$user->target}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Пол</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{$user->gender === 'male'?'мужской':'женский'}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">вес</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{$personals[0]->weight}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">рост</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{$personals[0]->height}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">возраст</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{$personals[0]->age}}
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>

                    <div class="row gutters-sm">
                        <div class="col-sm-6 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Изминения </i>в
                                        Весе</h6>
                                    @foreach($personals as $personal)
                                        <small>{{$personal->created_at}}</small>
                                        <div class="" style="height: 20px">
                                            {{$personal->weight}} Килограм
                                        </div>
                                        <hr>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Пройдинние</i>Програмы
                                    </h6>
                                    @foreach($user->completedPrograms as $program)
                                        <small>{{$program->workout->created_at}}</small>
                                        <div class="progress mb-3" style="height: 5px">
                                            {{$program->workout->name}}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
@endsection
