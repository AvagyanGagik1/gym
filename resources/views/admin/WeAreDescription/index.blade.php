@extends('layouts.admin.index')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">

                <h4>Блок на главной странице кто мы (Описаные)</h4>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        @foreach($description as $weAre)
                            <form action="{{route('hwoWeAre.description.update',$weAre->id)}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="text_ru"> Заголовок (ru)</label>
                                    <textarea placeholder="Введите Заголовок" type="text" class="form-control" id="text_ru" rows="3" name="text_ru"
                                              placeholder="text">{{$weAre->text_ru}}</textarea>
                                    @if ($errors->has('text_ru'))
                                        <span class="text-danger">{{ $errors->first('text_ru') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="text_en"> Заголовок (en)</label>
                                    <textarea placeholder="Введите Заголовок" type="text" class="form-control" id="text_en" rows="3" name="text_en"
                                              placeholder="text">{{$weAre->text_en}}</textarea>
                                    @if ($errors->has('text_en'))
                                        <span class="text-danger">{{ $errors->first('text_en') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="text_blr"> Заголовок (blr)</label>
                                    <textarea placeholder="Введите Заголовок" type="text" class="form-control" id="text_blr" rows="3" name="text_blr"
                                              placeholder="text">{{$weAre->text_blr}}</textarea>
                                    @if ($errors->has('text_blr'))
                                        <span class="text-danger">{{ $errors->first('text_blr') }}</span>
                                    @endif
                                </div>
                                <img src="{{$weAre->image}}" alt="" width="200" id="default-image">
                                <input type="file" name="image">
                                <br>
                                <button type="submit" class=" btn btn-success">Изменить</button>
                                <a href="{{route('dashboard')}}" class="btn btn-danger">назад</a>
                            </form>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
