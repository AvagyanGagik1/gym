@extends('layouts.front.index')
@section('content')
    <section class="content subscribe-content">
        <div class="d-flex flex-column  ">
            <div class="col-xl-10 col-12 d-flg-l col-12ex justify-content-center flex-wrap m-auto">
                <div class="col-12 p-0 d-flex align-items-center subscribe-header">
                    <h2>Мои подписки</h2>
                </div>
                <div class="col-12 d-flex align-items-center subscribe-transform justify-content-between">
                    <h3>
                        4 Недельная Трансформация
                    </h3>
                    <div class="subscribe-transform-days">
                        <p>Осталось дней:<span>323/365</span></p>
                        <div></div>
                    </div>
                    <button>
                        ПРОДЛИТЬ ПОДПИСКУ
                    </button>
                </div>
                <div class="col-12 d-flex align-items-center subscribe-new-plan flex-wrap">
                    <div class="w-100 subscribe-new-plan-header">
                        <h2>
                            Выбрать новый план подписок
                        </h2>
                    </div>
                    <div class="subscribe-new-plan-price d-flex col-12 p-0 justify-content-center flex-wrap">
                        <div class="col-lg-6 col-12">
                            <h4>
                                4 Недельная Трансформация
                            </h4>
                            <p>340 <span>грн</span></p>
                            <button>
                                ПРОДЛИТЬ
                            </button>
                        </div>
                        <div class="col-lg-6 col-12">
                            <h4>
                                4 Недельная Трансформация
                            </h4>
                            <p>340 <span>грн</span></p>
                            <button>
                                ПРОДЛИТЬ
                            </button>
                        </div>
                        <div class="col-lg-6 col-12">
                            <h4>
                                4 Недельная Трансформация
                            </h4>
                            <p>340 <span>грн</span></p>
                            <button>
                                ПРОДЛИТЬ
                            </button>
                        </div>
                        <div class="col-lg-6 col-12">
                            <h4>
                                4 Недельная Трансформация
                            </h4>
                            <p>340 <span>грн</span></p>
                            <button>
                                ПРОДЛИТЬ
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
