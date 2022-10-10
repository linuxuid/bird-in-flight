<!DOCTYPE html>
<html lang="en">
<head>        
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bird-In-Flight @yield('title')</title>
    @section('links')
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}"/>
    @show
</head>
<body>
    <div class="wrapper">
        @section('header')
            <header>
                <nav>
                    <div class="menu">
                            <a href="#" target="_blank">Духовность</a>
                            <a href="#" target="_blank">Анонимность</a>
                            <a href="#" target="_blank">Программирование</a>
                            <a href="#" target="_blank">Лента</a>
                            <a href="#" target="_blank">Отзывы</a>
                        @if (auth()->user())
                            <form action="{{ route('destroy.user', ['id' => auth()->user()->id]) }}" method="POST">
                                @csrf
                                <button>
                                    Выйти
                                </button>
                            </form>
                        @endif
                    </div>
                </nav>
            </header>
        @show

        @section('content')
            <main>
                <div class="left">
                    {{-- left --}}
                </div>
                <div class="content">
                    
                </div>
            </main>
        @show

        @section('footer')
            <footer>
                
            </footer>
        @show
    </div>
</body>
</html>