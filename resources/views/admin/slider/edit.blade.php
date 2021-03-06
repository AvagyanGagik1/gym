@extends('layouts.admin.index')
@section('content')
    <div class="container border p-5 bg-white">
        <h2 class="pb-5">Slider form</h2>
        <form action="{{route('slider.update',['id'=>$slider->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('Put')
{{--            <div class="form-group row pb-3">--}}
{{--                <label for="title" class="col-sm-2 col-form-label font-weight-bold">Title:</label>--}}
{{--                <div class="col-sm-10">--}}
{{--                    <input type="text" class="form-control" id="title" name="title" value="{{$slider->title}}">--}}
{{--                    @if ($errors->has('title'))--}}
{{--                        <span class="text-danger">{{ $errors->first('title') }}</span>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="form-group row pb-3">--}}
{{--                <label for="short-description" class="col-sm-2 col-form-label font-weight-bold">Short description:</label>--}}
{{--                <div class="col-sm-10">--}}
{{--                    <input type="text" class="form-control" id="short-description" name="short_description" value="{{$slider->short_description}}">--}}
{{--                    @if ($errors->has('short_description'))--}}
{{--                        <span class="text-danger">{{ $errors->first('short_description') }}</span>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="form-group row pb-3">--}}
{{--                <label for="long-description" class="col-sm-2 col-form-label font-weight-bold">Long description:</label>--}}
{{--                <div class="col-sm-10">--}}
{{--                    <textarea class="form-control" id="long-description" name="long_description" >{{$slider->long_description}}</textarea>--}}
{{--                    @if ($errors->has('long_description'))--}}
{{--                        <span class="text-danger">{{ $errors->first('long_description') }}</span>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="form-group row">
                <label for="image" class="col-sm-2 col-form-label font-weight-bold">????????????????:</label>
                <div class="container-image col-sm-10">
                    <label class="label" for="input">Please upload a picture !</label>
                    <div class="input">
                        <input name="image" id="file" type="file">
                        @if ($errors->has('image'))
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                        @endif
                        <img src="{{$slider->image}}" alt="" width="200" id="default-image">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="image" class="col-sm-2 col-form-label font-weight-bold">????????????????:</label>
                <div class="container-image-class col-sm-10">
                    <label class="label" for="input">Please upload a picture !</label>
                    <div class="input">
                        <input name="image-small" class="file" type="file">
                        @if ($errors->has('image'))
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                        @endif
                        <img src="{{$slider->image_mobile}}" alt="" width="200" id="default-image">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="btn-group">
                    <button type="submit" class="btn btn-success">????????????????</button>
                    <a href="{{route('slider.index')}}" class="btn btn-danger">????????????????</a>
                </div>
            </div>
        </form>
    </div>
@endsection
