@extends('layouts.admin.index')
@section('content')
    <div class="container border p-5 bg-white">
        <h2 class="pb-5">Форма создания Категории для  Питания</h2>
        <form action="{{route('comment.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row pb-3">
                <label for="user_id" class="col-sm-2 col-form-label font-weight-bold">Пользаватель:</label>
                <div class="col-sm-10">
                    <select class="custom-select" id="user_id" name="user_id">
                        <option disabled @if(!old('user_id')) selected @endif >--выбрать пользавателя--</option>
                        @foreach($users as $user)
                            <option value="{{$user->id}}" @if(old('user_id') ===  $user->id)  selected  @endif >{{$user->name??$user->id}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('user_id'))
                        <span class="text-danger">{{ $errors->first('user_id')}}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="parent_id" class="col-sm-2 col-form-label font-weight-bold">Комент которому хотите ответить:</label>
                <div class="col-sm-10">
                    <select class="custom-select" id="parent_id" name="parent_id">
                        <option disabled @if(!old('parent_id')) selected @endif>--Выберите Комент которому хотите добавить ответ--</option>
                        @foreach($comments as $comment)
                            <option value="{{$comment->id}}" @if(old('parent_id')=== $comment->id) selected @endif>{{$comment->text}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('parent_id'))
                        <span class="text-danger">{{ $errors->first('parent_id')}}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="workout_id" class="col-sm-2 col-form-label font-weight-bold">Выберите тренировку каторой хотите оставить коммент:</label>
                <div class="col-sm-10">
                    <select class="custom-select" id="workout_id" name="workout_id">
                        <option disabled @if(!old('workout_id')) selected @endif>--Выберите тренировку--</option>
                        @foreach($workouts as $workout)
                            <option value="{{$workout->id}}" @if(old('workout_id') === $workout->id) selected @endif>{{$workout->name_ru}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('workout_id'))
                        <span class="text-danger">{{ $errors->first('workout_id')}}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="text" class="col-sm-2 col-form-label font-weight-bold">Коммент (en):</label>
                <div class="col-sm-10">
                    <textarea name="text" id="text" class="editor" cols="50" rows="10">{{old('text')}}</textarea>
                    @if ($errors->has('text'))
                        <span class="text-danger">{{ $errors->first('text') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <p class="col-sm-2 col-form-label font-weight-bold">Разрешить показывать</p>
                <div class="custom-control custom-radio m-2 ">
                    <input type="checkbox" id="approved" name="approved" @if(old('approved')) checked @endif value="1" class="custom-control-input">
                    <label class="custom-control-label" for="approved">Разрешить показывать</label>
                </div>
            </div>
            <div class="form-group row">
                <div class="btn-group">
                    <button type="submit" class="btn btn-success">Создать</button>
                    <a href="{{route('comment.index')}}" class="btn btn-danger">Назад</a>
                </div>
            </div>
        </form>
    </div>
@endsection
