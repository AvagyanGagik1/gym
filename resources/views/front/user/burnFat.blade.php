@extends('layouts.front.profile')
@section('content')
    @if(count($program->workout->first()->videos)))

    <section class="content burn-content">
        <div class="d-flex flex-column">
            <div class="col-xl-10 col-12 d-flex justify-content-center flex-wrap m-auto youtube-account">
                <div class="col-12 d-flex align-items-center justify-content-between subscribe-header">
                    <h2>{{App::getlocale()==='ru'?$program->name_ru:(App::getlocale()==='en'?$program->name_en:$program->name_blr)}}</h2>
                    <img class="d-none d-lg-block"
                         src="{{$program->type === 'home'?'/images/cardioHome.png':'/images/hall.png'}}"
                         alt="">
                </div>
                <div
                    class="col-12 d-flex d-lg-none d-flex align-items-center justify-content-between youtube-account">
                    <div class="d-flex align-items-center content-user bg-white">
                        <div class="content-user-image">
                            <img src="{{$program->trainer->image}}" alt="">
                        </div>
                        <div class="d-flex flex-column ">
                            <p>{{__('language.trainer')}}</p>
                            <h1>{{App::getlocale()==='ru'?$program->trainer->name_ru:(App::getlocale()==='en'?$program->trainer->name_en:$program->trainer->name_blr)}}</h1>
                        </div>
                    </div>
                    <img class="content-user-img"
                         src="{{$program->type === 'home'?'/images/cardioHome.png':'/images/hall.png'}}" alt="">
                </div>
                <div
                    class="col-12 d-flex d-lg-none d-flex align-items-center justify-content-between youtube-account content-user-bg">
                    <div class="d-flex align-items-center w-100">
                        <div class="d-flex justify-content-center align-items-center content-user">
                            <div class="content-user-image-small">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1.87503 14.375C1.99817 14.3752 2.12013 14.351 2.2339 14.3039C2.34766 14.2567 2.451 14.1876 2.53796 14.1004L7.81253 8.82582L9.9621 10.9754C10.0492 11.0625 10.1525 11.1315 10.2663 11.1787C10.38 11.2258 10.5019 11.25 10.625 11.25C10.7482 11.25 10.8701 11.2258 10.9838 11.1787C11.0976 11.1315 11.2009 11.0625 11.288 10.9754L17.1872 5.07621L17.1868 7.1875C17.1868 7.43614 17.2856 7.6746 17.4614 7.85041C17.6372 8.02623 17.8757 8.125 18.1243 8.125C18.373 8.125 18.6114 8.02623 18.7872 7.85041C18.9631 7.6746 19.0618 7.43614 19.0618 7.1875L19.0625 2.8125C19.0625 2.56386 18.9638 2.3254 18.7879 2.14959C18.6121 1.97377 18.3737 1.875 18.125 1.875H13.75C13.5014 1.875 13.2629 1.97377 13.0871 2.14959C12.9113 2.3254 12.8125 2.56386 12.8125 2.8125C12.8125 3.06114 12.9113 3.2996 13.0871 3.47541C13.2629 3.65123 13.5014 3.75 13.75 3.75H15.8617L10.625 8.98668L8.47546 6.83707C8.38841 6.75001 8.28506 6.68095 8.17131 6.63383C8.05757 6.58672 7.93565 6.56247 7.81253 6.56247C7.68942 6.56247 7.5675 6.58672 7.45376 6.63383C7.34001 6.68095 7.23666 6.75001 7.14961 6.83707L1.2121 12.7746C1.08099 12.9057 0.991693 13.0727 0.955516 13.2546C0.91934 13.4365 0.937905 13.625 1.00887 13.7963C1.07983 13.9676 1.19999 14.114 1.35417 14.217C1.50835 14.32 1.68961 14.375 1.87503 14.375Z"
                                        fill="#E21A3D"/>
                                    <path
                                        d="M18.125 16.25H1.875C1.62636 16.25 1.3879 16.3488 1.21209 16.5246C1.03627 16.7004 0.9375 16.9389 0.9375 17.1875C0.9375 17.4361 1.03627 17.6746 1.21209 17.8504C1.3879 18.0262 1.62636 18.125 1.875 18.125H18.125C18.3736 18.125 18.6121 18.0262 18.7879 17.8504C18.9637 17.6746 19.0625 17.4361 19.0625 17.1875C19.0625 16.9389 18.9637 16.7004 18.7879 16.5246C18.6121 16.3488 18.3736 16.25 18.125 16.25Z"
                                        fill="#E21A3D"/>
                                </svg>
                            </div>
                            <div class="d-flex flex-column ">
                                <p>{{__('language.intensity')}}</p>
                                <h1>{{App::getlocale()==='ru'?$program->intensity_ru:(App::getlocale()==='en'?$program->intensity_en:$program->intensity_blr)}}</h1>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center align-items-center content-user">
                            <div class="content-user-image-small">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.7777 18C17.7777 18.2358 17.6867 18.4618 17.5246 18.6285C17.3625 18.7952 17.1427 18.8889 16.9135 18.8889C16.6843 18.8889 16.4645 18.7952 16.3024 18.6285C16.1404 18.4618 16.0493 18.2358 16.0493 18V16.2222C16.0493 15.515 15.7762 14.8367 15.29 14.3366C14.8038 13.8365 14.1443 13.5556 13.4567 13.5556H6.54316C5.85556 13.5556 5.19612 13.8365 4.70992 14.3366C4.22371 14.8367 3.95056 15.515 3.95056 16.2222V18C3.95056 18.2358 3.85951 18.4618 3.69745 18.6285C3.53538 18.7952 3.31556 18.8889 3.08637 18.8889C2.85717 18.8889 2.63735 18.7952 2.47529 18.6285C2.31322 18.4618 2.22217 18.2358 2.22217 18V16.2222C2.22217 15.0435 2.67741 13.913 3.48776 13.0795C4.2981 12.246 5.39716 11.7778 6.54316 11.7778H13.4567C14.6027 11.7778 15.7018 12.246 16.5121 13.0795C17.3225 13.913 17.7777 15.0435 17.7777 16.2222V18ZM9.99995 10C8.85395 10 7.75489 9.53175 6.94455 8.69826C6.1342 7.86476 5.67896 6.7343 5.67896 5.55556C5.67896 4.37682 6.1342 3.24636 6.94455 2.41286C7.75489 1.57937 8.85395 1.11111 9.99995 1.11111C11.1459 1.11111 12.245 1.57937 13.0553 2.41286C13.8657 3.24636 14.3209 4.37682 14.3209 5.55556C14.3209 6.7343 13.8657 7.86476 13.0553 8.69826C12.245 9.53175 11.1459 10 9.99995 10ZM9.99995 8.22223C10.3404 8.22223 10.6775 8.15325 10.9921 8.01924C11.3066 7.88523 11.5924 7.6888 11.8332 7.44118C12.0739 7.19355 12.2649 6.89958 12.3952 6.57605C12.5255 6.25251 12.5925 5.90575 12.5925 5.55556C12.5925 5.20537 12.5255 4.8586 12.3952 4.53507C12.2649 4.21154 12.0739 3.91756 11.8332 3.66994C11.5924 3.42232 11.3066 3.22589 10.9921 3.09188C10.6775 2.95787 10.3404 2.88889 9.99995 2.88889C9.31235 2.88889 8.65291 3.16984 8.16671 3.66994C7.6805 4.17004 7.40735 4.84832 7.40735 5.55556C7.40735 6.2628 7.6805 6.94108 8.16671 7.44118C8.65291 7.94128 9.31235 8.22223 9.99995 8.22223Z"
                                        fill="#E21A3D"/>
                                </svg>
                            </div>
                            <div class="d-flex flex-column ">
                                <p>{{__('language.signed')}}</p>
                                <h1>2 123</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-lg-flex d-none  justify-content-between align-items-center content-user">
                    <div class="d-flex align-items-center content-user">
                        <div class="content-user-image">
                            <img src="{{$program->trainer->image}}" alt="">
                        </div>
                        <div class="d-flex flex-column ">
                            <p>{{__('language.trainer')}}</p>
                            <h1>{{App::getlocale()==='ru'?$program->trainer->name_ru:(App::getlocale()==='en'?$program->trainer->name_en:$program->trainer->name_blr)}}</h1>
                        </div>
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="d-flex justify-content-center align-items-center content-user">
                            <div class="content-user-image-small">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1.87503 14.375C1.99817 14.3752 2.12013 14.351 2.2339 14.3039C2.34766 14.2567 2.451 14.1876 2.53796 14.1004L7.81253 8.82582L9.9621 10.9754C10.0492 11.0625 10.1525 11.1315 10.2663 11.1787C10.38 11.2258 10.5019 11.25 10.625 11.25C10.7482 11.25 10.8701 11.2258 10.9838 11.1787C11.0976 11.1315 11.2009 11.0625 11.288 10.9754L17.1872 5.07621L17.1868 7.1875C17.1868 7.43614 17.2856 7.6746 17.4614 7.85041C17.6372 8.02623 17.8757 8.125 18.1243 8.125C18.373 8.125 18.6114 8.02623 18.7872 7.85041C18.9631 7.6746 19.0618 7.43614 19.0618 7.1875L19.0625 2.8125C19.0625 2.56386 18.9638 2.3254 18.7879 2.14959C18.6121 1.97377 18.3737 1.875 18.125 1.875H13.75C13.5014 1.875 13.2629 1.97377 13.0871 2.14959C12.9113 2.3254 12.8125 2.56386 12.8125 2.8125C12.8125 3.06114 12.9113 3.2996 13.0871 3.47541C13.2629 3.65123 13.5014 3.75 13.75 3.75H15.8617L10.625 8.98668L8.47546 6.83707C8.38841 6.75001 8.28506 6.68095 8.17131 6.63383C8.05757 6.58672 7.93565 6.56247 7.81253 6.56247C7.68942 6.56247 7.5675 6.58672 7.45376 6.63383C7.34001 6.68095 7.23666 6.75001 7.14961 6.83707L1.2121 12.7746C1.08099 12.9057 0.991693 13.0727 0.955516 13.2546C0.91934 13.4365 0.937905 13.625 1.00887 13.7963C1.07983 13.9676 1.19999 14.114 1.35417 14.217C1.50835 14.32 1.68961 14.375 1.87503 14.375Z"
                                        fill="#E21A3D"/>
                                    <path
                                        d="M18.125 16.25H1.875C1.62636 16.25 1.3879 16.3488 1.21209 16.5246C1.03627 16.7004 0.9375 16.9389 0.9375 17.1875C0.9375 17.4361 1.03627 17.6746 1.21209 17.8504C1.3879 18.0262 1.62636 18.125 1.875 18.125H18.125C18.3736 18.125 18.6121 18.0262 18.7879 17.8504C18.9637 17.6746 19.0625 17.4361 19.0625 17.1875C19.0625 16.9389 18.9637 16.7004 18.7879 16.5246C18.6121 16.3488 18.3736 16.25 18.125 16.25Z"
                                        fill="#E21A3D"/>
                                </svg>
                            </div>
                            <div class="d-flex flex-column ">
                                <p>{{__('language.intensity')}}</p>
                                <h1>{{App::getlocale()==='ru'?$program->intensity_ru:(App::getlocale()==='en'?$program->intensity_en:$program->intensity_blr)}}</h1>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center align-items-center content-user">
                            <div class="content-user-image-small">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.7777 18C17.7777 18.2358 17.6867 18.4618 17.5246 18.6285C17.3625 18.7952 17.1427 18.8889 16.9135 18.8889C16.6843 18.8889 16.4645 18.7952 16.3024 18.6285C16.1404 18.4618 16.0493 18.2358 16.0493 18V16.2222C16.0493 15.515 15.7762 14.8367 15.29 14.3366C14.8038 13.8365 14.1443 13.5556 13.4567 13.5556H6.54316C5.85556 13.5556 5.19612 13.8365 4.70992 14.3366C4.22371 14.8367 3.95056 15.515 3.95056 16.2222V18C3.95056 18.2358 3.85951 18.4618 3.69745 18.6285C3.53538 18.7952 3.31556 18.8889 3.08637 18.8889C2.85717 18.8889 2.63735 18.7952 2.47529 18.6285C2.31322 18.4618 2.22217 18.2358 2.22217 18V16.2222C2.22217 15.0435 2.67741 13.913 3.48776 13.0795C4.2981 12.246 5.39716 11.7778 6.54316 11.7778H13.4567C14.6027 11.7778 15.7018 12.246 16.5121 13.0795C17.3225 13.913 17.7777 15.0435 17.7777 16.2222V18ZM9.99995 10C8.85395 10 7.75489 9.53175 6.94455 8.69826C6.1342 7.86476 5.67896 6.7343 5.67896 5.55556C5.67896 4.37682 6.1342 3.24636 6.94455 2.41286C7.75489 1.57937 8.85395 1.11111 9.99995 1.11111C11.1459 1.11111 12.245 1.57937 13.0553 2.41286C13.8657 3.24636 14.3209 4.37682 14.3209 5.55556C14.3209 6.7343 13.8657 7.86476 13.0553 8.69826C12.245 9.53175 11.1459 10 9.99995 10ZM9.99995 8.22223C10.3404 8.22223 10.6775 8.15325 10.9921 8.01924C11.3066 7.88523 11.5924 7.6888 11.8332 7.44118C12.0739 7.19355 12.2649 6.89958 12.3952 6.57605C12.5255 6.25251 12.5925 5.90575 12.5925 5.55556C12.5925 5.20537 12.5255 4.8586 12.3952 4.53507C12.2649 4.21154 12.0739 3.91756 11.8332 3.66994C11.5924 3.42232 11.3066 3.22589 10.9921 3.09188C10.6775 2.95787 10.3404 2.88889 9.99995 2.88889C9.31235 2.88889 8.65291 3.16984 8.16671 3.66994C7.6805 4.17004 7.40735 4.84832 7.40735 5.55556C7.40735 6.2628 7.6805 6.94108 8.16671 7.44118C8.65291 7.94128 9.31235 8.22223 9.99995 8.22223Z"
                                        fill="#E21A3D"/>
                                </svg>
                            </div>
                            <div class="d-flex flex-column ">
                                <p>{{__('language.signed')}}</p>
                                <h1>2 123</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 d-flex justify-content-between align-items-center content-user-hide">
                    <button class="closeDescription">
                        <span class="openContent ">{{__('language.hide')}}</span>
                        <span class="closeContent  d-none">{{__('language.open')}}</span>
                        {{__('language.description')}}
                        <img src="/images/vectorTop.png" alt="">
                    </button>
                </div>

                <div class="col-12 d-flex justify-content-between
            content-user-preview flex-wrap">
                    <div class="col-lg-5 col-12 p-0 d-flex justify-content-center pb-3">
                        <img src="{{$program->image}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-7 col-12 pr-0">
                        <p>
                            {!! App::getlocale()==='ru'?$program->description_ru:(App::getlocale()==='en'?$program->description_en:$program->description_blr )!!}
                        </p>
                    </div>
                </div>

                <div class="col-12 d-flex justify-content-between
            align-items-start
            content-user-video
            flex-wrap
             p-0">
                    <div class="col-lg-7 col-12 p-0 ">
                        <div class=" col-12 p-0 d-flex align-items-center justify-content-center workoutVideo">
                            <div id="player"></div>
                            <div class="position-absolute">
                                <img class="playButton w-100" id="playButton" src="/images/playButton.png"
                                     data-link="{{$program->workout->first()->videos[0]->link}}">
                            </div>
                            <img class="preview"
                                 src="//img.youtube.com/vi/{{$program->workout->first()->videos[0]->link}}/maxresdefault.jpg"
                                 alt="">
                        </div>
                        <div class="col-12 p-0 d-flex justify-content-center flex-lg-row flex-wrap youtube-header">
                            <div class="col-lg-8 col-12 p-0">
                                <h3>
                                    {{App::getlocale()==='ru'?$program->workout->first()->name_ru:(App::getlocale()==='en'?$program->workout->first()->name_en:$program->workout->first()->name_blr)}}
                                </h3>
                            </div>
                            <div class="col-lg-4 col-12  p-0 d-flex justify-content-lg-end">
                                <div class="youtube-image-ccal">
                                    <div>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0)">
                                                <path
                                                    d="M9.49951 0C6.08973 1.96464 6.4995 7.5 6.4995 7.5C6.4995 7.5 4.99952 6.99999 4.99952 4.75001C3.20992 5.78772 1.99951 7.78228 1.99951 10C1.99951 13.3137 4.6858 16 7.99952 16C11.3132 16 13.9995 13.3137 13.9995 10C13.9995 5.12501 9.49951 4.125 9.49951 0V0ZM8.52655 13.9326C7.32087 14.2332 6.09973 13.4995 5.79906 12.2937C5.49846 11.0881 6.23216 9.86686 7.43791 9.56626C10.3488 8.84049 10.7136 7.20358 10.7136 7.20358C10.7136 7.20358 12.1652 13.0254 8.52655 13.9326Z"
                                                    fill="#111111"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0">
                                                    <rect width="16" height="16" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <p>{{$program->workout->first()->calories}} ccal</p>
                                </div>
                                <div class="youtube-image-ccal">
                                    <div>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.437 3.22357C13.8252 3.60489 14.1337 4.0595 14.3447 4.56103C14.5558 5.06255 14.665 5.601 14.6663 6.14511C14.6675 6.68926 14.5607 7.22819 14.352 7.73066C14.1432 8.23312 13.8368 8.68912 13.4504 9.07226L7.9997 14.4623L7.53103 13.9976L2.56235 9.07292C2.17314 8.69025 1.86403 8.23399 1.65305 7.73059C1.44206 7.22725 1.33344 6.68685 1.3335 6.1411C1.33356 5.5953 1.44231 5.05498 1.65341 4.55167C1.86451 4.04835 2.17372 3.59211 2.56302 3.20957C4.04968 1.7429 6.37302 1.60957 8.01036 2.8129C9.6477 1.6249 11.9584 1.7629 13.437 3.22357ZM12.5104 8.12626C12.7717 7.86739 12.979 7.55912 13.1201 7.21939C13.2613 6.87972 13.3335 6.51534 13.3326 6.14748C13.3316 5.77962 13.2576 5.41561 13.1147 5.07663C12.9718 4.73765 12.763 4.43045 12.5004 4.1729C11.9633 3.64587 11.2414 3.34969 10.489 3.34757C9.73656 3.34545 9.01303 3.63757 8.47303 4.16157L8.00436 4.61957L7.53903 4.15957C6.9999 3.6304 6.27472 3.33383 5.51929 3.33358C4.76387 3.33333 4.03849 3.62942 3.49902 4.15824C3.23532 4.41686 3.02584 4.72547 2.88284 5.06602C2.73984 5.40657 2.66618 5.77221 2.66618 6.14157C2.66618 6.51092 2.73984 6.87659 2.88284 7.21712C3.02584 7.55765 3.23532 7.86625 3.49902 8.12492L8.00036 12.5863L12.511 8.12626H12.5104Z"
                                                fill="#111111"/>
                                        </svg>
                                    </div>
                                    <p>{{count($program->subscribe->users)}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center youtube-save flex-lg-row flex-column-reverse">
                            <div class="col-lg-4 col-12 p-0 d-flex justify-content-center align-items-center">
                                <button>{{__('language.ready')}}</button>
                            </div>
                            <div class="col-lg-8 col-12  p-0 d-flex justify-content-end">
                                <h2 class="text-lg-left text-center">
                                    {{__('language.afterComplete')}}
                                </h2>
                            </div>
                        </div>
                        <div class="col-12 d-none d-lg-flex p-0 flex-wrap youtube-comment-write">
                            <h2>{{__('language.feedback')}}</h2>
                            <form class="w-100" action="{{route('add.comment')}}" method="post">
                                @csrf
                                <input type="hidden" name="user_id" value="{{auth()->id()}}">
                                <input type="hidden" name="workout_id" value="{{$program->workout[0]->id}}">
                                <input type="hidden" name="id" value="{{$program->id}}">
                                <textarea name="text" placeholder="Комментарий"></textarea>
                                <button type="submit">
                                    {{__('language.sendFeedback')}}
                                </button>
                            </form>
                        </div>
                        <div class="col-12 d-none d-lg-flex p-0 flex-wrap youtube-comment">
                            <h1>{{__('language.reviews')}} <span>({{count($program->workout[0]->comments)}})</span></h1>
                            @include('front.user.helpers._comment',['firstComments'=>$program->workout[0]->comments()->where('parent_id',0)->get()])
{{--                            @foreach($program->workout[0]->comments()->where('parent_id',0)->get() as $comment)--}}
{{--                                <div class="col-12 p-0">--}}

{{--                                    <div class="col-12 p-0 d-flex align-items-center">--}}
{{--                                        <div>--}}
{{--                                            <img src="{{optional($comment->user)->avatar}}" alt="">--}}
{{--                                        </div>--}}
{{--                                        <h3>{{optional($comment->user)->name}}</h3>--}}
{{--                                    </div>--}}
{{--                                    {!! $comment->text !!}--}}
{{--                                    <button class="answerInput" data-program="{{$program->id}}"--}}
{{--                                            data-user="{{auth()->id()}}" data-parent="{{$comment->id}}"--}}
{{--                                            data-workout="{{$program->workout[0]->id}}">{{__('language.reply')}}--}}
{{--                                    </button>--}}

{{--                                    <form action="{{route('add.comment')}}" method="post">--}}
{{--                                        @csrf--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}

                            <button>
                                {{__('language.loadMore')}}
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-5 col-12 ">
                        @foreach($program->workout as $key=> $work)
                            <div class="col-12 d-flex content-user-video-item ">
                                <div class="col-6 p-0 position-relative ">
                                    <img src="//img.youtube.com/vi/{{$work->videos[0]->link}}/maxresdefault.jpg"
                                         class="w-100 " alt="">
                                    @if($key)
                                        <div class="lock"></div>
                                    @endif
                                </div>
                                <div class="col-6 pr-0">
                                    <h2>
                                        {{App::getlocale()==='ru'?$work->name_ru:(App::getlocale()==='en'?$work->name_en:$work->name_blr)}}
                                    </h2>
                                </div>
                            </div>
                        @endforeach
                        <div class="youtube-program col-12">
                            <form>
                                <button type="submit">
                                    {{__('language.finishProgram')}}
                                </button>
                            </form>

                        </div>
                        <div class="col-12 d-lg-none d-flex p-0 flex-wrap youtube-comment-write">
                            <h2>{{__('language.feedback')}}</h2>
                            <form class="w-100" action="{{route('add.comment')}}" method="post">
                                @csrf
                                <input type="hidden" name="user_id" value="{{auth()->id()}}">
                                <input type="hidden" name="workout_id" value="{{$program->workout[0]->id}}">
                                <input type="hidden" name="id" value="{{$program->id}}">
                                <textarea name="text" placeholder="Комментарий"></textarea>
                                <button type="submit">
                                    {{__('language.sendFeedback')}}
                                </button>
                            </form>
                        </div>
                        <div class="col-12 d-lg-none d-flex p-0 flex-wrap youtube-comment">
                            <h1>{{__('language.reviews')}} <span>({{count($program->workout[0]->comments)}})</span></h1>

                            @foreach($program->workout[0]->comments()->where('parent_id',0)->get() as $comment)
                                <div class="col-12 p-0">

                                    <div class="col-12 p-0 d-flex align-items-center">
                                        <div>
                                            <img src="{{optional($comment->user)->avatar}}" alt="">
                                        </div>
                                        <h3>{{optional($comment->user)->name}}</h3>
                                    </div>
                                    <p>{!! $comment->text !!}</p>
                                    <button class="answerInput" data-user="{{auth()->id()}}"
                                            data-parent="{{$comment->id}}" data-workout="{{$program->workout[0]->id}}">
                                        {{__('language.reply')}}
                                    </button>
                                    @foreach($comment->childs as $answer)
                                        <div class="col-12 p-0 answer">
                                            <div class="col-12 p-0 d-flex align-items-center">
                                                <div>
                                                    <img src="{{$answer->user->avatar}}" alt="">
                                                </div>
                                                <h3>{{$answer->user->name}}</h3>
                                            </div>
                                            <p>{{$answer->text}}</p>
                                            <a href="">{{__('language.reply')}}</a>
                                        </div>
                                    @endforeach
                                </div>
                                @foreach($comment->childs as $answer)
                                    <div class="col-12 p-0 answer">
                                        <div class="col-12 p-0 d-flex align-items-center">
                                            <div>
                                                <img src="{{$answer->user->avatar}}" alt="">
                                            </div>
                                            <h3>{{$answer->user->name}}</h3>
                                        </div>
                                        <p>{{$answer->text}}</p>
                                        <a href="">{{__('language.reply')}}</a>
                                    </div>
                                @endforeach
                            @endforeach


                            <button>
                                {{__('language.loadMore')}}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @else
        <section class="content functional-content">
            <div class="d-flex flex-column">
                <div class="col-xl-10 col-12 d-flex justify-content-center flex-wrap m-auto youtube-account">
                    <div class="col-12 d-flex align-items-center justify-content-between subscribe-header">
                        <h2>{{App::getlocale()==='ru'?$program->name_ru:(App::getlocale()==='en'?$program->name_en:$program->name_blr)}}</h2>
                        <img class="d-none d-lg-block"
                             src="{{$program->type === 'home'?'/images/cardioHome.png':'/images/hall.png'}}" alt="">
                    </div>
                    <div
                        class="col-12 d-flex d-lg-none d-flex align-items-center justify-content-between youtube-account">
                        <div class="d-flex align-items-center content-user bg-white">
                            <div class="content-user-image">
                                <img src="{{$program->trainer->image}}" alt="">
                            </div>
                            <div class="d-flex flex-column ">
                                <p>{{__('language.trainer')}}</p>
                                <h1>Лера Алёшкина</h1>
                            </div>
                        </div>
                        <img class="content-user-img"
                             src="{{$program->type === 'home'?'/images/cardioHome.png':'/images/hall.png'}}" alt="">
                    </div>
                    <div
                        class="col-12 d-flex d-lg-none d-flex align-items-center justify-content-between youtube-account content-user-bg">
                        <div class="d-flex align-items-center w-100">
                            <div class="d-flex justify-content-center align-items-center content-user">
                                <div class="content-user-image-small">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.87503 14.375C1.99817 14.3752 2.12013 14.351 2.2339 14.3039C2.34766 14.2567 2.451 14.1876 2.53796 14.1004L7.81253 8.82582L9.9621 10.9754C10.0492 11.0625 10.1525 11.1315 10.2663 11.1787C10.38 11.2258 10.5019 11.25 10.625 11.25C10.7482 11.25 10.8701 11.2258 10.9838 11.1787C11.0976 11.1315 11.2009 11.0625 11.288 10.9754L17.1872 5.07621L17.1868 7.1875C17.1868 7.43614 17.2856 7.6746 17.4614 7.85041C17.6372 8.02623 17.8757 8.125 18.1243 8.125C18.373 8.125 18.6114 8.02623 18.7872 7.85041C18.9631 7.6746 19.0618 7.43614 19.0618 7.1875L19.0625 2.8125C19.0625 2.56386 18.9638 2.3254 18.7879 2.14959C18.6121 1.97377 18.3737 1.875 18.125 1.875H13.75C13.5014 1.875 13.2629 1.97377 13.0871 2.14959C12.9113 2.3254 12.8125 2.56386 12.8125 2.8125C12.8125 3.06114 12.9113 3.2996 13.0871 3.47541C13.2629 3.65123 13.5014 3.75 13.75 3.75H15.8617L10.625 8.98668L8.47546 6.83707C8.38841 6.75001 8.28506 6.68095 8.17131 6.63383C8.05757 6.58672 7.93565 6.56247 7.81253 6.56247C7.68942 6.56247 7.5675 6.58672 7.45376 6.63383C7.34001 6.68095 7.23666 6.75001 7.14961 6.83707L1.2121 12.7746C1.08099 12.9057 0.991693 13.0727 0.955516 13.2546C0.91934 13.4365 0.937905 13.625 1.00887 13.7963C1.07983 13.9676 1.19999 14.114 1.35417 14.217C1.50835 14.32 1.68961 14.375 1.87503 14.375Z"
                                            fill="#E21A3D"/>
                                        <path
                                            d="M18.125 16.25H1.875C1.62636 16.25 1.3879 16.3488 1.21209 16.5246C1.03627 16.7004 0.9375 16.9389 0.9375 17.1875C0.9375 17.4361 1.03627 17.6746 1.21209 17.8504C1.3879 18.0262 1.62636 18.125 1.875 18.125H18.125C18.3736 18.125 18.6121 18.0262 18.7879 17.8504C18.9637 17.6746 19.0625 17.4361 19.0625 17.1875C19.0625 16.9389 18.9637 16.7004 18.7879 16.5246C18.6121 16.3488 18.3736 16.25 18.125 16.25Z"
                                            fill="#E21A3D"/>
                                    </svg>
                                </div>
                                <div class="d-flex flex-column ">
                                    <p>{{__('language.intensity')}}</p>
                                    <h1>{{App::getlocale()==='ru'?$program->intensity_ru:(App::getlocale()==='en'?$program->intensity_en:$program->intensity_blr)}}</h1>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center align-items-center content-user">
                                <div class="content-user-image-small">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.7777 18C17.7777 18.2358 17.6867 18.4618 17.5246 18.6285C17.3625 18.7952 17.1427 18.8889 16.9135 18.8889C16.6843 18.8889 16.4645 18.7952 16.3024 18.6285C16.1404 18.4618 16.0493 18.2358 16.0493 18V16.2222C16.0493 15.515 15.7762 14.8367 15.29 14.3366C14.8038 13.8365 14.1443 13.5556 13.4567 13.5556H6.54316C5.85556 13.5556 5.19612 13.8365 4.70992 14.3366C4.22371 14.8367 3.95056 15.515 3.95056 16.2222V18C3.95056 18.2358 3.85951 18.4618 3.69745 18.6285C3.53538 18.7952 3.31556 18.8889 3.08637 18.8889C2.85717 18.8889 2.63735 18.7952 2.47529 18.6285C2.31322 18.4618 2.22217 18.2358 2.22217 18V16.2222C2.22217 15.0435 2.67741 13.913 3.48776 13.0795C4.2981 12.246 5.39716 11.7778 6.54316 11.7778H13.4567C14.6027 11.7778 15.7018 12.246 16.5121 13.0795C17.3225 13.913 17.7777 15.0435 17.7777 16.2222V18ZM9.99995 10C8.85395 10 7.75489 9.53175 6.94455 8.69826C6.1342 7.86476 5.67896 6.7343 5.67896 5.55556C5.67896 4.37682 6.1342 3.24636 6.94455 2.41286C7.75489 1.57937 8.85395 1.11111 9.99995 1.11111C11.1459 1.11111 12.245 1.57937 13.0553 2.41286C13.8657 3.24636 14.3209 4.37682 14.3209 5.55556C14.3209 6.7343 13.8657 7.86476 13.0553 8.69826C12.245 9.53175 11.1459 10 9.99995 10ZM9.99995 8.22223C10.3404 8.22223 10.6775 8.15325 10.9921 8.01924C11.3066 7.88523 11.5924 7.6888 11.8332 7.44118C12.0739 7.19355 12.2649 6.89958 12.3952 6.57605C12.5255 6.25251 12.5925 5.90575 12.5925 5.55556C12.5925 5.20537 12.5255 4.8586 12.3952 4.53507C12.2649 4.21154 12.0739 3.91756 11.8332 3.66994C11.5924 3.42232 11.3066 3.22589 10.9921 3.09188C10.6775 2.95787 10.3404 2.88889 9.99995 2.88889C9.31235 2.88889 8.65291 3.16984 8.16671 3.66994C7.6805 4.17004 7.40735 4.84832 7.40735 5.55556C7.40735 6.2628 7.6805 6.94108 8.16671 7.44118C8.65291 7.94128 9.31235 8.22223 9.99995 8.22223Z"
                                            fill="#E21A3D"/>
                                    </svg>
                                </div>
                                <div class="d-flex flex-column ">
                                    <p>{{__('language.signed')}}</p>
                                    <h1>2 123</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-lg-flex d-none  justify-content-between align-items-center content-user">
                        <div class="d-flex align-items-center content-user">
                            <div class="content-user-image">
                                <img src="{{$program->trainer->image}}" alt="">
                            </div>
                            <div class="d-flex flex-column ">
                                <p>{{__('language.trainer')}}</p>
                                <h1>{{App::getlocale()==='ru'?$program->trainer->name_ru:(App::getlocale()==='en'?$program->trainer->name_en:$program->trainer->name_blr)}}</h1>
                            </div>
                        </div>

                        <div class="d-flex align-items-center">
                            <div class="d-flex justify-content-center align-items-center content-user">
                                <div class="content-user-image-small">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.87503 14.375C1.99817 14.3752 2.12013 14.351 2.2339 14.3039C2.34766 14.2567 2.451 14.1876 2.53796 14.1004L7.81253 8.82582L9.9621 10.9754C10.0492 11.0625 10.1525 11.1315 10.2663 11.1787C10.38 11.2258 10.5019 11.25 10.625 11.25C10.7482 11.25 10.8701 11.2258 10.9838 11.1787C11.0976 11.1315 11.2009 11.0625 11.288 10.9754L17.1872 5.07621L17.1868 7.1875C17.1868 7.43614 17.2856 7.6746 17.4614 7.85041C17.6372 8.02623 17.8757 8.125 18.1243 8.125C18.373 8.125 18.6114 8.02623 18.7872 7.85041C18.9631 7.6746 19.0618 7.43614 19.0618 7.1875L19.0625 2.8125C19.0625 2.56386 18.9638 2.3254 18.7879 2.14959C18.6121 1.97377 18.3737 1.875 18.125 1.875H13.75C13.5014 1.875 13.2629 1.97377 13.0871 2.14959C12.9113 2.3254 12.8125 2.56386 12.8125 2.8125C12.8125 3.06114 12.9113 3.2996 13.0871 3.47541C13.2629 3.65123 13.5014 3.75 13.75 3.75H15.8617L10.625 8.98668L8.47546 6.83707C8.38841 6.75001 8.28506 6.68095 8.17131 6.63383C8.05757 6.58672 7.93565 6.56247 7.81253 6.56247C7.68942 6.56247 7.5675 6.58672 7.45376 6.63383C7.34001 6.68095 7.23666 6.75001 7.14961 6.83707L1.2121 12.7746C1.08099 12.9057 0.991693 13.0727 0.955516 13.2546C0.91934 13.4365 0.937905 13.625 1.00887 13.7963C1.07983 13.9676 1.19999 14.114 1.35417 14.217C1.50835 14.32 1.68961 14.375 1.87503 14.375Z"
                                            fill="#E21A3D"/>
                                        <path
                                            d="M18.125 16.25H1.875C1.62636 16.25 1.3879 16.3488 1.21209 16.5246C1.03627 16.7004 0.9375 16.9389 0.9375 17.1875C0.9375 17.4361 1.03627 17.6746 1.21209 17.8504C1.3879 18.0262 1.62636 18.125 1.875 18.125H18.125C18.3736 18.125 18.6121 18.0262 18.7879 17.8504C18.9637 17.6746 19.0625 17.4361 19.0625 17.1875C19.0625 16.9389 18.9637 16.7004 18.7879 16.5246C18.6121 16.3488 18.3736 16.25 18.125 16.25Z"
                                            fill="#E21A3D"/>
                                    </svg>
                                </div>
                                <div class="d-flex flex-column ">
                                    <p>{{__('language.intensity')}}</p>
                                    <h1>{{App::getlocale()==='ru'?$program->intensity_ru:(App::getlocale()==='en'?$program->intensity_en:$program->intensity_blr)}}</h1>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center align-items-center content-user">
                                <div class="content-user-image-small">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.7777 18C17.7777 18.2358 17.6867 18.4618 17.5246 18.6285C17.3625 18.7952 17.1427 18.8889 16.9135 18.8889C16.6843 18.8889 16.4645 18.7952 16.3024 18.6285C16.1404 18.4618 16.0493 18.2358 16.0493 18V16.2222C16.0493 15.515 15.7762 14.8367 15.29 14.3366C14.8038 13.8365 14.1443 13.5556 13.4567 13.5556H6.54316C5.85556 13.5556 5.19612 13.8365 4.70992 14.3366C4.22371 14.8367 3.95056 15.515 3.95056 16.2222V18C3.95056 18.2358 3.85951 18.4618 3.69745 18.6285C3.53538 18.7952 3.31556 18.8889 3.08637 18.8889C2.85717 18.8889 2.63735 18.7952 2.47529 18.6285C2.31322 18.4618 2.22217 18.2358 2.22217 18V16.2222C2.22217 15.0435 2.67741 13.913 3.48776 13.0795C4.2981 12.246 5.39716 11.7778 6.54316 11.7778H13.4567C14.6027 11.7778 15.7018 12.246 16.5121 13.0795C17.3225 13.913 17.7777 15.0435 17.7777 16.2222V18ZM9.99995 10C8.85395 10 7.75489 9.53175 6.94455 8.69826C6.1342 7.86476 5.67896 6.7343 5.67896 5.55556C5.67896 4.37682 6.1342 3.24636 6.94455 2.41286C7.75489 1.57937 8.85395 1.11111 9.99995 1.11111C11.1459 1.11111 12.245 1.57937 13.0553 2.41286C13.8657 3.24636 14.3209 4.37682 14.3209 5.55556C14.3209 6.7343 13.8657 7.86476 13.0553 8.69826C12.245 9.53175 11.1459 10 9.99995 10ZM9.99995 8.22223C10.3404 8.22223 10.6775 8.15325 10.9921 8.01924C11.3066 7.88523 11.5924 7.6888 11.8332 7.44118C12.0739 7.19355 12.2649 6.89958 12.3952 6.57605C12.5255 6.25251 12.5925 5.90575 12.5925 5.55556C12.5925 5.20537 12.5255 4.8586 12.3952 4.53507C12.2649 4.21154 12.0739 3.91756 11.8332 3.66994C11.5924 3.42232 11.3066 3.22589 10.9921 3.09188C10.6775 2.95787 10.3404 2.88889 9.99995 2.88889C9.31235 2.88889 8.65291 3.16984 8.16671 3.66994C7.6805 4.17004 7.40735 4.84832 7.40735 5.55556C7.40735 6.2628 7.6805 6.94108 8.16671 7.44118C8.65291 7.94128 9.31235 8.22223 9.99995 8.22223Z"
                                            fill="#E21A3D"/>
                                    </svg>
                                </div>
                                <div class="d-flex flex-column ">
                                    <p>{{__('language.signed')}}</p>
                                    <h1>{{count($program->subscribe->users)}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 d-flex justify-content-between align-items-center content-user-hide">
                        <button class="closeDescription">
                            <span class="openContent ">{{__('language.hide')}}</span>
                            <span class="closeContent  d-none">{{__('language.open')}}</span>
                            {{__('language.description')}}
                            <img src="/images/vectorTop.png" alt="">
                        </button>
                    </div>

                    <div class="col-12 d-flex justify-content-between
            content-user-preview flex-wrap">
                        <div class="col-lg-5 col-12 p-0 d-flex justify-content-center pb-3">
                            <img src="{{$program->image}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-7 col-12 pr-0">
                            <p>
                                {!! App::getlocale()==='ru'?$program->description_ru:(App::getlocale()==='en'?$program->description_en:$program->description_blr )!!}
                            </p>
                        </div>
                    </div>

                    <div class="col-12 d-flex justify-content-between
            align-items-start
            content-user-video
            flex-wrap
             p-0">
                        <div class="col-lg-7 col-12 p-0 ">

                            <div class="col-12 p-0 d-flex justify-content-center flex-lg-row flex-wrap youtube-header">
                                <div class="col-lg-8 col-12 p-0">
                                    <h3>
                                        {{App::getlocale()==='ru'?$program->workout->first()->name_ru:(App::getlocale()==='en'?$program->workout->first()->name_en:$program->workout->first()->name_blr)}}
                                    </h3>
                                </div>
                                <div class="col-lg-4 col-12  p-0 d-flex justify-content-lg-end">
                                    <div class="youtube-image-ccal">
                                        <div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0)">
                                                    <path
                                                        d="M9.49951 0C6.08973 1.96464 6.4995 7.5 6.4995 7.5C6.4995 7.5 4.99952 6.99999 4.99952 4.75001C3.20992 5.78772 1.99951 7.78228 1.99951 10C1.99951 13.3137 4.6858 16 7.99952 16C11.3132 16 13.9995 13.3137 13.9995 10C13.9995 5.12501 9.49951 4.125 9.49951 0V0ZM8.52655 13.9326C7.32087 14.2332 6.09973 13.4995 5.79906 12.2937C5.49846 11.0881 6.23216 9.86686 7.43791 9.56626C10.3488 8.84049 10.7136 7.20358 10.7136 7.20358C10.7136 7.20358 12.1652 13.0254 8.52655 13.9326Z"
                                                        fill="#111111"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0">
                                                        <rect width="16" height="16" fill="white"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <p>{{$program->workout->first()->calories}} ccal</p>
                                    </div>
                                    <div class="youtube-image-ccal">
                                        <div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.437 3.22357C13.8252 3.60489 14.1337 4.0595 14.3447 4.56103C14.5558 5.06255 14.665 5.601 14.6663 6.14511C14.6675 6.68926 14.5607 7.22819 14.352 7.73066C14.1432 8.23312 13.8368 8.68912 13.4504 9.07226L7.9997 14.4623L7.53103 13.9976L2.56235 9.07292C2.17314 8.69025 1.86403 8.23399 1.65305 7.73059C1.44206 7.22725 1.33344 6.68685 1.3335 6.1411C1.33356 5.5953 1.44231 5.05498 1.65341 4.55167C1.86451 4.04835 2.17372 3.59211 2.56302 3.20957C4.04968 1.7429 6.37302 1.60957 8.01036 2.8129C9.6477 1.6249 11.9584 1.7629 13.437 3.22357ZM12.5104 8.12626C12.7717 7.86739 12.979 7.55912 13.1201 7.21939C13.2613 6.87972 13.3335 6.51534 13.3326 6.14748C13.3316 5.77962 13.2576 5.41561 13.1147 5.07663C12.9718 4.73765 12.763 4.43045 12.5004 4.1729C11.9633 3.64587 11.2414 3.34969 10.489 3.34757C9.73656 3.34545 9.01303 3.63757 8.47303 4.16157L8.00436 4.61957L7.53903 4.15957C6.9999 3.6304 6.27472 3.33383 5.51929 3.33358C4.76387 3.33333 4.03849 3.62942 3.49902 4.15824C3.23532 4.41686 3.02584 4.72547 2.88284 5.06602C2.73984 5.40657 2.66618 5.77221 2.66618 6.14157C2.66618 6.51092 2.73984 6.87659 2.88284 7.21712C3.02584 7.55765 3.23532 7.86625 3.49902 8.12492L8.00036 12.5863L12.511 8.12626H12.5104Z"
                                                    fill="#111111"/>
                                            </svg>
                                        </div>
                                        <p>{{count($program->subscribe->users)}}</p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class=" col-12 p-0 d-flex align-items-center justify-content-center flex-wrap youtube-training">
                                <div class="col-lg-6 col-12">
                                    @foreach($program->workout[0]->tasks as $task)
                                        <h1>
                                            {{App::getlocale()==='ru'?$task->name_ru:(App::getlocale()==='en'?$task->name_en:$task->name_blr)}}
                                            :
                                        </h1>
                                        <ul>
                                            @foreach($task->subtasks as $subtask)
                                                <li>
                                                    — {{App::getlocale()==='ru'?$subtask->description_ru:(App::getlocale()==='en'?$subtask->description_en:$subtask->description_blr)}}</li>
                                            @endforeach
                                        </ul>
                                    @endforeach
                                </div>
                                <div class="col-lg-6 col-12">
                                    @foreach($program->workout[0]->videos as $video)
                                        <div class="functional-training"
                                             style="background: url('//img.youtube.com/vi/{{$video->link}}/maxresdefault.jpg')">
                                            <h2>{{$video->name}}</h2>
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="25" cy="25" r="22.5" fill="#E21A3D"/>
                                                <path d="M20.834 17.7085V32.2918L32.2923 25.0002L20.834 17.7085Z"
                                                      fill="white"/>
                                                <circle cx="25" cy="25" r="24.5" stroke="#E21A3D"/>
                                            </svg>
                                            <img src="" alt="">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div
                                class="col-12 d-flex justify-content-center youtube-save flex-lg-row flex-column-reverse">
                                <div class="col-lg-4 col-12 p-0 d-flex justify-content-center align-items-center">
                                    <button>{{__('language.ready')}}</button>
                                </div>
                                <div class="col-lg-8 col-12  p-0 d-flex justify-content-end">
                                    <h2 class="text-lg-left text-center">
                                        {{__('language.afterComplete')}}
                                    </h2>
                                </div>
                            </div>
                            <div class="col-12 d-none d-lg-flex p-0 flex-wrap youtube-comment-write">
                                <h2>{{__('language.feedback')}}</h2>
                                <form class="w-100" action="{{route('add.comment')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{auth()->id()}}">
                                    <input type="hidden" name="workout_id" value="{{$program->workout[0]->id}}">
                                    <input type="hidden" name="id" value="{{$program->id}}">
                                    <textarea name="text" placeholder="Комментарий"></textarea>
                                    <button type="submit">
                                        {{__('language.sendFeedback')}}
                                    </button>
                                </form>
                            </div>
                            <div class="col-12 d-none d-lg-flex p-0 flex-wrap youtube-comment">
                                <h1>{{__('language.reviews')}} <span>({{count($program->workout[0]->comments)}})</span></h1>
                                @foreach($program->workout[0]->comments()->where('parent_id',0)->get() as $comment)
                                    <div class="col-12 p-0">

                                        <div class="col-12 p-0 d-flex align-items-center">
                                            <div>
                                                <img src="{{optional($comment->user)->avatar}}" alt="">
                                            </div>
                                            <h3>{{optional($comment->user)->name}}</h3>
                                        </div>
                                        <p>{!! $comment->text !!}</p>
                                        <button class="answerInput" data-user="{{auth()->id()}}"
                                                data-parent="{{$comment->id}}"
                                                data-workout="{{$program->workout[0]->id}}">{{__('language.reply')}}
                                        </button>

                                    </div>
                                    @foreach($comment->childs as $answer)
                                        <div class="col-12 p-0 answer">
                                            <div class="col-12 p-0 d-flex align-items-center">
                                                <div>
                                                    <img src="{{$answer->user->avatar}}" alt="">
                                                </div>
                                                <h3>{{$answer->user->name}}</h3>
                                            </div>
                                            <p>{!! $answer->text !!}</p>
                                            <a href="">{{__('language.reply')}}</a>
                                        </div>
                                    @endforeach
                                @endforeach

                                <button>
                                    {{__('language.loadMore')}}
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-5 col-12 ">

                            @foreach($program->workout as $work)
                                <div class="col-12 d-flex content-user-video-item ">
                                    <div class="col-6 pl-0 ">
                                        <img src="//img.youtube.com/vi/{{$work->videos[0]->link}}/maxresdefault.jpg"
                                             class="w-100 " alt="">
                                        <div class="lock"></div>

                                    </div>
                                    <div class="col-6 pr-0">
                                        <h2>
                                            {{App::getlocale()==='ru'?$work->name_ru:(App::getlocale()==='en'?$work->name_en:$work->name_blr)}}
                                        </h2>
                                    </div>
                                </div>
                            @endforeach
                            <div class="youtube-program col-12">
                                <button>
                                    {{__('language.finishProgram')}}
                                </button>
                            </div>
                            <div class="col-12 d-lg-none d-flex p-0 flex-wrap youtube-comment-write">
                                <h2>{{__('language.feedback')}}</h2>
                                <textarea name="" placeholder="Комментарий"></textarea>
                                <button>
                                    {{__('language.sendFeedback')}}
                                </button>
                            </div>
                            <div class="col-12 d-lg-none d-flex p-0 flex-wrap youtube-comment">
                                <h1>{{__('language.reviews')}} <span>({{count($program->workout[0]->comments)}})</span></h1>

                                @foreach($program->workout[0]->comments()->where('parent_id',0)->get() as $comment)
                                    <div class="col-12 p-0">

                                        <div class="col-12 p-0 d-flex align-items-center">
                                            <div>
                                                <img src="{{optional($comment->user)->avatar}}" alt="">
                                            </div>
                                            <h3>{{optional($comment->user)->name}}</h3>
                                        </div>
                                        <p>{!! $comment->text !!}</p>
                                        <button class="answerInput" data-user="{{auth()->id()}}"
                                                data-parent="{{$comment->id}}"
                                                data-workout="{{$program->workout[0]->id}}">{{__('language.reply')}}
                                        </button>
                                        @foreach($comment->childs as $answer)
                                            <div class="col-12 p-0 answer">
                                                <div class="col-12 p-0 d-flex align-items-center">
                                                    <div>
                                                        <img src="{{$answer->user->avatar}}" alt="">
                                                    </div>
                                                    <h3>{{$answer->user->name}}</h3>
                                                </div>
                                                <p>{{$answer->text}}</p>
                                                <a href="">{{__('language.reply')}}</a>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach
                                {{--                                <div class="col-12 p-0 answer">--}}
                                {{--                                    <div class="col-12 p-0 d-flex align-items-center">--}}
                                {{--                                        <div>--}}
                                {{--                                            <img src="/images/previewPlaceholder.png" alt="">--}}
                                {{--                                        </div>--}}
                                {{--                                        <h3>Юлия Стриж</h3>--}}
                                {{--                                    </div>--}}
                                {{--                                    <p>Хотите похудеть? Привести свое тело в форму? Сжечь лишние калории? Поставьте--}}
                                {{--                                        перед--}}
                                {{--                                        собой цель и посмотрите, как Gym project может помочь вам преобразовать вашу--}}
                                {{--                                        жизнь.--}}
                                {{--                                        Получите онлайн-доступ ко всем программам тренировок для любого телосложения и--}}
                                {{--                                        любого уровня подготовки.</p>--}}
                                {{--                                    <a href="">{{__('language.reply')}}</a>--}}
                                {{--                                </div>--}}

                                <button>
                                    {{__('language.loadMore')}}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
