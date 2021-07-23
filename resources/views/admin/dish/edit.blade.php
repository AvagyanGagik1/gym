@extends('layouts.admin.index')
@section('content')
    <div class="container border p-5 bg-white">
        <h2 class="pb-5">Форма для питания</h2>
        <form action="{{route('dish.update',$dish->id)}}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group row pb-3">
                <label for="food_category_id" class="col-sm-2 col-form-label font-weight-bold">Категория для питания:</label>
                <div class="col-sm-10">
                    <select class="custom-select" id="food_category_id" name="food_category_id">
                        <option disabled @if(!$dish->food_category_id) selected @endif>--Выберите Категорию для питания--</option>
                        @foreach($foodCategory as $category)
                            <option value="{{$category->id}}" @if($dish->food_category_id === $category->id) selected @endif>{{$category->name_ru}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('food_category_id'))
                        <span class="text-danger">{{ $errors->first('food_category_id')}}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="name_ru" class="col-sm-2 col-form-label font-weight-bold">Имя (ru):</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Введите Имя" id="name_ru" name="name_ru" value="{{$dish->name_ru}}">
                    @if ($errors->has('name_ru'))
                        <span class="text-danger">{{ $errors->first('name_ru') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="name_en" class="col-sm-2 col-form-label font-weight-bold">Имя (en):</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Введите Имя" id="name_en" name="name_en" value="{{$dish->name_en}}">
                    @if ($errors->has('name_en'))
                        <span class="text-danger">{{ $errors->first('name_en') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="name_blr" class="col-sm-2 col-form-label font-weight-bold">Имя (blr):</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Введите Имя" id="name_blr" name="name_blr" value="{{$dish->name_blr}}">
                    @if ($errors->has('name_blr'))
                        <span class="text-danger">{{ $errors->first('name_blr') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="protein" class="col-sm-2 col-form-label font-weight-bold">Протеин:</label>
                <div class="col-sm-10">
                    <input type="number" placeholder="Введите Протеин" class="form-control" id="protein" name="protein" value="{{$dish->protein}}">
                    @if ($errors->has('protein'))
                        <span class="text-danger">{{ $errors->first('protein') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="calories" class="col-sm-2 col-form-label font-weight-bold">Калории:</label>
                <div class="col-sm-10">
                    <input type="number" placeholder="Введите Калории" class="form-control" id="protein" name="calories" value="{{$dish->calories}}">
                    @if ($errors->has('calories'))
                        <span class="text-danger">{{ $errors->first('calories') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="fats" class="col-sm-2 col-form-label font-weight-bold">Белки:</label>
                <div class="col-sm-10">
                    <input type="number" placeholder="Введите Белки" class="form-control" id="fats" name="fats" value="{{$dish->fats}}">
                    @if ($errors->has('fats'))
                        <span class="text-danger">{{ $errors->first('fats') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="carbohydrates" placeholder="Введите Углеводы" class="col-sm-2 col-form-label font-weight-bold">Углеводы:</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="carbohydrates" name="carbohydrates" value="{{$dish->carbohydrates}}">
                    @if ($errors->has('carbohydrates'))
                        <span class="text-danger">{{ $errors->first('carbohydrates') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="description_ru" class="col-sm-2 col-form-label font-weight-bold">Описаные (ru):</label>
                <div class="col-sm-10">
                    <textarea name="description_ru" class="editor" placeholder="Введите Описаные" id="description_ru" cols="50" rows="10">{{$dish->description_ru}}</textarea>
                    @if ($errors->has('description_ru'))
                        <span class="text-danger">{{ $errors->first('description_ru') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="description_en" class="col-sm-2 col-form-label font-weight-bold">Описаные (en):</label>
                <div class="col-sm-10">
                    <textarea name="description_en" class="editor" placeholder="Введите Описаные" id="description_en" cols="50" rows="10">{{$dish->description_en}}</textarea>
                    @if ($errors->has('description_en'))
                        <span class="text-danger">{{ $errors->first('description_en') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="description_blr" class="col-sm-2 col-form-label font-weight-bold">Описаные (blr):</label>
                <div class="col-sm-10">
                    <textarea name="description_blr" class="editor" placeholder="Введите Описаные" id="description_blr" cols="50" rows="10">{{$dish->description_blr}}</textarea>
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
                        <img src="{{$dish->image}}" alt="" width="200" id="default-image">
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
