@extends('layouts.front.profile')
@section('content')
    <section class="content food-content">
        <div class="d-flex flex-column">
            <div class="col-xl-10 col-12 d-flex justify-content-center flex-wrap m-auto">
                <div class="col-12 p-0 d-flex align-items-center food-header subscribe-header">
                    <h2>{{__('language.food')}}</h2>
                </div>
                <div class="col-12 d-flex align-items-center justify-content-between food-filter">
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
                            <select name="" id="limitation" class="food-select-item">
                                <option @if(count($dietRestriction)) selected @endif disabled value="null">--Ограничения
                                    по питанию--
                                </option>
                                @foreach($dietRestriction as $diet)

                                    <option value="{{$diet->id}}">{{$diet->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="purpose">{{__('language.purpose')}}</label>
                            <select name="" id="purpose" class="food-select-item">
                                <option @if(count($purposeOfNutrition)) selected @endif disabled value="null">--Цель
                                    питания --
                                </option>

                                @foreach($purposeOfNutrition as $purpose)
                                    <option value="{{$purpose->id}}">{{$purpose->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button class="food-select-button">
                        {{__('language.choseDiet')}}
                    </button>
                </div>
                @foreach($foodCategory as $key=>$category)
                    <div class="col-12 p-0 d-flex align-items-center food-category-content flex-wrap">
                        <div class="col-12 p-0 food-category-content-header">
                            <h2>{{$category->name}}</h2>
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
                        <div class="col-12 d-flex justify-content-between p-0 food-category-content-items owl-carousel"
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
                                            <li>Калории <span>{{$dish->calories}} ccal</span></li>
                                            <li>Белки <span>{{$dish->protein}}г</span></li>
                                            <li>Жиры <span>{{$dish->fat}}г</span></li>
                                            <li>Углеводы <span>{{$dish->carbohydrates}}г</span></li>
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
                                            ДОБАВИТЬ НА ЗАВТРОК
                                        </button>
                                    @else
                                        <button class="food-category-content-item-button">
                                            <div>
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16 8H10V2H8V8H2V10H8V16H10V10H16V8Z" fill="white"/>
                                                </svg>

                                            </div>
                                            ДОБАВИТЬ НА ЗАВТРОК
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
