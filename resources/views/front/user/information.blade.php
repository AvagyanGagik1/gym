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
                        <img src="{{\Illuminate\Support\Facades\Auth::user()->avatar??'/images/emptyAvatar.png'}}"
                             id="avatarImage"
                             class="img-fluid" alt="">
                        <div>
                            <input type="file" id="changePhoto">
                            <img src="/images/personal-camera.png" alt="">
                        </div>
                    </div>
                    <div class="personal-head-name d-flex flex-column align-items-start">
                        <label for="userNameSet">{{__('language.yourName')}}</label>
                        <input type="text" id="userNameSet" value="{{auth()->user()->name??''}}">
                    </div>
                    <div class="personal-head-gender d-flex flex-column align-items-start">
                        <label for="userGenderSet">{{__('language.yourGender')}}</label>
                        <select name="gender" id="userGenderSet">
                            <option @if(auth()->user()->gender==='female') selected @endif value="female">
                                {{__('language.male')}}
                            </option>
                            <option @if(auth()->user()->gender==='male') selected @endif value="male">
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
                            <div class="ogp-monitor">
                                <div class="calories-count">
                                    <span> {{__('language.totalCC')}}:</span>
                                    <h6>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_4022:9010)">
                                                <path d="M9.49999 0C6.09022 1.96464 6.49999 7.5 6.49999 7.5C6.49999 7.5 5 6.99999 5 4.75001C3.21041 5.78772 2 7.78228 2 10C2 13.3137 4.68629 16 8.00001 16C11.3137 16 14 13.3137 14 10C14 5.12501 9.49999 4.125 9.49999 0V0ZM8.52704 13.9326C7.32136 14.2332 6.10022 13.4995 5.79955 12.2937C5.49895 11.0881 6.23265 9.86686 7.4384 9.56626C10.3493 8.84049 10.7141 7.20358 10.7141 7.20358C10.7141 7.20358 12.1657 13.0254 8.52704 13.9326Z" fill="#111111"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_4022:9010">
                                                    <rect width="16" height="16" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        {{$calories}} ccal</h6>
                                </div>
                                <canvas id="profileChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 p-0 personal-numbers d-flex justify-content-around flex-wrap">
                    @foreach($firstSteps as $firstStep)
                        <div class="col-2 item">
                            <h1>{{$firstStep->number}}</h1>
                            <p>{{App::getlocale()==='ru'?$firstStep->text_ru:(App::getlocale()==='en'?$firstStep->text_en:$firstStep->text_blr)}}</p>
                        </div>
                    @endforeach
                    <div class="col-12 item">
                        <h5>{{__('language.projectVideo')}}</h5>
                    </div>
                </div>
                <div class="col-12 p-0 personal-video d-flex justify-content-around flex-wrap">
                    <div class="col-12 item">
                        <h2>{{__('language.welcome')}}</h2>
                    </div>
                    <div class="col-12 item">
                        <div id="player"></div>
                        <div class="position-absolute">
                            <img class="playButton w-100" alt="playButton" id="playButton" src="/images/playButton.png"
                                 data-link="{{$projectVideo}}">
                        </div>
                        <img class="preview"
                             src="//img.youtube.com/vi/{{$projectVideo}}/maxresdefault.jpg"
                             alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{asset('/js/front/profileChart.js')}}" defer></script>
@endsection
