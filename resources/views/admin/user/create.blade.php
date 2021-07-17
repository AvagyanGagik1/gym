@extends('layouts.admin.index')
@section('content')
    <div class="container border p-5 bg-white">
        <h2 class="pb-5">Форма для Новостей</h2>
        <form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row pb-3">
                <label for="email" class="col-sm-2 col-form-label font-weight-bold">email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}">
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="name" class="col-sm-2 col-form-label font-weight-bold">Имя</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="password" class="col-sm-2 col-form-label font-weight-bold">Пароль</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}">
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="weight" class="col-sm-2 col-form-label font-weight-bold">вес</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="weight" name="weight" value="{{old('weight')}}">
                    @if ($errors->has('weight'))
                        <span class="text-danger">{{ $errors->first('weight') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="height" class="col-sm-2 col-form-label font-weight-bold">рост</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="height" name="height" value="{{old('height')}}">
                    @if ($errors->has('height'))
                        <span class="text-danger">{{ $errors->first('height') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="age" class="col-sm-2 col-form-label font-weight-bold">возрост</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="age" name="age" value="{{old('age')}}">
                    @if ($errors->has('age'))
                        <span class="text-danger">{{ $errors->first('age') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="target" class="col-sm-2 col-form-label font-weight-bold">Цель:</label>
                <div class="col-sm-10">
                    <select class="custom-select" id="target" name="target">
                        <option disabled selected>--Выберите Категорию для питания--</option>
                        <option @if(old('target') === 'flexibility') selected @endif value="flexibility" id="" >Гибкость</option>
                        <option @if(old('target') === 'BurnFat') selected @endif value="BurnFat" id="" >Сжечь жир</option>
                        <option @if(old('target') === 'muscleSet') selected @endif value="muscleSet" id="" >Набор мышц</option>
                        <option @if(old('target') === 'keepingInShape') selected @endif value="keepingInShape" id="" >Поддержание формы</option>
                    </select>
                    @if ($errors->has('target'))
                        <span class="text-danger">{{ $errors->first('target')}}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="food_category_id" class="col-sm-2 col-form-label font-weight-bold">Пол:</label>
                <div class="col-sm-10">
                    <select class="custom-select" id="food_category_id" name="gender">
                        <option disabled selected>--Выберите Категорию для питания--</option>
                        <option @if(old('gender') === 'female') selected @endif value="female" id="" >Мужской</option>
                        <option @if(old('gender') === 'male') selected @endif value="male" id="" >Женский</option>
                    </select>
                    @if ($errors->has('gender'))
                        <span class="text-danger">{{ $errors->first('gender')}}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="image" class="col-sm-2 col-form-label font-weight-bold">Картинка:</label>
                <div class="container-image col-sm-10">
                    <label class="label" for="input">Пожалуйста добавте изоброжения !</label>
                    <div class="input">
                        <input name="avatar" id="file" type="file">
                        @if ($errors->has('avatar'))
                            <span class="text-danger">{{ $errors->first('avatar') }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <input type="hidden" name="terms" value="1">
            <div class="form-group row">
                <div class="btn-group">
                    <button type="submit" class="btn btn-success">Создать</button>
                    <a href="{{route('dish.index')}}" class="btn btn-danger">Назад</a>
                </div>
            </div>
        </form>
    </div>
@endsection
