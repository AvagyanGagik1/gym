@extends('layouts.admin.index')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Тренировка</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Вы можете создать новий элемент тренировки. Кликните на кнопку
                        чтобы добавить новий элемент.</h6>
                    <p class="card-text"></p>
                    <a href="{{route('workOut.create')}}" class="btn btn-success">Добавить</a>
                    <div class="ml-auto">
                        {{ $workouts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Список тренировкы</h5>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Програма (ru)</th>
                            <th scope="col">Програма (en)</th>
                            <th scope="col">Програма (blr)</th>
                            <th scope="col">Имя (ru)</th>
                            <th scope="col">Имя (en)</th>
                            <th scope="col">Имя (blr)</th>
                            <th scope="col">Калории</th>
                            <th scope="col">Видео</th>
                            <th scope="col">реда.\Посм.\уд.</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($workouts as $key=>$item)
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <th scope="row">{{$item->program->name_ru}}</th>
                                <th scope="row">{{$item->program->name_en}}</th>
                                <th scope="row">{{$item->program->name_blr}}</th>
                                <td>{{$item->name_ru}}</td>
                                <td>{{$item->name_en}}</td>
                                <td>{{$item->name_blr}}</td>
                                <td>{{$item->calories}}</td>
                                <th scope="row">{{$item->videos[0]->link}}</th>
                                <td>
                                    <a href="{{route('workOut.edit',$item->id)}}"><i class="fas fa-edit custom-icon-edit"></i></a>
                                    <a href=""><i class="far fa-eye custom-icon-preview"></i></a>
                                    <i class="fas fa-trash custom-icon-remove" data-id="{{$item->id}}" data-name="{{$item->name_ru}}" data-type="workOut"></i>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('admin.modals.remove')
@endsection
