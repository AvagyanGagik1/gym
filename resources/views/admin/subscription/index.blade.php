@extends('layouts.admin.index')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Подпискы</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Вы можете создать новий элемент подписки. Кликните на кнопку
                        чтобы добавить новий элемент.</h6>
                    <p class="card-text"></p>
                    <a href="{{route('subscription.create')}}" class="btn btn-success">Добавить</a>
                    <div class="ml-auto">
                        {{ $subscriptions->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Список подписок</h5>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Заголовок (ru)</th>
                                <th>Продолжительность (в днях)</th>
                                <th>Цена (в грн)</th>
                                <th scope="col">картинка</th>
                                <th scope="col">ред.\уда.</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($subscriptions as $key=>$item)
                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td>{{$item->name_ru}}</td>
                                    <td>{{$item->duration_subscribe}}</td>
                                    <td>{{$item->price}}</td>
                                    <td><img src="{{$item->image}}" alt="" class="img-thumbnail table-image"></td>
                                    <td>
                                        <a href="{{route('subscription.edit',$item->id)}}"><i class="fas fa-edit custom-icon-edit"></i></a>
                                        <i class="fas fa-trash custom-icon-remove" data-id="{{$item->id}}" data-name="{{$item->name_ru}}" data-type="subscription"></i>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.modals.remove')
@endsection
