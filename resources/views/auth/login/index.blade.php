@extends('layouts.app')

@section('links')
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/auth/register/index.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/auth/form/form.css') }}">
@endsection

@section('header')
<header>
    <nav>
        <div class="menu">
            <a href="#" target="_blank">Духовность</a>
            <a href="#" target="_blank">Анонимность</a>
            <a href="#" target="_blank">Программирование</a>
            <a href="#" target="_blank">Лента</a>
            <a href="#" target="_blank">Отзывы</a>
        </div>
    </nav>
</header>
@endsection

@section('content')
    <main>
        <div class="content">
            <h2>
                Make Yourself better & Hide Your Secrets
            </h2>
            <img src="/image/auth/anon-reg.png" alt="anon-reg.png">
            <div class="auth_links">
                <span>Нет аккаунта?</span>
                <a href="{{ route('register.create.get') }}" target="_blank">Зарегистрироваться</a>
            </div>
                <hr>
                
                <div class="error_reporting">
                    @if ($errors->any())
                        <div class="errorReporting">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>    
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            
            <h3>Авторизация</h3>
            <form action="{{ route('login.store.post') }}" method="POST">
                @csrf
                <label for="name">
                    Логин:
                </label>
                <input type="text" name="login" placeholder="псевдоним" value="{{ old('login') }}">

                <label for="password">
                    Пароль:
                </label>
                <input type="password" name="password" placeholder="пароль">

                <button>
                    Войти
                </button>
            </form>
        </div>
    </main>
@endsection

@section('footer')
    
@endsection