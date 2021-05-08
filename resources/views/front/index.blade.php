@extends('layouts.front.index')
@section('content')
    <section class="sectionMain position-relative">
        <div class="d-flex align-items-center justify-content-around">
            <button class="btnLeft"><img src="images/btnLeft.png" alt=""></button>
            <!--        <img class="w-100" src="images/main.png" alt="">-->
            <div class="sectionText">
                <h1>Подписка gym project
                    первый шаг к твоей цели!</h1>
                <button class="btn btnNorm btnNormal1">начать</button>
            </div>
            <button class="btnRight"><img src="images/btnRight.png" alt=""></button>
        </div>
        <div class="subtract">
            <img src="images/subtract.png" alt="">
        </div>
    </section>
    <section class="gym position-relative">
        <h1 class="onlineGym">ONLINE GYM.</h1>
        <div>
            <h6 class="gymSubTitle">КТО МЫ И ЧЕМ ЗАНИМАЕМСЯ</h6>
            <h1 class="gymTitle">Тренируйтесь в любое время, в любом месте</h1>
            <div class="d-flex gymImages justify-content-center flex-wrap">
                <div class="d-flex flex-md-column align-items-center m-4">
                    <div>
                        <img src="images/scales.png" alt="">
                    </div>
                    <p>40 программ + питание</p>
                </div>
                <div class="d-flex flex-md-column align-items-center m-4">
                    <div>
                        <img src="images/brawn.png" alt="">
                    </div>
                    <p>Эксклюзивные программы от лучших тренеров</p>
                </div>
                <div class="d-flex flex-md-column align-items-center m-4">
                    <div>
                        <img src="images/weight.png" alt="">
                    </div>
                    <p>40 программ + питание</p>
                </div>
                <div class="d-flex flex-md-column align-items-center m-4">
                    <div>
                        <img src="images/dumbbell.png" alt="">
                    </div>
                    <p>Йога, кардио, танцы, сила и много другое</p>
                </div>
                <div class="d-flex flex-md-column align-items-center m-4">
                    <div>
                        <img src="images/list.png" alt="">
                    </div>
                    <p>Календари тренировок и трекеры прогресса</p>
                </div>
            </div>
        </div>
    </section>
    <section class="program d-flex flex-column align-items-center">
        <h1 class="program-header">Наши программы</h1>
        <div class="d-flex col-10">
            <div class="col-3">
                <div class="cardForFitness">
                    <div class="position-relative">
                        <div class="ellipse">
                            <div class="ellipseM">
                                <div class="stars">
                                    <img src="./images/star_rate.png" style="width: 2px;height:2px" alt="">
                                    <img src="./images/star_rate.png" style="width: 4px;height:4px" alt="">
                                    <img src="./images/star_rate.png" style="width: 6px;height:6px" alt="">
                                    <img src="./images/star_rate.png" style="width: 4px;height:4px" alt="">
                                    <img src="./images/star_rate.png" style="width: 2px;height:2px" alt="">
                                </div>
                                <p class="ellipseText">зал</p>
                            </div>
                        </div>
                        <img class="imgFitness" src="./images/img.png" alt="">
                    </div>
                    <div class="p-2 cardWrapper">
                        <h1 class="cardHeader">Утреннее кардио 2. Сожги весь жир!</h1>
                        <div class="cardContent">
                            <ul>
                                <li class="cardListLeft">Кол-во тренировок</li>
                                <li class="cardListRight">
                                    <p class="m-0">15</p>
                                    <img class="ml-2" src="images/calendar.png" alt="">
                                </li>
                                <li class="cardListLeft">Тренировки от и до</li>
                                <li class="cardListRight">
                                    <p class="m-0">18-30 мин</p>
                                    <img class="ml-2" src="images/timer.png" alt="">
                                </li>
                                <li class="cardListLeft">Интенсивность</li>
                                <li class="cardListRight">
                                    <p class="m-0">Низкая</p>
                                    <img class="ml-2" src="images/graph.png" alt="">
                                </li>
                            </ul>
                        </div>
                        <div class="d-flex align-content-center cardFooter">
                            <img class="cardFooterImg" src="./images/img.png" alt="">
                            <p class="cardFooterText">Ольга Дерендеева</p>
                            <p class="ml-auto cardFooterText">2276</p>
                            <img class="mt-auto mb-auto" src="./images/user.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="cardForFitness">
                    <div class="position-relative">
                        <div class="ellipse">
                            <div class="ellipseM">
                                <div class="stars">
                                    <img src="./images/star_rate.png" style="width: 2px;height:2px" alt="">
                                    <img src="./images/star_rate.png" style="width: 4px;height:4px" alt="">
                                    <img src="./images/star_rate.png" style="width: 6px;height:6px" alt="">
                                    <img src="./images/star_rate.png" style="width: 4px;height:4px" alt="">
                                    <img src="./images/star_rate.png" style="width: 2px;height:2px" alt="">
                                </div>
                                <p class="ellipseText">зал</p>
                            </div>
                        </div>
                        <img class="imgFitness" src="./images/img.png" alt="">
                    </div>
                    <div class="p-2 cardWrapper">
                        <h1 class="cardHeader">Утреннее кардио 2. Сожги весь жир!</h1>
                        <div class="cardContent">
                            <ul>
                                <li class="cardListLeft">Кол-во тренировок</li>
                                <li class="cardListRight">
                                    <p class="m-0">15</p>
                                    <img class="ml-2" src="images/calendar.png" alt="">
                                </li>
                                <li class="cardListLeft">Тренировки от и до</li>
                                <li class="cardListRight">
                                    <p class="m-0">18-30 мин</p>
                                    <img class="ml-2" src="images/timer.png" alt="">
                                </li>
                                <li class="cardListLeft">Интенсивность</li>
                                <li class="cardListRight">
                                    <p class="m-0">Низкая</p>
                                    <img class="ml-2" src="images/graph.png" alt="">
                                </li>
                            </ul>
                        </div>
                        <div class="d-flex align-content-center cardFooter">
                            <img class="cardFooterImg" src="./images/img.png" alt="">
                            <p class="cardFooterText">Ольга Дерендеева</p>
                            <p class="ml-auto cardFooterText">2276</p>
                            <img class="mt-auto mb-auto" src="./images/user.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="cardForFitness">
                    <div class="position-relative">
                        <div class="ellipse">
                            <div class="ellipseM">
                                <div class="stars">
                                    <img src="./images/star_rate.png" style="width: 2px;height:2px" alt="">
                                    <img src="./images/star_rate.png" style="width: 4px;height:4px" alt="">
                                    <img src="./images/star_rate.png" style="width: 6px;height:6px" alt="">
                                    <img src="./images/star_rate.png" style="width: 4px;height:4px" alt="">
                                    <img src="./images/star_rate.png" style="width: 2px;height:2px" alt="">
                                </div>
                                <p class="ellipseText">зал</p>
                            </div>
                        </div>
                        <img class="imgFitness" src="./images/img.png" alt="">
                    </div>
                    <div class="p-2 cardWrapper">
                        <h1 class="cardHeader">Утреннее кардио 2. Сожги весь жир!</h1>
                        <div class="cardContent">
                            <ul>
                                <li class="cardListLeft">Кол-во тренировок</li>
                                <li class="cardListRight">
                                    <p class="m-0">15</p>
                                    <img class="ml-2" src="images/calendar.png" alt="">
                                </li>
                                <li class="cardListLeft">Тренировки от и до</li>
                                <li class="cardListRight">
                                    <p class="m-0">18-30 мин</p>
                                    <img class="ml-2" src="images/timer.png" alt="">
                                </li>
                                <li class="cardListLeft">Интенсивность</li>
                                <li class="cardListRight">
                                    <p class="m-0">Низкая</p>
                                    <img class="ml-2" src="images/graph.png" alt="">
                                </li>
                            </ul>
                        </div>
                        <div class="d-flex align-content-center cardFooter">
                            <img class="cardFooterImg" src="./images/img.png" alt="">
                            <p class="cardFooterText">Ольга Дерендеева</p>
                            <p class="ml-auto cardFooterText">2276</p>
                            <img class="mt-auto mb-auto" src="./images/user.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="cardForFitness">
                    <div class="position-relative">
                        <div class="ellipse">
                            <div class="ellipseM">
                                <div class="stars">
                                    <img src="./images/star_rate.png" style="width: 2px;height:2px" alt="">
                                    <img src="./images/star_rate.png" style="width: 4px;height:4px" alt="">
                                    <img src="./images/star_rate.png" style="width: 6px;height:6px" alt="">
                                    <img src="./images/star_rate.png" style="width: 4px;height:4px" alt="">
                                    <img src="./images/star_rate.png" style="width: 2px;height:2px" alt="">
                                </div>
                                <p class="ellipseText">зал</p>
                            </div>
                        </div>
                        <img class="imgFitness" src="./images/img.png" alt="">
                    </div>
                    <div class="p-2 cardWrapper">
                        <h1 class="cardHeader">Утреннее кардио 2. Сожги весь жир!</h1>
                        <div class="cardContent">
                            <ul>
                                <li class="cardListLeft">Кол-во тренировок</li>
                                <li class="cardListRight">
                                    <p class="m-0">15</p>
                                    <img class="ml-2" src="images/calendar.png" alt="">
                                </li>
                                <li class="cardListLeft">Тренировки от и до</li>
                                <li class="cardListRight">
                                    <p class="m-0">18-30 мин</p>
                                    <img class="ml-2" src="images/timer.png" alt="">
                                </li>
                                <li class="cardListLeft">Интенсивность</li>
                                <li class="cardListRight">
                                    <p class="m-0">Низкая</p>
                                    <img class="ml-2" src="images/graph.png" alt="">
                                </li>
                            </ul>
                        </div>
                        <div class="d-flex align-content-center cardFooter">
                            <img class="cardFooterImg" src="./images/img.png" alt="">
                            <p class="cardFooterText">Ольга Дерендеева</p>
                            <p class="ml-auto cardFooterText">2276</p>
                            <img class="mt-auto mb-auto" src="./images/user.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="subscribe d-flex flex-column align-items-center">
        <h6>НУЖНО ПРИДУМАТЬ НАЗВАНИЕ ДОПОЛНИТЕЛЬНОЕ</h6>
        <h1>Подписка Online Gym project первый шаг к твоей цели!</h1>
        <div class="container-fluid col-12">
            <div class="row d-flex flex-wrap">
                <div class="d-flex align-items-center
				justify-content-center col-lg-3 col-md-6 col-12 p-0 flex-column m-auto subscribe-item">
                    <h3>8 Недельная Трансформация</h3>
                    <div>
                        <p>640 <span>грн</span></p>
                    </div>
                    <button class="btn btnNorm btnNormal1">
                        начать
                    </button>
                    <!--                <img class="w-100" src="images/subscribe.png" alt="">-->
                </div>
                <div class="d-flex align-items-center
				justify-content-center col-lg-3 col-md-6 col-12 p-0 flex-column m-auto subscribe-item">
                    <h3>8 Недельная Трансформация</h3>
                    <div>
                        <p>640 <span>грн</span></p>
                    </div>
                    <button class="btn btnNorm btnNormal1">
                        начать
                    </button>
                    <!--                <img class="w-100" src="images/subscribe1.png" alt="">-->
                </div>
                <div class="d-flex align-items-center
				justify-content-center col-lg-3 col-md-6 col-12 p-0 flex-column m-auto subscribe-item">
                    <h3>8 Недельная Трансформация</h3>
                    <div>
                        <p>640 <span>грн</span></p>
                    </div>
                    <button class="btn btnNorm btnNormal1">
                        начать
                    </button>
                    <!--                <img class="w-100" src="images/subscribe2.png" alt="">-->
                </div>
                <div class="d-flex align-items-center
				justify-content-center col-lg-3 col-md-6 col-12 p-0 flex-column m-auto subscribe-item">
                    <h3>8 Недельная Трансформация</h3>
                    <div>
                        <p>640 <span>грн</span></p>
                    </div>
                    <button class="btn btnNorm btnNormal1">
                        начать
                    </button>
                    <!--                <img class="w-100" src="images/subscribe3.png" alt="">-->
                </div>
            </div>
        </div>
    </section>
    <section class="about col-12 d-flex flex-column text-left align-items-center position-relative">
        <div class="col-8">
            <div class="imgAbsolute">
                <img class="img1" src="images/about.png" alt="">
                <div class="img2">
{{--                    <img src="images/about1.png" alt="">--}}
{{--                    <img class="playButton" src="images/playButton.png">--}}
                    <iframe width="569px" height="372px" src="https://www.youtube.com/embed/9VxqYJmiHpA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-6 aboutFirst">
                <h1>Решение начать =
                    более 70% результата!</h1>
                <p>Хотите похудеть? Привести свое тело в форму? Сжечь лишние калории? Поставьте перед собой цель и
                    посмотрите, как Gym project может помочь вам преобразовать вашу жизнь. Получите онлайн-доступ ко всем
                    программам тренировок для любого телосложения и любого уровня подготовки.</p>
            </div>
            <div class="col-6 d-flex flex-wrap
			aboutSecond">
                <h1 class="col-6">155+</h1>
                <p class="col-6">Эксклюзивные программы от лучших тренеров</p>
                <h1 class="col-6">455+</h1>
                <p class="col-6">Прошли программы</p>
                <h1 class="col-6">55+</h1>
                <p class="col-6">Календари тренировок и трекеры прогресса</p>
                <h1 class="col-6">7550+</h1>
                <p class="col-6">40 программ + питание</p>
            </div>
        </div>
        <div class="aboutThird col-8">
            <div class="d-flex justify-content-end">
                <img class="mr-4" src="images/backPic1.png" alt="">
                <img src="images/backPic.png" alt="">
            </div>
            <h2>Что говорят о нас наши клиенты</h2>
            <div class="col-12 d-flex">
                <div class="aboutComment1 col-3">
                    <img class="col-6 p-0" src="images/comment_little.png" alt="">
                    <img class="col-6 p-0" src="images/comment_little1.png" alt="">
                    <img class="col-6 p-0" src="images/comment_little2.png" alt="">
                    <img class="col-6 p-0" src="images/comment_little3.png" alt="">
                </div>
                <div class="aboutComment2 col-9 d-flex flex-column">
                    <p>Оценка курсу 10. Курс закончился недавно. Себе в ежедневник выписала последние тренировки и все
                        задания по сну и питанию. Со сном и питанием еще справляюсь, а вот с тренировками проблема. Вышла на
                        работу , после работы приезжаю и не получается выкроить время. Но делаю хоть отдельные упражнения
                        или кардио. На работе делаю упражнения у стены, когда плечи устают. </p>
                    <h1>Даша Малалотева</h1>
                    <div>
                        <button>
                            <img src="images/ArrowR.png" alt="">
                        </button>
                        <button>
                            <img src="images/Arrowl.png" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="expert col-12 d-flex flex-column justify-content-center">
        <h2>Тренировки под руководством экспертов</h2>
        <h4>Супер тренеры Gym project — это лучшие профессионалы мира фитнеса. Они уже научили миллионы таких же людей, как
            вы, добиваться результатов, которые они считали невозможными.</h4>
        <div class="col-12 p-0 justify-content-center d-flex align-items-center">
            <div class="col-10 p-0 ">
                <div class="row d-flex justify-content-around align-items-center">
                    <div class="col-1 p-0 justify-content-center d-flex expertBtn">
                        <button>
                            <img src="images/ArrowRW.png" alt="">
                        </button>
                    </div>
                    <div class="col-2 p-0 expertRate">
                        <div class="trainer">
                            <div>
                                <img src="images/star.png" alt="">
                                <img src="images/star.png" alt="">
                                <img src="images/star.png" alt="">
                                <img src="images/star.png" alt="">
                                <img src="images/star.png" alt="">
                            </div>
                            <h1>Ольга Шульц</h1>
                            <h3>Йога инструктор</h3>
                        </div>
                        <!--                    <div>-->
                        <!--                        <div></div>-->
                        <!--                        <img src="images/expertpicture.png" alt="">-->
                        <!--                    </div>-->
                    </div>
                    <div class="col-2 p-0 expertRate">
                        <div class="trainer">
                            <div>
                                <img src="images/star.png" alt="">
                                <img src="images/star.png" alt="">
                                <img src="images/star.png" alt="">
                                <img src="images/star.png" alt="">
                                <img src="images/star.png" alt="">
                            </div>
                            <h1>Ольга Шульц</h1>
                            <h3>Йога инструктор</h3>
                        </div>
                        <!--                    <div>-->
                        <!--                        <div></div>-->
                        <!--                        <img src="images/expertpicture1.png" alt="">-->
                        <!--                    </div>-->
                    </div>
                    <div class="col-2 p-0 expertRate">
                        <div class="trainer">
                            <div>
                                <img src="images/star.png" alt="">
                                <img src="images/star.png" alt="">
                                <img src="images/star.png" alt="">
                                <img src="images/star.png" alt="">
                                <img src="images/star.png" alt="">
                            </div>
                            <h1>Ольга Шульц</h1>
                            <h3>Йога инструктор</h3>
                        </div>
                        <!--                    <div>-->
                        <!--                        <div></div>-->
                        <!--                        <img src="images/expertpicture2.png" alt="">-->
                        <!--                    </div>-->
                    </div>
                    <div class="col-2 p-0 expertRate">
                        <div class="trainer">
                            <div>
                                <img src="images/star.png" alt="">
                                <img src="images/star.png" alt="">
                                <img src="images/star.png" alt="">
                                <img src="images/star.png" alt="">
                                <img src="images/star.png" alt="">
                            </div>
                            <h1>Ольга Шульц</h1>
                            <h3>Йога инструктор</h3>
                        </div>
                        <!--                    <div>-->
                        <!--                        <div></div>-->
                        <!--                        <img src="images/expertpicture3.png" alt="">-->
                        <!--                    </div>-->
                    </div>
                    <div class="col-2 p-0 expertRate">
                        <div class="trainer">
                            <div>
                                <img src="images/star.png" alt="">
                                <img src="images/star.png" alt="">
                                <img src="images/star.png" alt="">
                                <img src="images/star.png" alt="">
                                <img src="images/star.png" alt="">
                            </div>
                            <h1>Ольга Шульц</h1>
                            <h3>Йога инструктор</h3>
                        </div>
                        <!--                    <div>-->
                        <!--                        <div></div>-->
                        <!--                        <img src="images/expertpicture4.png" alt="">-->
                        <!--                    </div>-->
                    </div>
                    <div class="col-1 p-0 justify-content-center d-flex expertBtn">
                        <button>
                            <img src="images/ArrowLW.png" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <img class="absoluteTop" src="images/top.png" alt="">
        <img class="absoluteBottom" src="images/bottom.png" alt="">
    </section>
    <section class="news d-flex justify-content-center flex-column align-items-center">
        <h4>ЧИТАЙТЕ НАС</h4>
        <h2>Последние новости и статьи </h2>
        <div class="col-9 d-flex justify-content-center">
            <div class="col-4 d-flex flex-column justify-content-center	news-item">
                <div class="newsAbsolute">
                    <h3>12</h3>
                    <h5>ФЕВРАЛЯ</h5>
                </div>
                <img src="images/news.png" alt="">
                <h3>Прокачка: сумасшедший комплекс для железного пресса и сильных ног</h3>
                <p>Качать пресс нужно не только ради кубиков. Мышцы корпуса стабилизируют позвоночник, участвуют практически
                    в любом движении, улучшают чувство баланса и защищают спину от травм и боли.</p>
                <a href="#">Читать подробнее <img src="images/LongArrow.png" alt=""></a>
            </div>
            <div class="col-4 d-flex flex-column justify-content-center	news-item">
                <div class="newsAbsolute">
                    <h3>12</h3>
                    <h5>ФЕВРАЛЯ</h5>
                </div>
                <img src="images/news.png" alt="">
                <h3>Прокачка: 5 упражнений для железного пресса. И никаких скручиваний</h3>
                <p>Качать пресс нужно не только ради кубиков. Мышцы корпуса стабилизируют позвоночник, участвуют практически
                    в любом движении, улучшают чувство баланса и защищают спину от травм и боли.</p>
                <a href="#">Читать подробнее <img src="images/LongArrow.png" alt=""></a>
            </div>
            <div class="col-4 d-flex flex-column justify-content-center	news-item">
                <div class="newsAbsolute">
                    <h3>12</h3>
                    <h5>ФЕВРАЛЯ</h5>
                </div>
                <img src="images/news.png" alt="">
                <h3>3 распространённые ошибки при постановке фитнес-целей</h3>
                <p>Качать пресс нужно не только ради кубиков. Мышцы корпуса стабилизируют позвоночник, участвуют практически
                    в любом движении, улучшают чувство баланса и защищают спину от травм и боли.</p>
                <a href="#">Читать подробнее <img src="images/LongArrow.png" alt=""></a>
            </div>
        </div>
    </section>
    <section class="seo col-9 ">
        <div class="seo-img">
            <img src="images/seoImage.png" alt="">
        </div>
        <div class="col-12 d-flex justify-content-between align-items-center">
            <div class="col-4">
                <h1>Я не жирный! У меня прекрасная комплекция вратаря! ну или свой вариан цитаты:)</h1>
                <p>Gym project</p>
            </div>
            <div class="col-7">
                <h3>Что отделяет нас от остальных</h3>
                <p>Хотите похудеть? Привести свое тело в форму? Сжечь лишние калории? Поставьте перед собой цель и
                    посмотрите, как Gym project может помочь вам преобразовать вашу жизнь. Получите онлайн-доступ ко всем
                    программам тренировок для любого телосложения и любого уровня подготовки.

                    Хотите похудеть? Привести свое тело в форму? Сжечь лишние калории? Поставьте перед собой цель и
                    посмотрите, как Gym project может помочь вам преобразовать вашу жизнь. Получите онлайн-доступ ко всем
                    программам тренировок для любого телосложения и любого уровня подготовки.</p>
                <a href="">ЧИТАТЬ ЕЩЕ</a>
            </div>
        </div>
    </section>
@endsection
