@extends('layouts.front.index')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 d-flex justify-content-end">
                @include('auth.aside')
            </div>
            <div class="col-8 login-page">
                <h1>Создайте свой аккаунт</h1>
                <form action="{{route('register.secondStep')}}" method="post" class="d-flex flex-column">
                    <div class="d-flex">
                        <div class="custom-form-group-inline">
                            <input type="email" name="email" value="{{old('email')}}" placeholder="E-mail">
                            <div class="left-line"></div>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email')}}</span>
                            @endif
                        </div>
                        <div class="custom-form-group-inline">
                            <input type="password" name="password" value="{{old('password')}}" placeholder="Пароль">
                            <div class="left-line"></div>
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="social-form">
                        <h1>Или войти с помощью социальных сетей</h1>
                        <div class="social-btn-grp">
                            <button type="button">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11 22C17.0751 22 22 17.0751 22 11C22 4.92487 17.0751 0 11 0C4.92487 0 0 4.92487 0 11C0 17.0751 4.92487 22 11 22Z"
                                        fill="#1877F2"/>
                                    <path
                                        d="M13.7651 11.4308H11.8023V18.6216H8.82843V11.4308H7.41406V8.90363H8.82843V7.26827C8.82843 6.09882 9.38394 4.26758 11.8287 4.26758L14.0315 4.27679V6.72982H12.4333C12.1711 6.72982 11.8025 6.86081 11.8025 7.41867V8.90598H14.0249L13.7651 11.4308Z"
                                        fill="white"/>
                                </svg>
                                Facebook
                            </button>
                            <button type="button">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.15625 11C5.15625 9.91005 5.45656 8.88899 5.97828 8.0147V4.30615H2.26974C0.797844 6.21775 0 8.54747 0 11C0 13.4526 0.797844 15.7823 2.26974 17.6939H5.97828V13.9854C5.45656 13.1111 5.15625 12.09 5.15625 11Z"
                                        fill="#FBBD00"/>
                                    <path
                                        d="M11 16.844L8.42188 19.4221L11 22.0002C13.4526 22.0002 15.7823 21.2024 17.6939 19.7305V16.0259H13.9893C13.1074 16.5495 12.082 16.844 11 16.844Z"
                                        fill="#0F9D58"/>
                                    <path
                                        d="M5.97783 13.9854L2.26929 17.6939C2.5607 18.0724 2.87803 18.4348 3.22139 18.7782C5.29901 20.8558 8.06135 22 10.9995 22V16.8438C8.86727 16.8438 6.99843 15.6956 5.97783 13.9854Z"
                                        fill="#31AA52"/>
                                    <path
                                        d="M22 11.0002C22 10.331 21.9394 9.66052 21.8199 9.00748L21.7232 8.479H11V13.6353H16.2186C15.7119 14.6433 14.9327 15.4658 13.9892 16.026L17.6938 19.7305C18.0723 19.4391 18.4348 19.1218 18.7782 18.7784C20.8558 16.7008 22 13.9384 22 11.0002Z"
                                        fill="#3C79E6"/>
                                    <path
                                        d="M15.1322 6.86782L15.5879 7.32355L19.2339 3.67757L18.7782 3.22184C16.7006 1.14421 13.9382 0 11 0L8.42188 2.57812L11 5.15625C12.5609 5.15625 14.0284 5.76409 15.1322 6.86782Z"
                                        fill="#CF2D48"/>
                                    <path
                                        d="M10.9997 5.15625V0C8.06151 0 5.29918 1.14421 3.22151 3.2218C2.87815 3.56516 2.56082 3.9276 2.26941 4.30611L5.97796 8.01466C6.99859 6.30437 8.86743 5.15625 10.9997 5.15625Z"
                                        fill="#EB4132"/>
                                </svg>
                                Google
                            </button>
                            <button type="button">
                                <svg width="18" height="22" viewBox="0 0 18 22" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.2337 0C13.2849 0 13.3361 0 13.3902 0C13.5158 1.55149 12.9236 2.71075 12.2039 3.55026C11.4977 4.38396 10.5307 5.19255 8.96667 5.06986C8.86233 3.5406 9.45549 2.46731 10.1742 1.62974C10.8408 0.849163 12.0629 0.154569 13.2337 0Z"
                                        fill="black"/>
                                    <path
                                        d="M17.9684 16.1487C17.9684 16.1641 17.9684 16.1777 17.9684 16.1921C17.5288 17.5234 16.9019 18.6643 16.1368 19.7231C15.4383 20.6843 14.5824 21.9779 13.0541 21.9779C11.7335 21.9779 10.8563 21.1287 9.50284 21.1055C8.07115 21.0823 7.28381 21.8156 5.97481 22.0001C5.82507 22.0001 5.67533 22.0001 5.52849 22.0001C4.56726 21.861 3.79152 21.0997 3.22637 20.4138C1.55993 18.387 0.272175 15.769 0.0325928 12.4187C0.0325928 12.0903 0.0325928 11.7628 0.0325928 11.4343C0.134029 9.03657 1.29909 7.08707 2.84768 6.14227C3.66496 5.63992 4.78849 5.21195 6.03953 5.40323C6.57569 5.48631 7.12345 5.66986 7.60358 5.85148C8.05859 6.02634 8.6276 6.33644 9.16666 6.32002C9.53183 6.30939 9.89506 6.11908 10.2631 5.9848C11.3412 5.59548 12.3981 5.14916 13.7912 5.35879C15.4653 5.6119 16.6536 6.35576 17.3878 7.50344C15.9716 8.40477 14.8519 9.76304 15.0432 12.0825C15.2132 14.1895 16.4382 15.4222 17.9684 16.1487Z"
                                        fill="black"/>
                                </svg>
                                Apple
                            </button>
                        </div>
                    </div>
                    <div class="terms">
                        <input type="checkbox" class="terms-checkbox" name="terms" id="terms-checkbox">
                        <label>Я прочитал Условия Соглашения и даю согласение на обработку личных данных</label>
                        @if ($errors->has('terms'))
                            <span class="text-danger">{{ $errors->first('terms')}}</span>
                        @endif
                    </div>
                    <div class="submit-group">
                        <button type="submit" class="next">Продолжить</button>
                        <a class="prev">Отмена</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
