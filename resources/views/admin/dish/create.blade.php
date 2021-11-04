@extends('layouts.admin.index')
@section('content')
    <div class="container border p-5 bg-white">
        <h2 class="pb-5">Форма для питания</h2>
        <form action="{{route('dish.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row pb-3">
                <label for="food_category_id" class="col-sm-2 col-form-label font-weight-bold">Категория для
                    питания:</label>
                <div class="col-sm-10">
                    <select class="custom-select" id="food_category_id" name="food_category_id">
                        <option disabled @if(!old('food_category_id')) selected @endif>--Выберите Категорию для
                            питания--
                        </option>
                        @foreach($foodCategory as $category)
                            <option value="{{$category->id}}"
                                    @if(old('food_category_id')=== $category->id) selected @endif>{{$category->name_ru}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('food_category_id'))
                        <span class="text-danger">{{ $errors->first('food_category_id')}}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="gender" class="col-sm-2 col-form-label font-weight-bold">Пол для питания:</label>
                <div class="col-sm-10">
                    <select class="custom-select" id="gender" name="gender">
                        <option disabled selected>--Выберите Пол для питания--</option>
                        <option value="male">Мужчина</option>
                        <option value="female">женщина</option>
                    </select>
                    @if ($errors->has('gender'))
                        <span class="text-danger">{{ $errors->first('gender')}}</span>
                    @endif
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Ограничения по питанию</label>
                </div>
                <select multiple class="custom-select" name="dietRestriction[]" id="inputGroupSelect01">
                    @foreach($diet as $key=>$item)
                        <option value="{{$item->id}}">({{$key+1}}) {{$item->name_ru}}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Цель питания</label>
                </div>
                <select multiple class="custom-select" name="purposeOfNutrition[]" id="inputGroupSelect01">
                    @foreach($purpose as $key=> $pur)
                        <option value="{{$pur->id}}">({{$key+1}}) {{$pur->name_ru}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group row pb-3">
                <label for="name_ru" class="col-sm-2 col-form-label font-weight-bold">Имя (ru):</label>
                <div class="col-sm-10">
                    <input type="text" placeholder="Введите Имя" class="form-control" id="name_ru" name="name_ru"
                           value="{{old('name_ru')}}">
                    @if ($errors->has('name_ru'))
                        <span class="text-danger">{{ $errors->first('name_ru') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="name_en" class="col-sm-2 col-form-label font-weight-bold">Имя (en):</label>
                <div class="col-sm-10">
                    <input type="text" placeholder="Введите Имя" class="form-control" id="name_en" name="name_en"
                           value="{{old('name_en')}}">
                    @if ($errors->has('name_en'))
                        <span class="text-danger">{{ $errors->first('name_en') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="name_blr" class="col-sm-2 col-form-label font-weight-bold">Имя (blr):</label>
                <div class="col-sm-10">
                    <input type="text" placeholder="Введите Имя" class="form-control" id="name_blr" name="name_blr"
                           value="{{old('name_blr')}}">
                    @if ($errors->has('name_blr'))
                        <span class="text-danger">{{ $errors->first('name_blr') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="calories" class="col-sm-2 col-form-label font-weight-bold">Калории:</label>
                <div class="col-sm-10">
                    <input type="number" placeholder="Введите Калории" class="form-control" id="protein"
                           name="calories" value="{{old('calories')}}">
                    @if ($errors->has('calories'))
                        <span class="text-danger">{{ $errors->first('calories') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="fats" class="col-sm-2 col-form-label font-weight-bold">Белки:</label>
                <div class="col-sm-10">
                    <input type="number" placeholder="Введите Белки" class="form-control" id="fats" name="fats"
                           value="{{old('fats')}}">
                    @if ($errors->has('fats'))
                        <span class="text-danger">{{ $errors->first('fats') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="protein" class="col-sm-2 col-form-label font-weight-bold">Жиры:</label>
                <div class="col-sm-10">
                    <input type="number" placeholder="Введите Жиры" class="form-control" id="protein" name="protein"
                           value="{{old('protein')}}">
                    @if ($errors->has('protein'))
                        <span class="text-danger">{{ $errors->first('protein') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="carbohydrates" class="col-sm-2 col-form-label font-weight-bold">Углеводы:</label>
                <div class="col-sm-10">
                    <input type="number" placeholder="Введите Углеводы" class="form-control" id="carbohydrates"
                           name="carbohydrates" value="{{old('carbohydrates')}}">
                    @if ($errors->has('carbohydrates'))
                        <span class="text-danger">{{ $errors->first('carbohydrates') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="description_ru" class="col-sm-2 col-form-label font-weight-bold">Описаные (ru):</label>
                <div class="col-sm-10">
                        <textarea name="description_ru" id="description_ru" class="editor"
                                  placeholder="Введите Описаные" cols="50"
                                  rows="10">{{old('description_ru')}}</textarea>
                    @if ($errors->has('description_ru'))
                        <span class="text-danger">{{ $errors->first('description_ru') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="description_en" class="col-sm-2 col-form-label font-weight-bold">Описаные (en):</label>
                <div class="col-sm-10">
                        <textarea name="description_en" id="description_en" class="editor"
                                  placeholder="Введите Описаные" cols="50"
                                  rows="10">{{old('description_en')}}</textarea>
                    @if ($errors->has('description_en'))
                        <span class="text-danger">{{ $errors->first('description_en') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="description_blr" class="col-sm-2 col-form-label font-weight-bold">Описаные
                    (blr):</label>
                <div class="col-sm-10">
                        <textarea name="description_blr" id="description_blr" class="editor"
                                  placeholder="Введите Описаные" cols="50"
                                  rows="10">{{old('description_blr')}}</textarea>
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
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="btn-group">
                    <button type="submit" class="btn btn-success">Создать</button>
                    <a href="{{route('dish.index')}}" class="btn btn-danger">Назад</a>
                </div>
            </div>
        </form>
    </div>
@endsection
