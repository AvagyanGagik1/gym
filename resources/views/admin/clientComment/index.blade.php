@extends('layouts.admin.index')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Коменты на главной странице</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Вы можете создать Комент на главной странице. Кликните на кнопку
                        чтобы добавить новий элемент.</h6>
                    <p class="card-text"></p>
                    <a href="{{route('clientComment.create')}}" class="btn btn-success">Добавить</a>
                    <div class="ml-auto">
                        {{ $clientComment->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">список (Коменты на главной странице)</h5>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Имя (ru)</th>
                            <th scope="col">Имя (ru)</th>
                            <th scope="col">Имя (en)</th>
                            <th scope="col">Комент (en)</th>
                            <th scope="col">Комент (blr)</th>
                            <th scope="col">Комент (blr)</th>
                            <th scope="col">Картинка</th>
                            <th scope="col">редактировать</th>
                            <th scope="col">удалить</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($clientComment as $key=>$item)
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td>{{$item->user_name_en}}</td>
                                <td>{{$item->user_name_en}}</td>
                                <td>{{$item->user_name_ru}}</td>
                                <td>{{$item->text_ru}}</td>
                                <td>{{$item->text_blr}}</td>
                                <td>{{$item->text_blr}}</td>
                                <td><img src="{{$item->image}}" alt="" class="img-thumbnail table-image"></td>
                                <td>
                                    <a href="{{route('clientComment.edit',$item->id)}}"><i class="fas fa-edit custom-icon-edit"></i></a>
                                    {{--                                    <a href=""><i class="far fa-eye custom-icon-preview"></i></a>--}}
                                </td>
                                <td>
                                    <i class="fas fa-trash custom-icon-remove" data-id="{{$item->id}}" data-name="{{$item->name_ru}}" data-type="clientComment"></i>
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
