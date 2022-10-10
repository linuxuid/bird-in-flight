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
                <span>Уже зарегистрированы?</span>
                <a href="{{ route('login.create.get') }}" target="_blank">Войти</a>
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
            
            <h3>Регистрация</h3>
            <form action="{{ route('register.store.post') }}" method="POST">
                @csrf
                <label for="name">
                    Псевдоним(будет виден на сайте):
                </label>
                <input type="text" name="name" placeholder="псевдоним" value="{{ old('name') }}">

                <label for="name">
                    Логин(для входа):
                </label>
                <input type="text" name="login" placeholder="псевдоним" value="{{ old('name') }}">


                <label for="secret_word">
                    Придумайте секретное слово:
                </label>
                <input type="password" name="secret_word" placeholder="секретное слово" value="{{ old('secret_word') }}">

                <label for="password">
                    Пароль:
                </label>
                <input type="password" name="password" placeholder="пароль">

                <label for="password_confirmation">
                    Подтвердить:
                </label>
                <input id="password" type="password" placeholder="Подтвердить пароль" name="password_confirmation" required>

                <button>
                    Регистрация
                </button>
                <input type="hidden" name="remember_token">
            </form>
        </div>
    </main>
@endsection

@section('footer')
    
@endsection