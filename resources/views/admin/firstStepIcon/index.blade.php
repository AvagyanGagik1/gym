@extends('layouts.admin.index')
@section('content')
    <div class="container border p-5 bg-white">
        <h2 class="pb-5">Форма редактирования заголовка блока (тренеры) на главной странице</h2>
        @foreach($descriptions as $item)
        <form action="{{route('firstStep.update.icon',$item->id)}}" method="post"
              enctype="multipart/form-data">
            @csrf
            @method('Put')
            <div class="form-group row pb-3">
                <label for="text_ru" class="col-sm-2 col-form-label font-weight-bold">Заголовок (ru):</label>
                <div class="col-sm-10">
                    <textarea class="form-control" placeholder="Введите Заголовок" id="text_ru"
                              name="text_ru">{{$item->text_ru}}</textarea>
                    @if ($errors->has('text_ru'))
                        <span class="text-danger">{{ $errors->first('text_ru') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="text_en" class="col-sm-2 col-form-label font-weight-bold">Заголовок (en):</label>
                <div class="col-sm-10">
                    <textarea class="form-control" placeholder="Введите Заголовок" id="text_en"
                              name="text_en">{{$item->text_en}}</textarea>
                    @if ($errors->has('text_en'))
                        <span class="text-danger">{{ $errors->first('text_en') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="text_blr" class="col-sm-2 col-form-label font-weight-bold">Заголовок (blr):</label>
                <div class="col-sm-10">
                    <textarea class="form-control" placeholder="Введите Заголовок" id="text_blr"
                              name="text_blr">{{$item->text_blr}}</textarea>
                    @if ($errors->has('text_blr'))
                        <span class="text-danger">{{ $errors->first('text_blr') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="number" class="col-sm-2 col-form-label font-weight-bold">Заголовок (ru):</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Введите Заголовок" id="number" name="number" value="{{$item->number}}">
                    @if ($errors->has('number'))
                        <span class="text-danger">{{ $errors->first('number') }}</span>
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
        @endforeach
    </div>
@endsection
