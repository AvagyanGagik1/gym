@extends('layouts.front.profile')
@section('content')
    <section class="content food-content">
        <div class="d-flex flex-column">
            <div class="col-xl-10 col-12 d-flex justify-content-center flex-wrap m-auto">
                <div class="col-12 p-0 d-flex align-items-center food-header subscribe-header">
                    <h2>{{__('language.food')}}</h2>
                </div>
                <div class="col-12 d-flex align-items-center justify-content-between food-filter">
                    <form action="{{route('choose.diet')}}" class="d-flex" method="post">
                        @csrf
                    <div class="food-select d-flex">
                        <div>
                            <label for="gender">{{__('language.gender')}}</label>
                            <select name="" id="gender" class="food-select-item">
                                <option @if(auth()->user()->gender === 'male') selected @endif value="male">{{__('language.male')}}
                                </option>
                                <option @if(auth()->user()->gender === 'female') selected @endif value="female">
                                    {{__('language.female')}}
                                </option>
                            </select>
                        </div>
                        <div>
                            <label for="limitation">{{__('language.diet')}}</label>
                            <select name="limitation" id="limitation" class="food-select-item">
                                <option @if(count($dietRestriction)) selected @endif disabled value="null">--{{__('language.diet')}}--
                                </option>
                                @foreach($dietRestriction as $diet)
                                    <option value="{{$diet->id}}">{{App::getlocale()==='ru'?$diet->name_ru:(App::getlocale()==='en'?$diet->name_en:$diet->name_blr)}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="purpose">{{__('language.purpose')}}</label>
                            <select name="purpose" id="purpose" class="food-select-item">
                                <option @if(count($purposeOfNutrition)) selected @endif disabled value="null">--{{__('language.purpose')}}--
                                </option>

                                @foreach($purposeOfNutrition as $purpose)
                                    <option value="{{$purpose->id}}">{{App::getlocale()==='ru'?$purpose->name_ru:(App::getlocale()==='en'?$purpose->name_en:$purpose->name_blr)}}</option>
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
                                <p>Выберите только одно блюдо в каждой категории</p>
                                <div>
                                    <img src="/images/pdf.png" alt="">
                                    <a href="">Скачать рекомендации по питанию</a>
                                </div>
                            </div>
                        @endif
                        <div class="col-12 d-flex justify-content-between p-0 food-category-content-items owl-carousel-food"
                             id="food-owl-carousel">
                            @foreach($category->dishes as $dish)
                                <div class="col-4 food-category-content-item">
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
                                            <li>{{__('language.carboHydrates')}} <span>{{$dish->carbohydrates}}г</span></li>
                                        </ul>
                                    </div>
                                    @if(false)
                                        <button class="food-category-content-item-button ">
                                            <div class="selected">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5.27594 12.5205L1.87177 9.1164L0 10.9882L4.49225 15.4804L4.4974 15.4752L5.31751 16.2953L18 3.61273L16.0919 1.70459L5.27594 12.5205Z"
                                                        fill="#020202"/>
                                                </svg>

                                            </div>
                                            {{__('language.addTo')}} {{App::getlocale()==='ru'?$category->name_ru:(App::getlocale()==='en'?$category->name_en:$category->name_blr)}}
                                        </button>
                                    @else
                                        <button class="food-category-content-item-button">
                                            <div>
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16 8H10V2H8V8H2V10H8V16H10V10H16V8Z" fill="white"/>
                                                </svg>

                                            </div>
                                            {{__('language.addTo')}} {{App::getlocale()==='ru'?$category->name_ru:(App::getlocale()==='en'?$category->name_en:$category->name_blr)}}
                                        </button>
                                    @endif
                                </div>
                            @endforeach
{{--                            <div class="col-4 food-category-content-item">--}}
{{--                                <div class="food-category-content-item-img">--}}
{{--                                    <img src="/images/food-item.png" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="food-category-content-item-heads">--}}
{{--                                    <h3>Куриная грудка "под шубой",в духовке</h3>--}}
{{--                                    <h4>Куриные грудки, Чеснок, Растительное масло, Паприка, Сольпо вкусу, Специи--}}
{{--                                        сухие </h4>--}}
{{--                                </div>--}}
{{--                                <div class="food-category-content-item-content">--}}
{{--                                    <ul>--}}
{{--                                        <li>Калории <span>121323 ccal</span></li>--}}
{{--                                        <li>Белки <span>30г</span></li>--}}
{{--                                        <li>Жиры <span>50г</span></li>--}}
{{--                                        <li>Углеводы <span>80г</span></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                <button class="food-category-content-item-button">--}}
{{--                                    <div>--}}
{{--                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"--}}
{{--                                             xmlns="http://www.w3.org/2000/svg">--}}
{{--                                            <path d="M16 8H10V2H8V8H2V10H8V16H10V10H16V8Z" fill="white"/>--}}
{{--                                        </svg>--}}

{{--                                    </div>--}}
{{--                                    ДОБАВИТЬ НА ЗАВТРОК--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                            <div class="col-4 food-category-content-item">--}}
{{--                                <div class="food-category-content-item-img">--}}
{{--                                    <img src="/images/food-item.png" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="food-category-content-item-heads">--}}
{{--                                    <h3>Куриная грудка "под шубой",в духовке</h3>--}}
{{--                                    <h4>Куриные грудки, Чеснок, Растительное масло, Паприка, Сольпо вкусу, Специи--}}
{{--                                        сухие </h4>--}}
{{--                                </div>--}}
{{--                                <div class="food-category-content-item-content">--}}
{{--                                    <ul>--}}
{{--                                        <li>Калории <span>121323 ccal</span></li>--}}
{{--                                        <li>Белки <span>30г</span></li>--}}
{{--                                        <li>Жиры <span>50г</span></li>--}}
{{--                                        <li>Углеводы <span>80г</span></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                <button class="food-category-content-item-button">--}}
{{--                                    <div>--}}
{{--                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"--}}
{{--                                             xmlns="http://www.w3.org/2000/svg">--}}
{{--                                            <path d="M16 8H10V2H8V8H2V10H8V16H10V10H16V8Z" fill="white"/>--}}
{{--                                        </svg>--}}

{{--                                    </div>--}}
{{--                                    ДОБАВИТЬ НА ЗАВТРОК--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                            <div class="col-4 food-category-content-item">--}}
{{--                                <div class="food-category-content-item-img">--}}
{{--                                    <img src="/images/food-item.png" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="food-category-content-item-heads">--}}
{{--                                    <h3>Куриная грудка "под шубой",в духовке</h3>--}}
{{--                                    <h4>Куриные грудки, Чеснок, Растительное масло, Паприка, Сольпо вкусу, Специи--}}
{{--                                        сухие </h4>--}}
{{--                                </div>--}}
{{--                                <div class="food-category-content-item-content">--}}
{{--                                    <ul>--}}
{{--                                        <li>Калории <span>121323 ccal</span></li>--}}
{{--                                        <li>Белки <span>30г</span></li>--}}
{{--                                        <li>Жиры <span>50г</span></li>--}}
{{--                                        <li>Углеводы <span>80г</span></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                <button class="food-category-content-item-button">--}}
{{--                                    <div>--}}
{{--                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"--}}
{{--                                             xmlns="http://www.w3.org/2000/svg">--}}
{{--                                            <path d="M16 8H10V2H8V8H2V10H8V16H10V10H16V8Z" fill="white"/>--}}
{{--                                        </svg>--}}


{{--                                    </div>--}}
{{--                                    ДОБАВИТЬ НА ЗАВТРОК--}}
{{--                                </button>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                @endforeach
                <div class="col-12 p-0 food-ready">
                    <p>
                        {{__('language.dailyCalories')}}: +100500 ccal
                    </p>
                    <button>
                        {{__('language.ready')}}
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection
