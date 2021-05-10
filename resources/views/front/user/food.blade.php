@extends('layouts.front.index')
@section('content')
    <section class="content food-content">
        <div class="d-flex flex-column">
            <div class="col-10 d-flex justify-content-center flex-wrap m-auto">
                <div class="col-12 p-0 d-flex align-items-center food-header">
                    <h2>Питание</h2>
                </div>
                <div class="col-12 d-flex align-items-center justify-content-between food-filter">
                    <div class="food-select d-flex">
                        <div>
                            <label for="gender">Пол</label>
                            <select name="" id="gender" class="food-select-item">
                                <option value="">Мужской</option>
                            </select>
                        </div>
                        <div>
                            <label for="limitation">Ограничения по питанию</label>
                            <select name="" id="limitation" class="food-select-item">
                                <option value="">Непереносимость лактозы</option>
                            </select>
                        </div>
                        <div>
                            <label for="purpose">Цель питания</label>
                            <select name="" id="purpose" class="food-select-item">
                                <option value="">Набрать мышечную массу</option>
                            </select>
                        </div>
                    </div>
                    <button class="food-select-button">
                        ПОДОБРАТЬ РАЦИОН
                    </button>
                </div>

                <div class="col-12 p-0 d-flex align-items-center food-category-content flex-wrap">
                    <div class="col-12 p-0 food-category-content-header">
                        <h2>Завтрак</h2>
                    </div>
                    <div class="col-12 d-flex justify-content-between p-0 food-category-content-alert">
                        <p>Выберите только одно блюдо в каждой категории</p>
                        <div>
                            <img src="/images/pdf.png" alt="">
                            <a href="">Скачать рекомендации по питанию</a>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-between p-0 food-category-content-items">
                        <div class="col-4 food-category-content-item">
                            <div class="food-category-content-item-img d-flex justify-content-center">
                                <img src="/images/food-item.png" alt="">
                            </div>
                            <div class="food-category-content-item-heads">
                                <h3>Куриная грудка "под шубой",в духовке</h3>
                                <h4>Куриные грудки, Чеснок, Растительное масло, Паприка, Сольпо вкусу, Специи сухие </h4>
                            </div>
                            <div class="food-category-content-item-content">
                                <ul>
                                    <li>Калории <span>121323 ccal</span></li>
                                    <li>Белки <span>30г</span></li>
                                    <li>Жиры <span>50г</span></li>
                                    <li>Углеводы <span>80г</span></li>
                                </ul>
                            </div>
                            <button class="food-category-content-item-button ">
                                <div class="selected">
                                    <img src="/images/btntick.png" alt="">
                                </div>
                                ДОБАВИТЬ НА ЗАВТРОК
                            </button>
                        </div>
                        <div class="col-4 food-category-content-item">
                            <div class="food-category-content-item-img">
                                <img src="/images/food-item.png" alt="">
                            </div>
                            <div class="food-category-content-item-heads">
                                <h3>Куриная грудка "под шубой",в духовке</h3>
                                <h4>Куриные грудки, Чеснок, Растительное масло, Паприка, Сольпо вкусу, Специи сухие </h4>
                            </div>
                            <div class="food-category-content-item-content">
                                <ul>
                                    <li>Калории <span>121323 ccal</span></li>
                                    <li>Белки <span>30г</span></li>
                                    <li>Жиры <span>50г</span></li>
                                    <li>Углеводы <span>80г</span></li>
                                </ul>
                            </div>
                            <button class="food-category-content-item-button">
                                <div>
                                    <img src="/images/btnplus.png" alt="">
                                </div>
                                ДОБАВИТЬ НА ЗАВТРОК
                            </button>
                        </div>
                        <div class="col-4 food-category-content-item">
                            <div class="food-category-content-item-img">
                                <img src="/images/food-item.png" alt="">
                            </div>
                            <div class="food-category-content-item-heads">
                                <h3>Куриная грудка "под шубой",в духовке</h3>
                                <h4>Куриные грудки, Чеснок, Растительное масло, Паприка, Сольпо вкусу, Специи сухие </h4>
                            </div>
                            <div class="food-category-content-item-content">
                                <ul>
                                    <li>Калории <span>121323 ccal</span></li>
                                    <li>Белки <span>30г</span></li>
                                    <li>Жиры <span>50г</span></li>
                                    <li>Углеводы <span>80г</span></li>
                                </ul>
                            </div>
                            <button class="food-category-content-item-button">
                                <div>
                                    <img src="/images/btnplus.png" alt="">
                                </div>
                                ДОБАВИТЬ НА ЗАВТРОК
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-12 p-0 d-flex align-items-center food-category-content flex-wrap">
                    <div class="col-12 p-0 food-category-content-header">
                        <h2>Завтрак</h2>
                    </div>
                    <div class="col-12 d-flex justify-content-between p-0 food-category-content-items">
                        <div class="col-4 food-category-content-item">
                            <div class="food-category-content-item-img d-flex justify-content-center">
                                <img src="/images/food-item.png" alt="">
                            </div>
                            <div class="food-category-content-item-heads">
                                <h3>Куриная грудка "под шубой",в духовке</h3>
                                <h4>Куриные грудки, Чеснок, Растительное масло, Паприка, Сольпо вкусу, Специи сухие </h4>
                            </div>
                            <div class="food-category-content-item-content">
                                <ul>
                                    <li>Калории <span>121323 ccal</span></li>
                                    <li>Белки <span>30г</span></li>
                                    <li>Жиры <span>50г</span></li>
                                    <li>Углеводы <span>80г</span></li>
                                </ul>
                            </div>
                            <button class="food-category-content-item-button ">
                                <div class="selected">
                                    <img src="/images/btntick.png" alt="">
                                </div>
                                ДОБАВИТЬ НА ЗАВТРОК
                            </button>
                        </div>
                        <div class="col-4 food-category-content-item">
                            <div class="food-category-content-item-img">
                                <img src="/images/food-item.png" alt="">
                            </div>
                            <div class="food-category-content-item-heads">
                                <h3>Куриная грудка "под шубой",в духовке</h3>
                                <h4>Куриные грудки, Чеснок, Растительное масло, Паприка, Сольпо вкусу, Специи сухие </h4>
                            </div>
                            <div class="food-category-content-item-content">
                                <ul>
                                    <li>Калории <span>121323 ccal</span></li>
                                    <li>Белки <span>30г</span></li>
                                    <li>Жиры <span>50г</span></li>
                                    <li>Углеводы <span>80г</span></li>
                                </ul>
                            </div>
                            <button class="food-category-content-item-button">
                                <div>
                                    <img src="/images/btnplus.png" alt="">
                                </div>
                                ДОБАВИТЬ НА ЗАВТРОК
                            </button>
                        </div>
                        <div class="col-4 food-category-content-item">
                            <div class="food-category-content-item-img">
                                <img src="/images/food-item.png" alt="">
                            </div>
                            <div class="food-category-content-item-heads">
                                <h3>Куриная грудка "под шубой",в духовке</h3>
                                <h4>Куриные грудки, Чеснок, Растительное масло, Паприка, Сольпо вкусу, Специи сухие </h4>
                            </div>
                            <div class="food-category-content-item-content">
                                <ul>
                                    <li>Калории <span>121323 ccal</span></li>
                                    <li>Белки <span>30г</span></li>
                                    <li>Жиры <span>50г</span></li>
                                    <li>Углеводы <span>80г</span></li>
                                </ul>
                            </div>
                            <button class="food-category-content-item-button">
                                <div>
                                    <img src="/images/btnplus.png" alt="">
                                </div>
                                ДОБАВИТЬ НА ЗАВТРОК
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-12 p-0 food-ready">
                    <p>
                        Итого за день калорий: +100500 ccal
                    </p>
                    <button>
                        ГОТОВО
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection
