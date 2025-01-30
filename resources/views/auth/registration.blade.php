@extends('templates.template')

@section('content')
    <!-- Normal Breadcrumb Begin -->
    <section class="normal-breadcrumb set-bg" data-setbg="img/normal-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Войти</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Normal Breadcrumb End -->

    <!-- Signup Section Begin -->
    <section class="signup spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>Регистрация</h3>
                        <form action="{{route("register")}}" method="POST">
                            @csrf
                            <div class="input__item">
                                <input type="text" name="email" placeholder="Ваш email" value="{{old('email')}}">
                                <span class="icon_mail"></span>
                            </div>
                            <div class="input__item">
                                <input type="text" name="name" placeholder="Ваше имя" value="{{old('name')}}">
                                <span class="icon_profile"></span>
                            </div>
                            <div class="input__item">
                                <input type="password" name="password" placeholder="Пароль">
                                <span class="icon_lock"></span>
                            </div>
                            <div class="">
                                @if($errors->any())
                                    <p class = " text-white w-72">{{ $errors->first() }}</p>
                                @endif
                                @if($message ?? "")
                                    <p class="outline">{{ $message }}</p>
                                @endif
                            </div>
                            <button type="submit" class="site-btn">Зарегистрироваться</button>
                        </form>

                        <h5>Уже есть аккаунт? <a href="{{ route("login") }}">Войти!</a></h5>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login__social__links">
                        <h3>Войти с помощью:</h3>
                        <ul>
                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i> Войти через Facebook</a>
                            </li>
                            <li><a href="#" class="google"><i class="fa fa-google"></i> Войти через Google</a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i> Войти через Twitter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Signup Section End -->
@endsection
