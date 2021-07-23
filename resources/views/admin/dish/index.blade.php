@extends('layouts.admin.index')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Питания</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Вы можете создать новий элемент Питания Еды. Кликните на кнопку
                       чтобы добавить новий элемент.</h6>
                    <p class="card-text"></p>
                    <a href="{{route('dish.create')}}" class="btn btn-success">Добавить</a>
                    <div class="ml-auto">
                        {{ $dishes->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Список питания</h5>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Категория (ru)</th>
                            <th scope="col">Имя (ru)</th>
                            <th scope="col">описания (ru)</th>
                            <th scope="col">калории</th>
                            <th scope="col">белки</th>
                            <th scope="col">жиры</th>
                            <th scope="col">углеводы</th>
                            <th scope="col">Картинка</th>
                            <th scope="col">редактировать\Посмотреть\удалить</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($dishes as $key=>$item)
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <th scope="row">{{optional($item->category)->name_ru}}</th>
                                <td>{{$item->name_ru}}</td>
                                <td>{!!  $item->description_ru!!}</td>
                                <td>{{$item->calories}}</td>
                                <td>{{$item->protein}}</td>
                                <td>{{$item->fats}}</td>
                                <td>{{$item->carbohydrates}}</td>
                                <td><img src="{{$item->image}}" alt="" class="img-thumbnail table-image"></td>
                                <td>
                                    <a href="{{route('dish.edit',$item->id)}}"><i class="fas fa-edit custom-icon-edit"></i></a>
                                                                        <a href=""><i class="far fa-eye custom-icon-preview"></i></a>
                                    <i class="fas fa-trash custom-icon-remove" data-id="{{$item->id}}" data-name="{{$item->name}}" data-type="dish"></i>
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
