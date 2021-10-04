@extends('layouts.admin.index')
@section('content')
    <div class="container border p-5 bg-white">
        <h2 class="pb-5">Форма для Достижения</h2>
        <form action="{{route('achievement.update',$achievement->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row pb-3">
                <label for="name_ru" class="col-sm-2 col-form-label font-weight-bold">Заголовок (ru):</label>
                <div class="col-sm-10">
                    <input type="text" placeholder="введите заголовок" class="form-control" id="name_ru" name="name_ru" value="{{$achievement->name_ru}}">
                    @if ($errors->has('name_ru'))
                        <span class="text-danger">{{ $errors->first('name_ru') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="name_en" class="col-sm-2 col-form-label font-weight-bold">Заголовок (en):</label>
                <div class="col-sm-10">
                    <input type="text" placeholder="введите заголовок" class="form-control" id="name_en" name="name_en" value="{{$achievement->name_en}}">
                    @if ($errors->has('name_en'))
                        <span class="text-danger">{{ $errors->first('name_en') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="name_blr"  class="col-sm-2 col-form-label font-weight-bold">Заголовок (blr):</label>
                <div class="col-sm-10">
                    <input type="text" placeholder="введите заголовок" class="form-control" id="name_blr" name="name_blr" value="{{$achievement->name_blr}}">
                    @if ($errors->has('name_blr'))
                        <span class="text-danger">{{ $errors->first('name_blr') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="description_ru" class="col-sm-2 col-form-label font-weight-bold">Описаные (ru):</label>
                <div class="col-sm-10">
                    <textarea name="description_ru"  placeholder="введите описаные" class="editor" id="description_ru" cols="50" rows="10">{{$achievement->description_ru}}</textarea>
                    @if ($errors->has('description_ru'))
                        <span class="text-danger">{{ $errors->first('description_ru') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="description_en"  class="col-sm-2 col-form-label font-weight-bold">Описаные (en):</label>
                <div class="col-sm-10">
                    <textarea name="description_en" placeholder="введите описаные" class="editor" id="description_en" cols="50" rows="10">{{$achievement->description_en}}</textarea>
                    @if ($errors->has('description_en'))
                        <span class="text-danger">{{ $errors->first('description_en') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="description_blr" class="col-sm-2 col-form-label font-weight-bold">Описаные (blr):</label>
                <div class="col-sm-10">
                    <textarea name="description_blr"  placeholder="введите описаные" class="editor" id="description_blr" cols="50" rows="10">{{$achievement->description_blr}}</textarea>
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
                        <img src="{{$achievement->image}}" alt="" width="200" id="default-image">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="btn-group">
                    <button type="submit" class="btn btn-success">Обновить</button>
                    <a href="{{route('achievement.index')}}" class="btn btn-danger">Отмкенить</a>
                </div>
            </div>
        </form>
    </div>
@endsection
