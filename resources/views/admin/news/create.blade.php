@extends('layouts.admin.index')
@section('content')
    <div class="container border p-5 bg-white">
        <h2 class="pb-5">Форма для Новостей</h2>
        <form action="{{route('news.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row pb-3">
                <label for="title_ru" class="col-sm-2 col-form-label font-weight-bold">Заголовок (ru):</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="title_ru" name="title_ru" value="{{old('title_ru')}}">
                    @if ($errors->has('title_ru'))
                        <span class="text-danger">{{ $errors->first('title_ru') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="title_en" class="col-sm-2 col-form-label font-weight-bold">Заголовок (en):</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="title_en" name="title_en" value="{{old('title_en')}}">
                    @if ($errors->has('title_en'))
                        <span class="text-danger">{{ $errors->first('title_en') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="title_blr" class="col-sm-2 col-form-label font-weight-bold">Заголовок (blr):</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="title_blr" name="title_blr" value="{{old('title_blr')}}">
                    @if ($errors->has('title_blr'))
                        <span class="text-danger">{{ $errors->first('title_blr') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="description_ru" class="col-sm-2 col-form-label font-weight-bold">Описаные (ru):</label>
                <div class="col-sm-10">
                    <textarea name="description_ru" class="editor" id="description_ru" cols="50" rows="10">{{old('description_ru')}}</textarea>
                    @if ($errors->has('description_ru'))
                        <span class="text-danger">{{ $errors->first('description_ru') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="description_en" class="col-sm-2 col-form-label font-weight-bold">Описаные (en):</label>
                <div class="col-sm-10">
                    <textarea name="description_en" class="editor" id="description_en" cols="50" rows="10">{{old('description_en')}}</textarea>
                    @if ($errors->has('description_en'))
                        <span class="text-danger">{{ $errors->first('description_en') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="description_blr" class="col-sm-2 col-form-label font-weight-bold">Описаные (blr):</label>
                <div class="col-sm-10">
                    <textarea name="description_blr" class="editor" id="description_blr" cols="50" rows="10">{{old('description_blr')}}</textarea>
                    @if ($errors->has('description_blr'))
                        <span class="text-danger">{{ $errors->first('description_blr') }}</span>
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
