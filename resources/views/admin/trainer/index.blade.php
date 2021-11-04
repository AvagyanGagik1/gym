@extends('layouts.admin.index')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Тренери</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Вы можете создать нового Тренера. Кликните на кнопку
                        чтобы добавить нового тренера.</h6>
                    <p class="card-text"></p>
                    <a href="{{route('trainer.create')}}" class="btn btn-success">Добавить</a>
                    <div class="ml-auto">
                        {{ $trainers->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Список тренеров</h5>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Имя (ru)</th>
                                <th scope="col">Профессия (ru)</th>
                                <th scope="col">Картинка</th>
                                <th scope="col">ред.\удал.</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($trainers as $key=>$item)
                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td>{{$item->name_ru}}</td>
                                    <td>{{$item->profession_ru}}</td>
                                    <td><img src="{{$item->image}}" alt="" class="img-thumbnail table-image"></td>
                                    <td>
                                        <a href="{{route('trainer.edit',$item->id)}}"><i class="fas fa-edit custom-icon-edit"></i></a>
                                        <a href=""><i class="far fa-eye custom-icon-preview"></i></a>
                                        <i class="fas fa-trash custom-icon-remove" data-id="{{$item->id}}" data-name="{{$item->name_ru}}" data-type="trainer"></i>
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
