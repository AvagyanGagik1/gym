@extends('layouts.admin.index')
@section('content')
    <div class="container border p-5 bg-white">
        <h2 class="pb-5">Форма редактирования заголовка блока (тренеры) на главной странице</h2>
        <form action="{{route('admin.main.news.update',['id'=>$mainNew->id])}}" method="post"
              enctype="multipart/form-data">
            @csrf
            @method('Put')
            <div class="form-group row pb-3">
                <label for="author" class="col-sm-2 col-form-label font-weight-bold">Автор:</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="author"
                              name="author">{{$mainNew->author}}</textarea>
                    @if ($errors->has('author'))
                        <span class="text-danger">{{ $errors->first('author') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="quote_ru" class="col-sm-2 col-form-label font-weight-bold">цытата (ru):</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="quote_ru"
                              name="quote_ru">{{$mainNew->quote_ru}}</textarea>
                    @if ($errors->has('quote_ru'))
                        <span class="text-danger">{{ $errors->first('quote_ru') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="quote_en" class="col-sm-2 col-form-label font-weight-bold">цытата (en):</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="quote_en"
                              name="quote_en">{{$mainNew->quote_en}}</textarea>
                    @if ($errors->has('quote_en'))
                        <span class="text-danger">{{ $errors->first('quote_en') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="quote_blr" class="col-sm-2 col-form-label font-weight-bold">цытата (blr):</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="quote_blr"
                              name="quote_blr">{{$mainNew->quote_blr}}</textarea>
                    @if ($errors->has('quote_blr'))
                        <span class="text-danger">{{ $errors->first('quote_blr') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="text_ru" class="col-sm-2 col-form-label font-weight-bold">Текст (ru):</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="text_ru"
                              name="text_ru">{{$mainNew->text_ru}}</textarea>
                    @if ($errors->has('text_ru'))
                        <span class="text-danger">{{ $errors->first('text_ru') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="text_en" class="col-sm-2 col-form-label font-weight-bold">Текст (en):</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="text_en"
                              name="text_en">{{$mainNew->text_en}}</textarea>
                    @if ($errors->has('text_en'))
                        <span class="text-danger">{{ $errors->first('text_en') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="text_blr" class="col-sm-2 col-form-label font-weight-bold">Текст (blr):</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="text_blr"
                              name="text_blr">{{$mainNew->text_blr}}</textarea>
                    @if ($errors->has('text_blr'))
                        <span class="text-danger">{{ $errors->first('text_blr') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="text_title_ru" class="col-sm-2 col-form-label font-weight-bold">заголовок текста (ru):</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="text_title_ru"
                              name="text_title_ru">{{$mainNew->text_title_ru}}</textarea>
                    @if ($errors->has('text_title_ru'))
                        <span class="text-danger">{{ $errors->first('text_title_ru') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="text_title_en" class="col-sm-2 col-form-label font-weight-bold">заголовок текста (en):</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="text_title_en"
                              name="text_title_en">{{$mainNew->text_title_en}}</textarea>
                    @if ($errors->has('text_title_en'))
                        <span class="text-danger">{{ $errors->first('text_title_en') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="text_title_blr" class="col-sm-2 col-form-label font-weight-bold">заголовок текста (blr):</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="text_title_blr"
                              name="text_title_blr">{{$mainNew->text_title_blr}}</textarea>
                    @if ($errors->has('text_title_blr'))
                        <span class="text-danger">{{ $errors->first('text_title_blr') }}</span>
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
