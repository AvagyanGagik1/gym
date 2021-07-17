@extends('layouts.front.profile')
@section('content')
    <section class="content achievements-content">
        <div class="d-flex flex-column  ">
            <div class="col-xl-10 col-12 d-flex justify-content-center flex-wrap m-auto">
                <div class="col-12 p-0 d-flex align-items-center subscribe-header">
                    <h2>{{__('language.achievements')}}</h2>
                </div>
                <div class="col-12 p-0 d-flex align-items-center items">
                    @foreach($achievements as $achievement)
                    <div class="item">
                        <div class="{{in_array($achievement->id,$activated)?'item-img':'item-block-img'}}">
                            <div class="item-img-2">
                                <img src="{{in_array($achievement->id,$activated)?$achievement->image:'/images/achievement/blockFrame.svg'}}" alt="">
                            </div>
                        </div>
                        <h1>{{App::getlocale()==='ru'?$achievement->name_ru:(App::getlocale()==='en'?$achievement->name_en:$achievement->name_blr)}}</h1>
                        <p>{{App::getlocale()==='ru'?$achievement->description_ru:(App::getlocale()==='en'?$achievement->description_en:$achievement->description_blr)}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
