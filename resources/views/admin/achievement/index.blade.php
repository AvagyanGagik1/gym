@extends('layouts.admin.index')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Достижения</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Вы можете создать новое Достижения. Кликните на кнопку
                        чтобы добавить новий элемент.</h6>
                    <p class="card-text"></p>
                    <a href="{{route('achievement.create')}}" class="btn btn-success">Добавить</a>
                    <div class="ml-auto">
                        {{ $achievement->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Список Достижения</h5>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Заголовок (ru)</th>
                            <th scope="col">Заголовок (en)</th>
                            <th scope="col">Заголовок (blr)</th>
                            <th scope="col">текст (ru)</th>
                            <th scope="col">текст (en)</th>
                            <th scope="col">текст (blr)</th>
                            <th scope="col">картинка</th>
                            <th scope="col">редактировать\Посмотреть\удалить</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($achievement as $key=>$item)
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td>{{$item->name_ru}}</td>
                                <td>{{$item->name_en}}</td>
                                <td>{{$item->name_blr}}</td>
                                <td>{!!  $item->description_ru!!}</td>
                                <td>{!!  $item->description_en!!}</td>
                                <td>{!!  $item->description_blr!!}</td>
                                <td><img src="{{$item->image}}" alt="" class="img-thumbnail table-image"></td>
                                <td>
                                    <a href="{{route('achievement.edit',$item->id)}}"><i class="fas fa-edit custom-icon-edit"></i></a>
                                    <a href=""><i class="far fa-eye custom-icon-preview"></i></a>
                                    <i class="fas fa-trash custom-icon-remove" data-id="{{$item->id}}" data-name="{{$item->name_ru}}" data-type="achievement"></i>
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
