@extends('layouts.admin.index')
@section('content')
    <div class="container border p-5 bg-white">
        <h2 class="pb-5">Форма редактирования текста слайдера на главной странице</h2>
        <form action="{{route('slider.text.update',['id'=>$sliderText->id])}}" method="post"
              enctype="multipart/form-data">
            @csrf
            @method('Put')
            <div class="form-group row pb-3">
                <label for="text_ru" class="col-sm-2 col-form-label font-weight-bold">Текст слайдера (ru):</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="text_ru"
                              name="text_ru">{{$sliderText->text_ru}}</textarea>
                    @if ($errors->has('text_ru'))
                        <span class="text-danger">{{ $errors->first('text_ru') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="text_en" class="col-sm-2 col-form-label font-weight-bold">Текст слайдера (en):</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="text_en"
                              name="text_en">{{$sliderText->text_en}}</textarea>
                    @if ($errors->has('text_en'))
                        <span class="text-danger">{{ $errors->first('text_en') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="text_blr" class="col-sm-2 col-form-label font-weight-bold">Текст слайдера (blr):</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="text_blr"
                              name="text_blr">{{$sliderText->text_blr}}</textarea>
                    @if ($errors->has('text_blr'))
                        <span class="text-danger">{{ $errors->first('text_blr') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <div class="btn-group">
                    <button type="submit" class="btn btn-success">обновить</button>
                    <a href="{{route('slider.index')}}" class="btn btn-danger">назад</a>
                </div>
            </div>
        </form>
    </div>
@endsection
