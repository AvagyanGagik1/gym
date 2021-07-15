@extends('layouts.admin.index')
@section('content')

    <div class="container">

        <div class="row flex-column">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Слайдер</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Настройки Слайдера</h6>
                        <a href="{{route('slider.index')}}" class="card-link">Слайдер</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Блок кто мы</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Блок кто мы на главной странице</h6>
                        <a href="{{route('admin.hwo.we.are')}}" class="card-link">Кто мы</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Блок первые шаги</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Блок первые шаги на главной странице редактировать</h6>
                        <a href="{{route('admin.first.step')}}" class="card-link">Первые шаги</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Коменты</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Что говорят о нас наши клиенты блок на главной странице</h6>
                        <a href="{{route('admin.client.comment.header')}}" class="card-link">Коменты</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Тренеры</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Блок Тернеры на главной странице редактировать</h6>
                        <a href="{{route('admin.trainer.header')}}" class="card-link">Тренеры заголовок</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Главная новость</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Блок Главная новость на главной странице редактировать</h6>
                        <a href="{{route('admin.main.news')}}" class="card-link">Главная новость</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
