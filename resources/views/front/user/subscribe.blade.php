@extends('layouts.front.profile')
@section('content')
    <section class="content subscribe-content">
        <div class="d-flex flex-column  ">
            <div class="col-xl-11 col-12 d-flg-l col-12ex justify-content-center flex-wrap m-auto">
                <div class="col-12 p-0 d-flex align-items-center subscribe-header">
                    <h2>{{__('language.mySub')}}</h2>
                </div>
                @foreach($profileSubscription as $subscription)
                    <div class="col-12 d-flex align-items-center subscribe-transform justify-content-between">
                        <h3>
                            {{$subscription->duration_week}} {{App::getlocale()==='ru'?$subscription->name_ru:(App::getlocale()==='en'?$subscription->name_en:$subscription->name_blr)}}
                        </h3>
                        <div class="subscribe-transform-days">
                            <p>{{__('language.days')}}
                                :<span>{{$subscription->dayLeft}}/{{$subscription->duration_subscribe}}</span></p>
                            <div></div>
                        </div>
                        <button>
                            {{__('language.reSub')}}
                        </button>
                    </div>
                @endforeach
                <div class="col-12 d-flex align-items-center subscribe-new-plan flex-wrap">
                    <div class="w-100 subscribe-new-plan-header">
                        <h2>
                            {{__('language.newSub')}}
                        </h2>
                    </div>
                    <div class="subscribe-new-plan-price d-flex col-12 p-0 justify-content-center flex-wrap">
                        @foreach($subscriptions as $subscription)
                            <div class="col-lg-6 col-12" style="background: linear-gradient(90deg, #000000 0%, rgba(0, 0, 0, 0) 75.78%), url('{{$subscription->image}}') no-repeat center;
">
                                <h4>
                                    {{$subscription->duration_program}} Недельная Трансформация
                                </h4>
                                <p>{{$subscription->price}} <span>грн</span></p>
                                <a href="{{route('profile.renew',$subscription->id)}}">
                                    ПРОДЛИТЬ
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
