@extends('layouts.admin.index')
@section('content')
    <div class="container border p-5 bg-white">
        <h2 class="pb-5">Форма для Новостей</h2>
        <form action="{{route('user.achievement.add')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="user_id" value="{{$id}}">
            <div class="form-group row pb-3">
                <label for="achievement" class="col-sm-2 col-form-label font-weight-bold">достижение:</label>
                <div class="col-sm-10">
                    <select class="custom-select" id="achievement" name="achievement_id">
                        <option disabled="" selected="">--Выберите достижение--</option>
                        @foreach($achievements as $achievement)
                            <option value="{{$achievement->id}}" id="">
                                {{$achievement->name_ru??$achievement->id}}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="btn-group">
                    <button type="submit" class="btn btn-success">Добавить</button>
                    <a href="{{route('dish.index')}}" class="btn btn-danger">Отменить</a>
                </div>
            </div>
        </form>
            <div class="col-12 p-0 d-flex align-items-center items">
                @foreach($userAchievements as $achievement)
                    <div class="item col-4 d-flex align-items-center flex-column ">
                        <div class="item-img">
                            <div class="item-img-2">
                                <img src="{{$achievement->image}}" alt="">
                            </div>
                        </div>
                        <h1>{{App::getlocale()==='ru'?$achievement->name_ru:(App::getlocale()==='en'?$achievement->name_en:$achievement->name_blr)}}</h1>
                        <p class="p-3 text-center">{{App::getlocale()==='ru'?$achievement->description_ru:(App::getlocale()==='en'?$achievement->description_en:$achievement->description_blr)}}</p>
                    </div>
                @endforeach
            </div>
    </div>
@endsection
