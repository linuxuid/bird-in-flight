<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bird-In-Flight @yield('title')</title>
    @section('links')
        <link rel="stylesheet" href="{{ asset('/css/secondApp.css') }}">
    @show
</head>
<body>
    <div class="wrapper">
        @section('header')
            <header>
                <h2>
                    Bird In Flight
                </h2>
                <span>Свобода ~ Программирование ~ Личная безопасность</span>
                <div class="menu">
                    <a href="#">Духовность</a>
                        <span class="vertical-line">|</span>
                    <a href="#">Кибер-безопасность</a>
                        <span class="vertical-line">|</span>
                    <a href="{{ route('programming.index') }}">Программирование</a>
                        <span class="vertical-line">|</span>
                    <a href="#">Общие дискуссии</a>
                        <span class="vertical-line">|</span>
                    <a href="#">Отзывы</a>
                    @if (auth()->user())
                        <span class="vertical-line">|</span>
                            <a href="{{ route('personal.cabinet') }}" class="personal-area">Личный кабинет</a>    
                                <span class="vertical-line">|</span>
                            <a href="{{ route('destroy.user') }}" class="logout">Выйти</a>                        
                    @endif
                </div>
            </header>            
        @show

        @section('content')
            <main>
                <div class="left">

                </div>
                <div class="content">
                    content
                </div>
            </main>            
        @show

        @section('footer')
            <footer>
               <p>
                 © Некоммерческий проект, он будет постоянно обновляться и дополняться, с целью служения другим людям, мы будем стараться найти самую важную информацию для вас.
                </p>
                <a href="#">Прислать историю</a>
                    <span class="vertical-line">|</span>
                <a href="#">Контакты</a>
            </footer>            
        @show
    </div>
</body>
</html>