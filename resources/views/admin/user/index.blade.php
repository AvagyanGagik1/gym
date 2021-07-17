@extends('layouts.admin.index')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Пользавателы</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Вы можете создать нового пользавателья. Кликните на кнопку
                        чтобы добавить нового пользавателья.</h6>
                    <p class="card-text"></p>
                    <a href="{{route('users.create')}}" class="btn btn-success">Добавить</a>
                    <div class="ml-auto">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Список Пользователей</h5>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Имя (ru)</th>
                            <th scope="col">цель</th>
                            <th scope="col">емаил</th>
                            <th scope="col">калории</th>
                            <th scope="col">Картинка</th>
                            <th scope="col">редактировать\Посмотреть\удалить</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $key=>$item)
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td>{{$item->name}}</td>
                                <td>{{$item->target}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->calories}}</td>
                                <td><img src="{{$item->avatar}}" alt="" class="img-thumbnail table-image"></td>
                                <td>
                                    <a href="{{route('users.edit',$item->id)}}"><i class="fas fa-edit custom-icon-edit"></i></a>
                                    <a href=""><i class="far fa-eye custom-icon-preview"></i></a>
                                    <i class="fas fa-trash custom-icon-remove" data-id="{{$item->id}}" data-name="{{$item->name}}" data-type="users"></i>
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
