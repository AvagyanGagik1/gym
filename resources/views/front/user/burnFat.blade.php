@extends('layouts.front.index')
@section('content')
    <section class="content burn-content">
        <div class="d-flex flex-column">
            <div class="col-10 d-flex justify-content-center flex-wrap m-auto">
                <div class="col-12 d-flex align-items-center justify-content-between">
                    <h2>Утреннее кардио 2. Сожги весь жир!</h2>
                    <img src="images/cardioHome.png" alt="">
                </div>
                <div class="col-12 d-flex justify-content-between align-items-center content-user">
                    <div class="d-flex align-items-center content-user">
                        <div  class="content-user-image">
                            <img src="images/roundUser.png" alt="">
                        </div>
                        <div class="d-flex flex-column ">
                            <p>Тренер</p>
                            <h1>Лера Алёшкина</h1>
                        </div>
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="d-flex justify-content-center align-items-center content-user">
                            <div  class="content-user-image-small">
                                <img src="images/graphRed.png" alt="">
                            </div>
                            <div class="d-flex flex-column ">
                                <p>Интенсивность</p>
                                <h1>Низкая</h1>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center align-items-center content-user">
                            <div  class="content-user-image-small">
                                <img src="images/UserRed.png" alt="">
                            </div>
                            <div class="d-flex flex-column ">
                                <p>Подписано</p>
                                <h1>2 123</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 d-flex justify-content-between align-items-center content-user-hide">
                    <button>
                        Скрыть описание
                        <img src="images/vectorTop.png" alt="">
                    </button>
                </div>

                <div class="col-12 d-flex justify-content-between
            content-user-preview">
                    <div class="col-5 pl-0">
                        <img src="images/previewPlaceholder.png" alt="">
                    </div>
                    <div class="col-7 pr-0">
                        <p>
                            Хотите похудеть? Привести свое тело в форму? Сжечь лишние калории?
                            Поставьте перед собой цель и посмотрите, как Gym project может помочь вам преобразовать вашу жизнь. Получите онлайн-доступ ко всем программам тренировок для любого телосложения и любого уровня подготовки.
                            Хотите похудеть? Привести свое тело в форму? Сжечь лишние калории? Поставьте перед собой цель и посмотрите, как Gym project может помочь вам преобразовать вашу жизнь. Получите онлайн-доступ ко всем программам тренировок для любого телосложения и любого уровня подготовки.
                        </p>
                    </div>
                </div>

                <div class="col-12 d-flex justify-content-between
            align-items-start
            content-user-video
             p-0">
                    <div class="col-7 pl-0 ">
                        <div class=" col-12 p-0 d-flex align-items-center justify-content-center">
                            <img src="images/resizemeyoutube.png" class="w-100" alt="">
                            <div class="position-absolute">
                                <img src="images/playButton.png" alt="">
                            </div>
                        </div>
                        <div class="col-12 p-0 d-flex justify-content-center youtube-header">
                            <div class="col-8 p-0">
                                <h3>
                                    Лекция 1. Понятие рационального питания и здоровья
                                </h3>
                            </div>
                            <div class="col-4  p-0 d-flex justify-content-end">
                                <div class="youtube-image-ccal">
                                    <div>
                                        <img src="images/fire3.png" alt="">
                                    </div>
                                    <p>2 145 ccal</p>
                                </div>
                                <div class="youtube-image-ccal">
                                    <div>
                                        <img src="images/like2.png" alt="">
                                    </div>
                                    <p>2 145</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center youtube-save">
                            <div class="col-3 p-0 d-flex justify-content-center align-items-center">
                                <button >ГОТОВО</button>
                            </div>
                            <div class="col-9  p-0 d-flex justify-content-end">
                                <h2>
                                    После выполнения тренировки нажмите кнопку “Готово” что бы сохранить свой прогресс
                                </h2>
                            </div>
                        </div>
                        <div class="col-12 d-flex p-0 flex-wrap youtube-comment-write">
                            <h2>Оставить отзыв</h2>
                            <textarea name="" placeholder="Комментарий"></textarea>
                            <button>
                                отправить отзыв
                            </button>
                        </div>
                        <div class="col-12 d-flex p-0 flex-wrap youtube-comment">
                            <h1>Отзывы <span>(13)</span></h1>

                            <div class="col-12 p-0">
                                <div class="col-12 p-0 d-flex align-items-center">
                                    <div>
                                        <img src="images/previewPlaceholder.png" alt="">
                                    </div>
                                    <h3>Юлия Стриж</h3>
                                </div>
                                <p>Хотите похудеть? Привести свое тело в форму? Сжечь лишние калории? Поставьте перед собой цель и посмотрите, как Gym project может помочь вам преобразовать вашу жизнь. Получите онлайн-доступ ко всем программам тренировок для любого телосложения и любого уровня подготовки.</p>
                                <a href="">Ответить</a>
                            </div>
                            <div class="col-12 p-0 answer">
                                <div class="col-12 p-0 d-flex align-items-center">
                                    <div>
                                        <img src="images/previewPlaceholder.png" alt="">
                                    </div>
                                    <h3>Юлия Стриж</h3>
                                </div>
                                <p>Хотите похудеть? Привести свое тело в форму? Сжечь лишние калории? Поставьте перед собой цель и посмотрите, как Gym project может помочь вам преобразовать вашу жизнь. Получите онлайн-доступ ко всем программам тренировок для любого телосложения и любого уровня подготовки.</p>
                                <a href="">Ответить</a>
                            </div>

                            <button >
                                отправить отзыв
                            </button>
                        </div>
                    </div>
                    <div class="col-5 ">
                        <div class="col-12 d-flex content-user-video-item">
                            <div class="col-6 pl-0">
                                <img src="images/previewPlaceholder.png" class="w-100" alt="">
                            </div>
                            <div class="col-6 pr-0">
                                <h2>
                                    Лекция 1. Понятие рационального питания и здоровья
                                </h2>
                            </div>
                        </div>
                        <div class="col-12 d-flex content-user-video-item">
                            <div class="col-6 pl-0">
                                <img src="images/previewPlaceholder.png" class="w-100" alt="">
                            </div>
                            <div class="col-6 pr-0">
                                <h2>
                                    Лекция 1. Понятие рационального питания и здоровья
                                </h2>
                            </div>
                        </div>
                        <div class="col-12 d-flex content-user-video-item">
                            <div class="col-6 pl-0">
                                <img src="images/previewPlaceholder.png" class="w-100" alt="">
                            </div>
                            <div class="col-6 pr-0">
                                <h2>
                                    Лекция 1. Понятие рационального питания и здоровья
                                </h2>
                            </div>
                        </div>
                        <div class="col-12 d-flex content-user-video-item">
                            <div class="col-6 pl-0">
                                <img src="images/previewPlaceholder.png" class="w-100" alt="">
                            </div>
                            <div class="col-6 pr-0">
                                <h2>
                                    Лекция 1. Понятие рационального питания и здоровья
                                </h2>
                            </div>
                        </div>
                        <div class="col-12 d-flex content-user-video-item">
                            <div class="col-6 pl-0">
                                <img src="images/previewPlaceholder.png" class="w-100" alt="">
                            </div>
                            <div class="col-6 pr-0">
                                <h2>
                                    Лекция 1. Понятие рационального питания и здоровья
                                </h2>
                            </div>
                        </div>
                        <div class="col-12 d-flex content-user-video-item">
                            <div class="col-6 pl-0">
                                <img src="images/previewPlaceholder.png" class="w-100" alt="">
                            </div>
                            <div class="col-6 pr-0">
                                <h2>
                                    Лекция 1. Понятие рационального питания и здоровья
                                </h2>
                            </div>
                        </div>
                        <div class="youtube-program col-12">
                            <button>
                                завершить программу
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
