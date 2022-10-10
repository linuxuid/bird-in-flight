@extends('layouts.secondApp')

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
@endsection

@section('content')
<main>
    <div class="content">
        <h2>Структуры данных</h2>
    </div>
</main>            
@endsection
