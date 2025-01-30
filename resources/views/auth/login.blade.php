@extends('templates.template')
@section('content')
    <section class="normal-breadcrumb set-bg" data-setbg="img/normal-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Войти</h2>
                        <p>Добро пожаловать на AnimeBlog.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Normal Breadcrumb End -->

    <!-- Login Section Begin -->
    <section class="login spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>Войти</h3>
                        <form action="{{ route("login") }}" method = "POST">
                            @csrf
                            <div class="input__item">
                                <input type="text" name="email" placeholder="Ваша почта." value="{{ old("email") }}">
                                <span class="icon_mail"></span>
                            </div>
                            <div class="input__item">
                                <input type="password" name = "password" placeholder="Пароль" value="{{ old("password") }}">
                                <span class="icon_lock"></span>
                            </div>
                            <div>
                                @if($errors->any())
                                    <p class = " text-white w-72">{{ $errors->first() }}</p>
                                @endif
                                @if($message ?? "")
                                    <p class="outline">{{ $message }}</p>
                                @endif
                            </div>
                            <button type="submit" class="site-btn">Войти сейчас</button>
                        </form>
                        <a href="#" class="forget_pass">Забыли пароль?</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login__register">
                        <h3>Нету аккаунта?</h3>
                        <a href="{{route("registration-page")}}" class="primary-btn">Зарегистрироваться сейчас</a>
                    </div>
                </div>
            </div>
{{--            <div class="login__social">--}}
{{--                <div class="row d-flex justify-content-center">--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="login__social__links">--}}
{{--                            <span>or</span>--}}
{{--                            <ul>--}}
{{--                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i> Sign in With--}}
{{--                                Facebook</a></li>--}}
{{--                                <li><a href="#" class="google"><i class="fa fa-google"></i> Sign in With Google</a></li>--}}
{{--                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i> Sign in With Twitter</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </section>
    <!-- Login Section End -->
@endsection
