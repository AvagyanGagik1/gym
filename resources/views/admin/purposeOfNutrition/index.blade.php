@extends('layouts.admin.index')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Категория для (питания)</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Вы можете создать новий фильтр для питания. Кликните на кнопку
                        чтобы добавить новий элемент.</h6>
                    <p class="card-text"></p>
                    <a href="{{route('purposeOfNutrition.create')}}" class="btn btn-success">Добавить</a>
                    <div class="ml-auto">
                        {{ $purposeOfNutrition->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">список (ограничение Питаные)</h5>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Имя (ru)</th>
                            <th scope="col">Имя (en)</th>
                            <th scope="col">Имя (blr)</th>
                            <th scope="col">редактировать</th>
                            <th scope="col">удалить</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($purposeOfNutrition as $key=>$item)
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td>{{$item->name_ru}}</td>
                                <td>{{$item->name_en}}</td>
                                <td>{{$item->name_blr}}</td>
                                {{--                                <td><img src="{{$item->image}}" alt="" class="img-thumbnail table-image"></td>--}}
                                <td>
                                    <a href="{{route('purposeOfNutrition.edit',$item->id)}}"><i class="fas fa-edit custom-icon-edit"></i></a>
                                    {{--                                    <a href=""><i class="far fa-eye custom-icon-preview"></i></a>--}}
                                </td>
                                <td>
                                    <i class="fas fa-trash custom-icon-remove" data-id="{{$item->id}}" data-name="{{$item->name_ru}}" data-type="purposeOfNutrition"></i>
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
