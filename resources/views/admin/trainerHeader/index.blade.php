@extends('layouts.admin.index')
@section('content')
    <div class="container border p-5 bg-white">
        <h2 class="pb-5">Форма редактирования заголовка блока (тренеры) на главной странице</h2>
        <form action="{{route('admin.trainer.header.update',['id'=>$trainerHeader->id])}}" method="post"
              enctype="multipart/form-data">
            @csrf
            @method('Put')
            <div class="form-group row pb-3">
                <label for="title_ru" class="col-sm-2 col-form-label font-weight-bold">Заголовок (ru):</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="title_ru"
                              name="title_ru">{{$trainerHeader->title_ru}}</textarea>
                    @if ($errors->has('title_ru'))
                        <span class="text-danger">{{ $errors->first('title_ru') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="title_en" class="col-sm-2 col-form-label font-weight-bold">Заголовок (en):</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="title_en"
                              name="title_en">{{$trainerHeader->title_en}}</textarea>
                    @if ($errors->has('title_en'))
                        <span class="text-danger">{{ $errors->first('title_en') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="title_blr" class="col-sm-2 col-form-label font-weight-bold">Заголовок (blr):</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="title_blr"
                              name="title_blr">{{$trainerHeader->title_blr}}</textarea>
                    @if ($errors->has('title_blr'))
                        <span class="text-danger">{{ $errors->first('title_blr') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="description_ru" class="col-sm-2 col-form-label font-weight-bold">Опысания (ru):</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="description_ru"
                              name="description_ru">{{$trainerHeader->description_ru}}</textarea>
                    @if ($errors->has('description_ru'))
                        <span class="text-danger">{{ $errors->first('description_ru') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="description_en" class="col-sm-2 col-form-label font-weight-bold">Опысания (en):</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="description_en"
                              name="description_en">{{$trainerHeader->description_en}}</textarea>
                    @if ($errors->has('description_en'))
                        <span class="text-danger">{{ $errors->first('description_en') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="description_blr" class="col-sm-2 col-form-label font-weight-bold">Опысания (blr):</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="description_blr"
                              name="description_blr">{{$trainerHeader->description_blr}}</textarea>
                    @if ($errors->has('description_blr'))
                        <span class="text-danger">{{ $errors->first('description_blr') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <div class="btn-group">
                    <button type="submit" class="btn btn-success">Обновить</button>
                    <a href="{{route('dashboard')}}" class="btn btn-danger">Отменить</a>
                </div>
            </div>
        </form>
    </div>
@endsection
