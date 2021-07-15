@extends('layouts.admin.index')
@section('content')
    <div class="container border p-5 bg-white">
        <h2 class="pb-5">Форма для Тренеров</h2>
        <form action="{{route('trainer.update',$trainer->id)}}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group row pb-3">
                <label for="name_ru" class="col-sm-2 col-form-label font-weight-bold">Имя (ru):</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name_ru" name="name_ru" value="{{$trainer->name_ru}}">
                    @if ($errors->has('name_ru'))
                        <span class="text-danger">{{ $errors->first('name_ru') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="name_en" class="col-sm-2 col-form-label font-weight-bold">Имя (en):</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name_en" name="name_en" value="{{$trainer->name_en}}">
                    @if ($errors->has('name_en'))
                        <span class="text-danger">{{ $errors->first('name_en') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="name_blr" class="col-sm-2 col-form-label font-weight-bold">Имя (blr):</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name_blr" name="name_blr" value="{{$trainer->name_blr}}">
                    @if ($errors->has('name_blr'))
                        <span class="text-danger">{{ $errors->first('name_blr') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="profession_ru" class="col-sm-2 col-form-label font-weight-bold">Профессия (ru):</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="profession_ru" name="profession_ru"
                           value="{{$trainer->profession_ru}}">
                    @if ($errors->has('profession_ru'))
                        <span class="text-danger">{{ $errors->first('profession_ru') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="profession_en" class="col-sm-2 col-form-label font-weight-bold">Профессия (en):</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="profession_en" name="profession_en"
                           value="{{$trainer->profession_en}}">
                    @if ($errors->has('profession_en'))
                        <span class="text-danger">{{ $errors->first('profession_en') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="profession_blr" class="col-sm-2 col-form-label font-weight-bold">Профессия (blr):</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="profession_blr" name="profession_blr"
                           value="{{$trainer->profession_blr}}">
                    @if ($errors->has('profession_blr'))
                        <span class="text-danger">{{ $errors->first('profession_blr') }}</span>
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
                        <img src="{{$trainer->image}}" alt="" width="200" id="default-image">

                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="btn-group">
                    <button type="submit" class="btn btn-success">Создать</button>
                    <a href="{{route('trainer.index')}}" class="btn btn-danger">Назад</a>
                </div>
            </div>
        </form>
    </div>
@endsection
