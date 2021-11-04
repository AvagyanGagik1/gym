@extends('layouts.admin.index')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Програмы</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Вы можете создать новые Програмы . Кликните на кнопку
                        чтобы добавить новий элемент.</h6>
                    <p class="card-text"></p>
                    <a href="{{route('program.create')}}" class="btn btn-success">Добавить</a>
                    <div class="ml-auto">
                        {{ $programs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Список програм</h5>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Категория (ru)</th>
                                <th scope="col">Трейнер</th>
                                {{--                                <th scope="col">Подписка</th>--}}
                                <th scope="col">Имя (ru)</th>
                                <th scope="col">Тип</th>
                                <th scope="col">Длительность</th>
                                <th scope="col">Интенсивность (ru)</th>
                                <th scope="col">Описания (ru)</th>
                                <th scope="col">Картинка</th>
                                <th scope="col">ред.\тренировки.\уд.</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($programs as $key=>$item)
                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <th scope="row">{{$item->category->name_ru}}</th>
                                    <th scope="row">{{$item->trainer->name_ru}}</th>
                                    {{--                                    <th scope="row">{{$item->subscribe->name_ru}}</th>--}}
                                    <td>{{$item->name_ru}}</td>
                                    @if($item->type==='Hall')
                                        <td>Зал</td>
                                    @else
                                        <td>Дом</td>
                                    @endif
                                    <td>{{$item->duration}}</td>
                                    <td>{{$item->intensity_ru}}</td>
                                    <td style="max-width: 240px;
    max-height: 114px;
    overflow: hidden;
    display: block;">{!! $item->description_ru !!}</td>
                                    <td><img src="{{$item->image}}" alt="" class="img-thumbnail table-image"></td>
                                    <td>
                                        <a href="{{route('program.edit',$item->id)}}"><i
                                                class="fas fa-edit custom-icon-edit"></i></a>
                                        <a href="{{route('program.afterProgramCreate',$item->id)}}"><i
                                                class="fab fa-elementor"></i></a>
                                        <i class="fas fa-trash custom-icon-remove" data-id="{{$item->id}}"
                                           data-name="{{$item->name_ru}}" data-type="program"></i>
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
