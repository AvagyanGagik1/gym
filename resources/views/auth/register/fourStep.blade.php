@extends('layouts.front.index')

@section('content')
    <div class="container-fluid">
        <div class="row auth-wrapper">
            <div class="col-xl-4 col-lg-12 justify-content-end aside-wrapper">
                @include('auth.aside',['data'=>4])
            </div>
            <form method="post" action="{{route('user.custom.register')}}">
                <div class="col-xl-8 col-lg-12 four-step">
                    <h1>{{__('language.subscribe')}}</h1>
                    <div class="subscriptions">
                        @foreach($subscriptions as $key=>$subscription)
                            <div class="item">
                                <input type="radio" name="subscribe" @if($key === 0 ) checked @endif value="{{$subscription->id}}">
                                <label for="" class="d-flex">
                                    <div class="desc col-8">
                                        <h3>{{$subscription->duration_program}} месяц</h3>
                                        <span>Единоразовый платеж</span>
                                    </div>
                                    <div class="price col-3">
                                        <h3>{{$subscription->price}} грн</h3>
                                    </div>
                                    <span class="spanCircle"></span>
                                </label>
                            </div>
                        @endforeach
                    </div>
                    <div class="payment-subscription">
                        <h1>{{__('language.convenient')}}</h1>
                        <div class="payment-wrapper">
                            <div class="item">
                                <input type="radio" name="payment" checked value="creditCard">
                                <label for="">
                                    <img src="/images/credit-card.svg" alt="">

                                    <span></span>
                                </label>
                            </div>
                            <div class="item">
                                <input type="radio" name="payment" value="googlePay">
                                <label for="">
                                    <svg width="58" height="22" viewBox="0 0 58 22" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M27.3843 10.7477V17.1964H25.3242V1.27109H30.7878C31.4399 1.25756 32.0883 1.37243 32.6956 1.60905C33.3028 1.84568 33.8568 2.19939 34.3257 2.64977C34.7992 3.0728 35.1762 3.5916 35.4311 4.1713C35.686 4.75101 35.813 5.37819 35.8035 6.01068C35.8171 6.64656 35.692 7.27784 35.4369 7.86123C35.1819 8.44463 34.8028 8.96636 34.3257 9.39066C33.3703 10.2954 32.191 10.7473 30.7878 10.7465H27.3843V10.7477ZM27.3843 3.23173V8.79091H30.839C31.2177 8.80205 31.5946 8.73458 31.9456 8.5928C32.2966 8.45101 32.6139 8.23805 32.8772 7.96751C33.1392 7.71457 33.3475 7.41203 33.4897 7.07777C33.6319 6.74352 33.7051 6.38434 33.7051 6.02148C33.7051 5.65862 33.6319 5.29945 33.4897 4.96519C33.3475 4.63094 33.1392 4.3284 32.8772 4.07545C32.6172 3.79922 32.301 3.58103 31.9496 3.43536C31.5982 3.28968 31.2196 3.21984 30.839 3.23046H27.3843V3.23173Z"
                                            fill="#5F6368"/>
                                        <path
                                            d="M40.5502 5.94531C42.0728 5.94531 43.2747 6.34939 44.1559 7.15753C45.0371 7.96568 45.4772 9.0737 45.4764 10.4816V17.1971H43.5059V15.685H43.4163C42.5633 16.9302 41.4288 17.5529 40.0128 17.5529C38.8041 17.5529 37.7928 17.1971 36.979 16.4855C36.5885 16.1589 36.2763 15.7499 36.0651 15.2883C35.8539 14.8266 35.7491 14.324 35.7584 13.8171C35.7584 12.6896 36.1874 11.7929 37.0456 11.1271C37.9037 10.4613 39.0493 10.1275 40.4824 10.1258C41.7056 10.1258 42.713 10.3482 43.5046 10.7929V10.3253C43.5069 9.97971 43.4318 9.63792 43.2846 9.32474C43.1375 9.01155 42.9219 8.73482 42.6537 8.5146C42.109 8.02651 41.399 7.76019 40.6653 7.76872C39.5146 7.76872 38.604 8.25073 37.9336 9.21474L36.1192 8.08004C37.1172 6.65689 38.5942 5.94531 40.5502 5.94531ZM37.8849 13.8616C37.8836 14.1219 37.9448 14.3789 38.0637 14.6109C38.1825 14.843 38.3555 15.0435 38.5682 15.1958C39.0238 15.5517 39.5893 15.7402 40.1689 15.7295C41.0382 15.728 41.8715 15.3844 42.4861 14.7739C43.1685 14.136 43.5097 13.3876 43.5097 12.5286C42.8674 12.0204 41.9717 11.7662 40.8227 11.7662C39.9859 11.7662 39.2882 11.9666 38.7294 12.3673C38.1652 12.7739 37.8849 13.2682 37.8849 13.8616Z"
                                            fill="#5F6368"/>
                                        <path
                                            d="M56.7863 6.30078L49.9076 21.9999H47.781L50.3337 16.5068L45.8105 6.30078H48.0497L51.3189 14.1281H51.3637L54.5433 6.30078H56.7863Z"
                                            fill="#5F6368"/>
                                        <path
                                            d="M19.0576 9.35782C19.0583 8.73437 19.0052 8.112 18.8989 7.49756H10.2109V11.0211H15.187C15.0852 11.5839 14.8697 12.1203 14.5534 12.5982C14.2372 13.076 13.8268 13.4853 13.347 13.8013V16.0885H16.3168C18.0557 14.4964 19.0576 12.1419 19.0576 9.35782Z"
                                            fill="#4285F4"/>
                                        <path
                                            d="M10.2126 18.2987C12.6987 18.2987 14.792 17.488 16.3185 16.0903L13.3487 13.8031C12.5222 14.3596 11.4576 14.6773 10.2126 14.6773C7.80968 14.6773 5.77011 13.0686 5.04079 10.9009H1.98145V13.258C2.74822 14.7732 3.92399 16.047 5.37748 16.9371C6.83097 17.8272 8.50498 18.2986 10.2126 18.2987Z"
                                            fill="#34A853"/>
                                        <path
                                            d="M5.04032 10.8996C4.65475 9.76366 4.65475 8.53354 5.04032 7.39762V5.04053H1.98097C1.33594 6.3152 1 7.72202 1 9.1486C1 10.5752 1.33594 11.982 1.98097 13.2567L5.04032 10.8996Z"
                                            fill="#FBBC04"/>
                                        <path
                                            d="M10.2126 3.62201C11.5264 3.60069 12.7959 4.09365 13.7467 4.99433L16.3761 2.3831C14.7088 0.827902 12.4999 -0.0259301 10.2126 0.000600248C8.50498 0.000677536 6.83097 0.472088 5.37748 1.3622C3.92399 2.25232 2.74822 3.5261 1.98145 5.04134L5.04079 7.39843C5.77011 5.23067 7.80968 3.62201 10.2126 3.62201Z"
                                            fill="#EA4335"/>
                                    </svg>

                                    <span></span>
                                </label>

                            </div>
                            <div class="item">
                                <input type="radio" name="payment" value="iphonePay">
                                <label for="">
                                    <svg width="55" height="22" viewBox="0 0 55 22" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.7965 2.83594C11.3981 2.0625 11.8278 1.03125 11.6988 0C10.7965 0.0429688 9.72227 0.601562 9.07774 1.33203C8.51914 1.97656 8.00351 3.05078 8.13242 4.03906C9.16367 4.16797 10.152 3.60938 10.7965 2.83594ZM11.6988 4.29688C10.2379 4.21094 8.9918 5.11328 8.30429 5.11328C7.61679 5.11328 6.54256 4.33984 5.3824 4.33984C3.87849 4.38281 2.50348 5.19922 1.73004 6.57422C0.183153 9.28125 1.30035 13.2773 2.84723 15.4688C3.5777 16.543 4.48005 17.7461 5.64022 17.7031C6.75741 17.6602 7.1871 16.9727 8.51914 16.9727C9.85118 16.9727 10.2379 17.7031 11.441 17.6602C12.6442 17.6172 13.4176 16.5859 14.1481 15.4688C15.0075 14.2227 15.3512 13.0195 15.3512 12.9766C15.3082 12.9336 12.9879 12.0742 12.9879 9.41016C12.9449 7.17578 14.7926 6.10156 14.8785 6.05859C13.8903 4.51172 12.2574 4.33984 11.6988 4.29688Z"
                                            fill="#030000"/>
                                        <path
                                            d="M24.332 1.24609C27.5117 1.24609 29.7032 3.4375 29.7032 6.57422C29.7032 9.75391 27.4688 11.9453 24.2461 11.9453H20.7656V17.4883H18.2305V1.24609H24.332ZM20.7656 9.83984H23.6445C25.836 9.83984 27.0821 8.63672 27.0821 6.61719C27.0821 4.55469 25.836 3.39453 23.6445 3.39453H20.7227V9.83984H20.7656ZM30.3477 14.1797C30.3477 12.1172 31.9375 10.8281 34.7735 10.6562L38.0391 10.4844V9.58203C38.0391 8.25 37.1368 7.47656 35.6758 7.47656C34.2578 7.47656 33.3985 8.16406 33.1836 9.19531H30.8633C30.9922 7.04688 32.8399 5.45703 35.7618 5.45703C38.6407 5.45703 40.4883 6.96094 40.4883 9.36719V17.5312H38.168V15.5977H38.125C37.4375 16.9297 35.9336 17.7461 34.3868 17.7461C31.9805 17.7461 30.3477 16.2852 30.3477 14.1797ZM38.0391 13.1055V12.1602L35.1172 12.332C33.6563 12.418 32.8399 13.0625 32.8399 14.0938C32.8399 15.125 33.6993 15.8125 34.9883 15.8125C36.7071 15.8125 38.0391 14.6523 38.0391 13.1055ZM42.6368 21.9141V19.9375C42.8087 19.9805 43.2383 19.9805 43.4102 19.9805C44.5274 19.9805 45.129 19.5078 45.5157 18.3047C45.5157 18.2617 45.7305 17.5742 45.7305 17.5742L41.4336 5.71484H44.0547L47.0626 15.3828H47.1055L50.1134 5.71484H52.6915L48.2657 18.2188C47.2344 21.0977 46.0743 22 43.6251 22C43.4532 21.957 42.8516 21.957 42.6368 21.9141Z"
                                            fill="#030000"/>
                                    </svg>

                                    <span></span>
                                </label>
                            </div>
                        </div>

                    </div>
                    <div class="submit-group d-flex">
                        @csrf
                        <button class="next" type="submit">{{__('language.proceed')}}</button>
                        <a class="prev" href="{{route('register.get.thirdStep')}}">{{__('language.cancel')}}</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
