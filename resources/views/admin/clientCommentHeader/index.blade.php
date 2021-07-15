@extends('layouts.admin.index')
@section('content')
    <div class="container border p-5 bg-white">
        <h2 class="pb-5">Форма редактирования заголовка блока (коменты) на главной странице</h2>
        <form action="{{route('client.comment.header.update',['id'=>$header->id])}}" method="post"
              enctype="multipart/form-data">
            @csrf
            @method('Put')
            <div class="form-group row pb-3">
                <label for="title_ru" class="col-sm-2 col-form-label font-weight-bold">Заголовок что говорят о нас клиенты Русский:</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="title_ru"
                              name="title_ru">{{$header->title_ru}}</textarea>
                    @if ($errors->has('title_ru'))
                        <span class="text-danger">{{ $errors->first('title_ru') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="title_en" class="col-sm-2 col-form-label font-weight-bold">Заголовок что говорят о нас клиенты Англиский:</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="title_en"
                              name="title_en">{{$header->title_en}}</textarea>
                    @if ($errors->has('title_en'))
                        <span class="text-danger">{{ $errors->first('title_en') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="title_blr" class="col-sm-2 col-form-label font-weight-bold">Заголовок что говорят о нас клиенты Беларусский:</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="title_blr"
                              name="title_blr">{{$header->title_blr}}</textarea>
                    @if ($errors->has('title_blr'))
                        <span class="text-danger">{{ $errors->first('title_blr') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <div class="btn-group">
                    <button type="submit" class="btn btn-success">обновить</button>
                    <a href="{{route('dashboard')}}" class="btn btn-danger">назад</a>
                </div>
            </div>
        </form>
    </div>
@endsection
