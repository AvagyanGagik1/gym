@extends('layouts.admin.index')
@section('content')
    <div class="container border p-5 bg-white">
        <h2 class="pb-5">Форма для Новостей</h2>
        <form action="{{route('clientComment.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row pb-3">
                <label for="user_name_ru" class="col-sm-2 col-form-label font-weight-bold">Имя Пользавателья (ru):</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="user_name_ru" name="user_name_ru" value="{{old('user_name_ru')}}">
                    @if ($errors->has('user_name_ru'))
                        <span class="text-danger">{{ $errors->first('user_name_ru') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="user_name_en" class="col-sm-2 col-form-label font-weight-bold">Имя Пользавателья (en):</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="user_name_en" name="user_name_en" value="{{old('user_name_en')}}">
                    @if ($errors->has('user_name_en'))
                        <span class="text-danger">{{ $errors->first('user_name_en') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="user_name_blr" class="col-sm-2 col-form-label font-weight-bold">Имя Пользавателья (blr):</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="user_name_blr" name="user_name_blr" value="{{old('user_name_blr')}}">
                    @if ($errors->has('user_name_blr'))
                        <span class="text-danger">{{ $errors->first('user_name_blr') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="text_ru" class="col-sm-2 col-form-label font-weight-bold">Комент (ru):</label>
                <div class="col-sm-10">
                    <textarea name="text_ru" class="editor" id="text_ru" cols="50" rows="10">{{old('text_ru')}}</textarea>
                    @if ($errors->has('text_ru'))
                        <span class="text-danger">{{ $errors->first('text_ru') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="text_en" class="col-sm-2 col-form-label font-weight-bold">Комент (en):</label>
                <div class="col-sm-10">
                    <textarea name="text_en" class="editor" id="text_en" cols="50" rows="10">{{old('text_en')}}</textarea>
                    @if ($errors->has('text_en'))
                        <span class="text-danger">{{ $errors->first('text_en') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="text_blr" class="col-sm-2 col-form-label font-weight-bold">Комент (blr):</label>
                <div class="col-sm-10">
                    <textarea name="text_blr" class="editor" id="text_blr" cols="50" rows="10">{{old('text_blr')}}</textarea>
                    @if ($errors->has('text_blr'))
                        <span class="text-danger">{{ $errors->first('text_blr') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="image" class="col-sm-2 col-form-label font-weight-bold">Картинка:</label>
                <div class="container-image col-sm-10">
                    <label class="label" for="input">Пожалуйста добавте изоброжения !</label>
                    <div class="input">
                        <input name="image" id="file" type="file">
                        @if ($errors->has('image'))
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="btn-group">
                    <button type="submit" class="btn btn-success">Создать</button>
                    <a href="{{route('dish.index')}}" class="btn btn-danger">Назад</a>
                </div>
            </div>
        </form>
    </div>
@endsection
