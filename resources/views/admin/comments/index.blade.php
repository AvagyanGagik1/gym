@extends('layouts.admin.index')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">коммент (тренировки)</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Вы можете создать Новий коммент для тренировки. Кликните на кнопку
                        чтобы добавить новий коммент.</h6>
                    <p class="card-text"></p>
                    <a href="{{route('comment.create')}}" class="btn btn-success">Добавить</a>
                    <div class="ml-auto">
                        {{ $comments->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Список (комментов тренировк)</h5>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">User</th>
                            <th scope="col">Радительский коммент</th>
                            <th scope="col">Коммент</th>
                            <th scope="col">Тренировка комента</th>
                            <th scope="col">разрешено показывать</th>
{{--                            <th scope="col">редактировать</th>--}}
                            <th scope="col">удалить</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($comments as $key=>$item)
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td>{{optional($item->user)->name}}</td>
                                <td>{{optional($item->parent)->text}}</td>
                                <td>{{$item->text}}</td>
                                <td>{{$item->workouts->name_ru}}</td>
                                <td><input class="approved" data-id="{{$item->id}}" type="checkbox" @if($item->approved) checked @endif value="1"></td>
{{--                                <td>--}}
{{--                                    <a href="{{route('comment.edit',$item->id)}}"><i class="fas fa-edit custom-icon-edit"></i></a>--}}
{{--                                </td>--}}
                                <td>
                                    <i class="fas fa-trash custom-icon-remove" data-id="{{$item->id}}" data-name="{{$item->name}}" data-type="comment"></i>
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
