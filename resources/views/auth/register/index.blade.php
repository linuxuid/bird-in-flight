@extends('layouts.app')

@section('links')
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/auth/register/index.css') }}">
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
            <p>
                <span>MYB&HYB</span> Больше всего здесь обсуждаются темы духовности и все что связано с программированием и кибер-безопасностью.
            </p>
            
            <div class="auth_links">
                <a href="{{ route('login.create.get') }}" target="_blank">Войти</a>
                |
                <a href="{{ route('register.create.get') }}" target="_blank">Регистрация</a>
            </div>
                <hr>
            <div class="userData">
                <span>Если есть какие-либо вопросы, используйте <a href="#" target="_blank">PGP-ключ</a></span>
                <br>
                <span>Если не знаете как создать свой PGP вот инструкция <a href="https://ciksiti.com/ru/chapters/10039-how-to-generate-pgp-keys-with-gpg" target="_blank">create a PGP-key</a></span>
                <br>
                <span>Ваш IP: 194.192.132.05</span>
            </div>
        </div>
    </main>
@endsection

@section('footer')
    <footer>
        <p>
            © Некоммерческий проект, он будет постоянно обновляться и дополняться, с целью служения другим людям, мы будем стараться найти самую важную информацию для вас.
           </p>
           <a href="#">Контакты</a>
    </footer>
@endsection
