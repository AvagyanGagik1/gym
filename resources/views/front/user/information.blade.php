@extends('layouts.front.profile')
@section('content')
    <section class="content information-content">
        <div class="d-flex flex-column  ">
            <div class="col-xl-10 col-12 d-flex justify-content-center flex-wrap m-auto">
                <div class="col-12 p-0 d-flex align-items-center subscribe-header">
                    <h2>{{__('language.personal')}}</h2>
                </div>
                <div class="col-12 p-0 personal-head">
                    <div class="personal-head-img">
                        <img src="{{\Illuminate\Support\Facades\Auth::user()->avatar??'/images/emptyAvatar.png'}}" id="avatarImage"
                             class="img-fluid" alt="">
                        <button>
                            <input type="file" id="changePhoto">
                            <img src="/images/personal-camera.png" alt="">
                        </button>
                    </div>
                    <div class="personal-head-name d-flex flex-column align-items-start">
                        <label for="userNameSet">{{__('language.yourName')}}</label>
                        <input type="text" id="userNameSet" value="{{auth()->user()->name??''}}">
                    </div>
                    <div class="personal-head-gender d-flex flex-column align-items-start">
                        <label for="">{{__('language.yourGender')}}</label>
                        <select name="gender" value="" id="userGenderSet">
                            <option id="gender" @if(auth()->user()->gender==='female') selected @endif value="female">
                                {{__('language.male')}}
                            </option>
                            <option id="gender" @if(auth()->user()->gender==='male') selected @endif value="male">
                                {{__('language.female')}}
                            </option>
                        </select>
                    </div>
                </div>
                <div class="col-12 p-0 personal-params d-flex">
                    <div class="col-4 p-0 d-flex flex-wrap custom-params">
                        <div class="col-12 personal-params-header">
                            <h3>{{__('language.parameters')}}</h3>
                        </div>
                        <form action="{{route('user.change.personals')}}" method="post" class="d-flex flex-wrap">
                            @csrf
                            <input type="hidden" name="user_id" value="{{auth()->id()}}">
                            <div class="col-5 personal-params-item">
                                <p>
                                    {{__('language.weight')}}
                                </p>
                                <input type="number" value="{{$personal->weight}}" name="weight">

                                <div class="line">
                                    <img src="/images/polygon.png" alt="">
                                </div>
                                <div>
                                    <button type="button" class="plusMinusPersonal" data-calc="-">-</button>
                                    <button type="button" class="plusMinusPersonal" data-calc="+">+</button>
                                </div>
                            </div>
                            <div class="col-5 personal-params-item">
                                <p>
                                    {{__('language.height')}}
                                </p>
                                <input type="number" value="{{$personal->height}}" name="height">

                                <div class="line">
                                    <img src="/images/polygon.png" alt="">
                                </div>
                                <div>
                                    <button type="button" class="plusMinusPersonal" data-calc="-">-</button>
                                    <button type="button" class="plusMinusPersonal" data-calc="+">+</button>
                                </div>
                            </div>
                            <div class="col-5 personal-params-item">
                                <p>
                                    {{__('language.age')}}
                                </p>
                                <input type="number" value="{{$personal->age}}" name="age">

                                <div class="line">
                                    <img src="/images/polygon.png" alt="">
                                </div>
                                <div>
                                    <button type="button" class="plusMinusPersonal" data-calc="-">-</button>
                                    <button type="button" class="plusMinusPersonal" data-calc="+">+</button>
                                </div>
                            </div>
                            <div class="col-5 personal-params-item-update">
                                <div>
                                    <h2>{{__('language.weight')}}: {{$personal->weight}} {{__('language.kg')}}</h2>
                                    <p>{{$personal->created_at->format('m.d.Y')}}</p>
                                </div>
                                <div>
                                    <button type="submit" class="btn m-0">
                                        {{__('language.update')}}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-8 p-0 chart-div">
                        <div class="col-12 personal-params-header">
                            <h3>{{__('language.chart')}}</h3>
                            <canvas id="profileChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-12 p-0 personal-numbers d-flex justify-content-around flex-wrap">
                    <div class="col-2 item">
                        <h1>7550+</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="col-2 item">
                        <h1>7550+</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="col-2 item">
                        <h1>7550+</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="col-2 item">
                        <h1>7550+</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="col-12 item">
                        <h5>{{__('language.projectVideo')}}</h5>
                    </div>
                </div>
                <div class="col-12 p-0 personal-video d-flex justify-content-around flex-wrap">
                    <div class="col-12 item">
                        <h2>{{__('language.welcome')}}</h2>
                    </div>
                    <div class="col-12 item">
                        <img src="/images/informationVideo.png" alt="" class="img-fluid">
                        <div class="position-absolute">
                            <img src="/images/playButton.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{asset('/js/front/profileChart.js')}}" defer></script>
@endsection
