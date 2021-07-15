@extends('layouts.admin.index')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">

                <h4>Блок первые шаги изменить</h4>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('firstStep.update',$firstStep->id)}}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="title_ru"> Заголовок (ru)</label>
                                <textarea type="text" class="form-control" id="title_ru" rows="3" name="title_ru"
                                          placeholder="text">{{$firstStep->title_ru}}</textarea>
                                @if ($errors->has('title_ru'))
                                    <span class="text-danger">{{ $errors->first('title_ru') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="title_en"> Заголовок (en)</label>
                                <textarea type="text" class="form-control" id="title_en" rows="3" name="title_en"
                                          placeholder="text">{{$firstStep->title_en}}</textarea>
                                @if ($errors->has('title_en'))
                                    <span class="text-danger">{{ $errors->first('title_en') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="title_blr"> Заголовок (blr)</label>
                                <textarea type="text" class="form-control" id="title_blr" rows="3" name="title_blr"
                                          placeholder="text">{{$firstStep->title_blr}}</textarea>
                                @if ($errors->has('title_blr'))
                                    <span class="text-danger">{{ $errors->first('title_blr') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="video_link"> Сылка на выдео</label>
                                <textarea type="text" class="form-control" id="video_link" rows="3" name="video_link"
                                          placeholder="text">{{$firstStep->video_link}}</textarea>
                                @if ($errors->has('video_link'))
                                    <span class="text-danger">{{ $errors->first('video_link') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="description_ru"> Описаные (ru) </label>
                                <textarea type="text" class="form-control" id="description_ru" rows="3" name="description_ru"
                                          placeholder="text">{{$firstStep->description_ru}}</textarea>
                                @if ($errors->has('description_ru'))
                                    <span class="text-danger">{{ $errors->first('description_ru') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="description_en"> Описаные (en)</label>
                                <textarea type="text" class="form-control" id="description_en" rows="3" name="description_en"
                                          placeholder="text">{{$firstStep->description_en}}</textarea>
                                @if ($errors->has('description_en'))
                                    <span class="text-danger">{{ $errors->first('description_en') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="description_blr"> Описаные (blr) </label>
                                <textarea type="text" class="form-control" id="description_blr" rows="3" name="description_blr"
                                          placeholder="text">{{$firstStep->description_blr}}</textarea>
                                @if ($errors->has('description_blr'))
                                    <span class="text-danger">{{ $errors->first('description_blr') }}</span>
                                @endif
                            </div>
{{--                            @foreach($firstStep->descriptions as $key=> $item)--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="text{{$key}}"> Блок ({{$key+1}})</label>--}}
{{--                                    <textarea type="text" class="form-control" id="text{{$key}}" rows="3"--}}
{{--                                              name="text[{{$key}}]" placeholder="text">{{$item->text}}</textarea>--}}
{{--                                    @if ($errors->has('text'))--}}
{{--                                        <span class="text-danger">{{ $errors->first('text') }}</span>--}}
{{--                                    @endif--}}
{{--                                    <div>--}}
{{--                                        <input type="text" class="form-control" name="number[{{$key}}]"--}}
{{--                                               value="{{$item->number}}">--}}
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
                            <div class="form-group row">
                                <label for="image" class="col-sm-2 col-form-label font-weight-bold">Image:</label>
                                <div class="container-image col-sm-10">
                                    <label class="label" for="input">Please upload a picture !</label>
                                    <div class="input">
                                        <input name="image" id="file" type="file">
                                        @if ($errors->has('image'))
                                            <span class="text-danger">{{ $errors->first('image') }}</span>
                                        @endif
                                        <img src="{{$firstStep->image}}" alt="" width="200" id="default-image">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class=" btn btn-success">Изменить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
