@extends('layouts.front.profile')
@section('content')
    <section class="content food-content">
        <div class="d-flex flex-column">
            <div class="col-xl-10 col-12 d-flex justify-content-center flex-wrap m-auto">
                <div class="col-12 p-0 d-flex align-items-center food-header subscribe-header">
                    <h2>{{__('language.food')}}</h2>
                </div>
                <div class="col-12 d-flex align-items-center justify-content-between food-filter">
                    <form action="{{route('choose.diet')}}" class="food-select d-flex w-100 ogp-food-filter" method="post">
                        @csrf
                        <div class="food-select selects d-flex ogp-food-filter-selects">
                            <div>
                                <label for="gender">{{__('language.gender')}}</label>
                                <select name="gender" id="gender" class="food-select-item">
                                    <option
                                            value="male">{{__('language.male')}}
                                    </option>
                                    <option   value="female">
                                        {{__('language.female')}}
                                    </option>
                                </select>
                            </div>
                            <div>
                                <label for="limitation">{{__('language.diet')}}</label>
                                <select name="diet_id" id="limitation" class="food-select-item">
                                    <option @if(!count($dietRestrictions)) selected @endif disabled value="null">
                                        --{{__('language.diet')}}--
                                    </option>
                                    @foreach($dietRestrictions as $diet)
                                        <option
                                            value="{{$diet->id}}" @if(optional($dietRestriction)->id === $diet->id) selected @endif >{{App::getlocale()==='ru'?$diet->name_ru:(App::getlocale()==='en'?$diet->name_en:$diet->name_blr)}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="purpose">{{__('language.purpose')}}</label>
                                <select name="purpose_id" id="purpose" class="food-select-item">
                                    <option @if(!count($purposeOfNutritions)) selected @endif disabled value="null">
                                        --{{__('language.purpose')}}--
                                    </option>

                                    @foreach($purposeOfNutritions as $purpose)
                                        <option
                                            value="{{$purpose->id}}" @if(optional($purposeOfNutrition)->id === $purpose->id) selected @endif >{{App::getlocale()==='ru'?$purpose->name_ru:(App::getlocale()==='en'?$purpose->name_en:$purpose->name_blr)}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button class="food-select-button" type="submit">
                            {{__('language.choseDiet')}}
                        </button>
                    </form>
                </div>
                @foreach($foodCategory as $key=>$category)
                    <div class="col-12 p-0 d-flex align-items-center food-category-content flex-wrap">
                        <div class="col-12 p-0 food-category-content-header">
                            <h2>{{App::getlocale()==='ru'?$category->name_ru:(App::getlocale()==='en'?$category->name_en:$category->name_blr)}}</h2>
                        </div>
                        @if($key === 0)
                            <div class="col-12 d-flex justify-content-between p-0 food-category-content-alert">
                                <p>{{__('language.chooseOnly')}}</p>
                                <div>
                                    <img src="/images/pdf.png" alt="">
                                    <a href="" download>{{__('language.downloadNutritional')}}</a>
                                </div>
                            </div>
                        @endif
                        <div
                            class="col-12 d-flex justify-content-between p-0 food-category-content-items owl-carousel-food owl-theme">
                            @foreach($category->dishes as $dish)
                                <div class=" food-category-content-item">
                                    <div class="food-category-content-item-img d-flex justify-content-center">
                                        <img src="{{$dish->image}}" alt="">
                                    </div>
                                    <div class="food-category-content-item-heads">
                                        <h3>{{$dish->name}}</h3>
                                        <h4>{!! $dish->description !!} </h4>
                                    </div>
                                    <div class="food-category-content-item-content">
                                        <ul>
                                            <li>{{__('language.calories')}} <span>{{$dish->calories}} ccal</span></li>
                                            <li>{{__('language.protein')}} <span>{{$dish->protein}}г</span></li>
                                            <li>{{__('language.fats')}} <span>{{$dish->fat}}г</span></li>
                                            <li>{{__('language.carboHydrates')}} <span>{{$dish->carbohydrates}}г</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <button class="food-category-content-item-button @if(!$dishes->contains('id',$dish->id)) d-none @endif checked-food-button"
                                            data-category="{{$category->id}}" data-dish="{{$dish->id}}">
                                        <span class="selected">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.27594 12.5205L1.87177 9.1164L0 10.9882L4.49225 15.4804L4.4974 15.4752L5.31751 16.2953L18 3.61273L16.0919 1.70459L5.27594 12.5205Z"
                                                    fill="#020202"/>
                                            </svg>

                                        </span>
                                        {{__('language.addTo')}} {{App::getlocale()==='ru'?$category->name_ru:(App::getlocale()==='en'?$category->name_en:$category->name_blr)}}
                                    </button>
                                    <button class="food-category-content-item-button @if($dishes->contains('id',$dish->id)) d-none @endif un-checked-food-button"
                                            data-category="{{$category->id}}" data-dish="{{$dish->id}}">
                                        <span>
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16 8H10V2H8V8H2V10H8V16H10V10H16V8Z" fill="white"/>
                                            </svg>

                                        </span>
                                        {{__('language.addTo')}} {{App::getlocale()==='ru'?$category->name_ru:(App::getlocale()==='en'?$category->name_en:$category->name_blr)}}
                                    </button>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
                <div class="col-12 p-0 food-ready">
                    <p>
                        {{__('language.dailyCalories')}}: <span id="calories">{{$calories}}</span>
                    </p>
                    <form action="{{route('choose.dishes')}}" id="chooseDishes" method="post">
                        @csrf
                        <button type="submit">
                            {{__('language.ready')}}
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection
