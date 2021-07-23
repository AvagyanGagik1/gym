@extends('layouts.admin.index')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">

                <h4>Блок на главной странице кто мы</h4>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('hwoWeAre.update',$weAre->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="title_ru"> Заголовок (ru)</label>
                                <textarea type="text" placeholder="Введите Заголовок" class="form-control" id="title_ru" rows="3" name="title_ru" placeholder="text">{{$weAre->title_ru}}</textarea>
                                @if ($errors->has('title_ru'))
                                    <span class="text-danger">{{ $errors->first('title_ru') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="title_en"> Заголовок (en)</label>
                                <textarea type="text" placeholder="Введите Заголовок" class="form-control" id="title_en" rows="3" name="title_en" placeholder="text">{{$weAre->title_en}}</textarea>
                                @if ($errors->has('title_en'))
                                    <span class="text-danger">{{ $errors->first('title_en') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="title_blr"> Заголовок (blr)</label>
                                <textarea type="text" placeholder="Введите Заголовок" class="form-control" id="title_blr" rows="3" name="title_blr" placeholder="text">{{$weAre->title_blr}}</textarea>
                                @if ($errors->has('title_blr'))
                                    <span class="text-danger">{{ $errors->first('title_blr') }}</span>
                                @endif
                            </div>
{{--                            @foreach($descriptions as $key=> $item)--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="title"> Описаные</label>--}}
{{--                                    <textarea type="text" class="form-control" id="title" rows="3" name="text[{{$key}}]" placeholder="text">{{$item->text}}</textarea>--}}
{{--                                    @if ($errors->has('text['.$key.']'))--}}
{{--                                        <span class="text-danger">{{ $errors->first('text['.$key.']') }}</span>--}}
{{--                                    @endif--}}
{{--                                    <div>--}}
{{--                                        <h4>Виберите новую иконку чтобы заменить</h4>--}}
{{--                                        <input type="file" name="images[{{$key}}]">--}}
{{--                                        <img src="{{$item->image}}" alt="">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
                            {{--                            <div class="form-group">--}}
                            {{--                                <label for="color">Background color</label>--}}
                            {{--                                <input type="color" class="form-control" id="color" name="bg_color" placeholder="color" value="{{$about->bg_color}}">--}}
                            {{--                                @if ($errors->has('bg_color'))--}}
                            {{--                                    <span class="text-danger">{{ $errors->first('bg_color') }}</span>--}}
                            {{--                                @endif--}}
                            {{--                            </div>--}}
                            {{--                            <div class="form-group">--}}
                            {{--                                <label for="text_color">Text color</label>--}}
                            {{--                                <input type="color" class="form-control" id="color" name="text_color" placeholder="Text color" value="{{$about->text_color}}">--}}
                            {{--                                @if ($errors->has('bg_color'))--}}
                            {{--                                    <span class="text-danger">{{ $errors->first('text_color') }}</span>--}}
                            {{--                                @endif--}}
                            {{--                            </div>--}}
{{--                            <div class="form-group row">--}}
{{--                                <label for="image" class="col-sm-2 col-form-label font-weight-bold">Image:</label>--}}
{{--                                <div class="container-image col-sm-10">--}}
{{--                                    <label class="label" for="input">Please upload a picture !</label>--}}
{{--                                    <div class="input">--}}
{{--                                        <input name="image" id="file" type="file">--}}
{{--                                        @if ($errors->has('image'))--}}
{{--                                            <span class="text-danger">{{ $errors->first('image') }}</span>--}}
{{--                                        @endif--}}
{{--                                        <img src="{{$about->image}}" alt="" width="200" id="default-image">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <button type="submit" class=" btn btn-success">Изменить</button>
                            <a href="{{route('dashboard')}}" class="btn btn-danger">назад</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
