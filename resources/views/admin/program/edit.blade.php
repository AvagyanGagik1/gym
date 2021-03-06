@extends('layouts.admin.index')
@section('content')
    <div class="container border p-5 bg-white">
        <h2 class="pb-5">Форма для Програм</h2>
        <form action="{{route('program.update',$program->id)}}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
{{--            <div class="form-group row pb-3">--}}
{{--                <label for="subscription_id" class="col-sm-2 col-form-label font-weight-bold">Подписка програмы:</label>--}}
{{--                <div class="col-sm-10">--}}
{{--                    <select class="custom-select" id="subscription_id" name="subscription_id">--}}
{{--                        <option disabled @if(!$program->subscription_id) selected @endif>--Выберите програму----}}
{{--                        </option>--}}
{{--                        @foreach($subscriptions as $subscription)--}}
{{--                            <option value="{{$subscription->id}}"--}}
{{--                                    @if($program->subscription_id === $subscription->id) selected @endif>{{$subscription->name_ru}}</option>--}}
{{--                        @endforeach--}}
{{--                    </select>--}}
{{--                    @if ($errors->has('subscription_id'))--}}
{{--                        <span class="text-danger">{{ $errors->first('subscription_id')}}</span>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--            </div>--}}

            <div class="form-group row pb-3">
                <label for="program_category_id" class="col-sm-2 col-form-label font-weight-bold">Категория для
                    питания:</label>
                <div class="col-sm-10">
                    <select class="custom-select" id="program_category_id" name="program_category_id">
                        <option disabled @if(!$program->program_category_id) selected @endif>--Выберите Категорию для
                            програмы--
                        </option>
                        @foreach($programCategories as $category)
                            <option value="{{$category->id}}"
                                    @if($program->program_category_id === $category->id) selected @endif>{{$category->name_ru}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('program_category_id'))
                        <span class="text-danger">{{ $errors->first('program_category_id')}}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="trainer_id" class="col-sm-2 col-form-label font-weight-bold">Категория для питания:</label>
                <div class="col-sm-10">
                    <select class="custom-select" id="trainer_id" name="trainer_id">
                        <option disabled @if(!$program->trainer_id) selected @endif>--Выберите Категорию для питания--
                        </option>
                        @foreach($trainers as $trainer)
                            <option value="{{$trainer->id}}"
                                    @if($program->trainer_id === $trainer->id) selected @endif>{{$trainer->name_ru}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('trainer_id'))
                        <span class="text-danger">{{ $errors->first('trainer_id')}}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="name_ru" class="col-sm-2 col-form-label font-weight-bold">Имя (ru):</label>
                <div class="col-sm-10">
                    <input placeholder="Введите Имя" type="text" class="form-control" id="name_ru" name="name_ru" value="{{$program->name_ru}}">
                    @if ($errors->has('name_ru'))
                        <span class="text-danger">{{ $errors->first('name_ru') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="name_en" class="col-sm-2 col-form-label font-weight-bold">Имя (en):</label>
                <div class="col-sm-10">
                    <input placeholder="Введите Имя" type="text" class="form-control" id="name_en" name="name_en" value="{{$program->name_en}}">
                    @if ($errors->has('name_en'))
                        <span class="text-danger">{{ $errors->first('name_en') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="name_blr" class="col-sm-2 col-form-label font-weight-bold">Имя (blr):</label>
                <div class="col-sm-10">
                    <input placeholder="Введите Имя" type="text" class="form-control" id="name_blr" name="name_blr" value="{{$program->name_blr}}">
                    @if ($errors->has('name_blr'))
                        <span class="text-danger">{{ $errors->first('name_blr') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <p class="col-sm-2 col-form-label font-weight-bold">Тип програмы</p>
                <div class="custom-control custom-radio m-2 ">
                    <input type="radio" id="customRadio1" name="type" value="Hall" @if($program->type === 'Hall') checked @endif  class="custom-control-input">
                    <label class="custom-control-label" for="customRadio1">Зал</label>
                </div>
                <div class="custom-control custom-radio m-2 ">
                    <input type="radio" id="customRadio2" name="type" @if($program->type === 'home') checked @endif value="home" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio2">Дом</label>
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="duration" class="col-sm-2 col-form-label font-weight-bold">Продалжительность:</label>
                <div class="col-sm-10">
                    <input placeholder="Введите Продалжительность" type="text" class="form-control" id="duration" name="duration"
                           value="{{$program->duration}}">
                    @if ($errors->has('duration'))
                        <span class="text-danger">{{ $errors->first('duration') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="intensity_ru" class="col-sm-2 col-form-label font-weight-bold">Интенсивность (ru):</label>
                <div class="col-sm-10">
                    <input placeholder="Введите Интенсивность" type="text" class="form-control" id="intensity_ru" name="intensity_ru"
                           value="{{$program->intensity_ru}}">
                    @if ($errors->has('intensity_ru'))
                        <span class="text-danger">{{ $errors->first('intensity_ru') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="intensity_en" class="col-sm-2 col-form-label font-weight-bold">Интенсивность (en):</label>
                <div class="col-sm-10">
                    <input placeholder="Введите Интенсивность" type="text" class="form-control" id="intensity_en" name="intensity_en"
                           value="{{$program->intensity_en}}">

                    @if ($errors->has('intensity_en'))
                        <span class="text-danger">{{ $errors->first('intensity') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="intensity_blr" class="col-sm-2 col-form-label font-weight-bold">Интенсивность (blr):</label>
                <div class="col-sm-10">
                    <input placeholder="Введите Интенсивность" type="text" class="form-control" id="intensity_blr" name="intensity_blr"
                           value="{{$program->intensity_blr}}">
                    @if ($errors->has('intensity_blr'))
                        <span class="text-danger">{{ $errors->first('intensity_blr') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="description_ru" class="col-sm-2 col-form-label font-weight-bold">Описаные (ru):</label>
                <div class="col-sm-10">
                    <textarea placeholder="Введите Описаные" name="description_ru" class="editor" id="description_ru" cols="50"
                              rows="10">{{$program->description_ru}}</textarea>
                    @if ($errors->has('description_ru'))
                        <span class="text-danger">{{ $errors->first('description_ru') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="description_en" class="col-sm-2 col-form-label font-weight-bold">Описаные (en):</label>
                <div class="col-sm-10">
                    <textarea placeholder="Введите Описаные" name="description_en" class="editor" id="description_en" cols="50"
                              rows="10">{{$program->description_en}}</textarea>
                    @if ($errors->has('description_en'))
                        <span class="text-danger">{{ $errors->first('description_en') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="description_blr" class="col-sm-2 col-form-label font-weight-bold">Описаные (blr):</label>
                <div class="col-sm-10">
                    <textarea placeholder="Введите Описаные" name="description_blr" class="editor" id="description_blr" cols="50"
                              rows="10">{{$program->description_blr}}</textarea>
                    @if ($errors->has('description_blr'))
                        <span class="text-danger">{{ $errors->first('description_blr') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="image" class="col-sm-2 col-form-label font-weight-bold">Картинка:</label>
                <div class="container-image col-sm-10">
                    <label class="label" for="input">Пожалуйста добавте изоброжения !</label>
                    <div class="input">
                        <input name="image" id="file" type="file">
                        @if ($errors->has('image'))
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                        @endif
                        <img src="{{$program->image}}" alt="" width="200" id="default-image">

                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="btn-group">
                    <button type="submit" class="btn btn-success">Обновить</button>
                    <a href="{{route('program.index')}}" class="btn btn-danger">Отменить</a>
                </div>
            </div>
        </form>
    </div>
@endsection
