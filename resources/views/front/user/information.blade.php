@extends('layouts.front.index')
@section('content')
    <section class="content information-content">
        <div class="d-flex flex-column  ">
            <div class="col-10 d-flex justify-content-center flex-wrap m-auto">
                <div class="col-12 p-0 d-flex align-items-center subscribe-header">
                    <h2>Личная информация</h2>
                </div>
                <div class="col-12 p-0 personal-head">
                    <div class="personal-head-img">
                        <img src="/images/personal.png" alt="">
                        <button>
                            <img src="/images/personal-camera.png" alt="">
                        </button>
                    </div>
                    <div class="personal-head-name d-flex flex-column align-items-start">
                        <label for="name">Ваше имя</label>
                        <input type="text" id="name" value="Алёна Кнопочкина">
                    </div>
                    <div class="personal-head-gender d-flex flex-column align-items-start">
                        <label for="">Ваш пол</label>
                        <select name="gender" id="">
                            <option id="gender" value="">Женский</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 p-0 personal-params d-flex">
                    <div class="col-4 p-0 d-flex flex-wrap">
                        <div class="col-12 personal-params-header">
                            <h3>Параметры</h3>
                        </div>
                        <div class="col-5 personal-params-item">
                            <p>
                                Вес
                            </p>
                            <h6>
                                82.1
                            </h6>
                            <div class="line">
                                <img src="/images/polygon.png" alt="">
                            </div>
                            <div>
                                <button>-</button><button>+</button>
                            </div>
                        </div>
                        <div class="col-5 personal-params-item">
                            <p>
                                Рост
                            </p>
                            <h6>
                                178
                            </h6>
                            <div class="line">
                                <img src="/images/polygon.png" alt="">
                            </div>
                            <div>
                                <button>-</button><button>+</button>
                            </div>
                        </div>
                        <div class="col-5 personal-params-item">
                            <p>
                                Возраст
                            </p>
                            <h6>
                                24
                            </h6>
                            <div class="line">
                                <img src="/images/polygon.png" alt="">
                            </div>
                            <div>
                                <button>-</button><button>+</button>
                            </div>
                        </div>
                        <div class="col-5 personal-params-item-update">
                            <div>
                                <h2>Вес: 82.1 кг</h2>
                                <p>02.09.2021</p>
                            </div>
                            <div>
                                <button>
                                    ОБНОВИТЬ
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 p-0">
                        <div class="col-12 personal-params-header">
                            <h3>График потери веса</h3>
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
                        <h5>ПОСМОТРИТЕ РОЛИК О НАШЕМ ПРОЕКТЕ</h5>
                    </div>
                </div>
                <div class="col-12 p-0 personal-video d-flex justify-content-around flex-wrap">
                    <div class="col-12 item">
                        <h2>Мы рады приветствовать вас в нашем проекте</h2>
                    </div>
                    <div class="col-12 item">
                        <img src="/images/informationVideo.png" alt="">
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
