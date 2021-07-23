@extends('layouts.admin.index')
@section('content')
    <div class="container border p-5 bg-white">
        <h2 class="pb-5">Форма редактирования Выдео о проэкте главной странице</h2>
        <form action="{{route('project.video.update',$projectVideo->id)}}" method="post"
              enctype="multipart/form-data">
            @csrf
            @method('Put')
            <div class="form-group row pb-3">
                <label for="link" class="col-sm-2 col-form-label font-weight-bold">Видео о проэкте:</label>
                <div class="col-sm-10">
                    <textarea placeholder="Ссылка на видео" class="form-control" id="link"
                              name="link">{{$projectVideo->link}}</textarea>
                    @if ($errors->has('link'))
                        <span class="text-danger">{{ $errors->first('link') }}</span>
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
