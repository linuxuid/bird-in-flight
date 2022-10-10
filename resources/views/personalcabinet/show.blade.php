<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bird In Flight - Personal Cabinet</title>
    <link rel="stylesheet" href="{{ asset('/css/personalcabinet/show.css') }}">
</head>
<body>
    <div class="wrapper">
        <header>
            <div class="menu">
                <a href="#">link1</a>
                <a href="#">link2</a>
                <a href="#">link3</a>
                <a href="#">link4</a>
                <a href="#">link5</a>
            </div>
        </header>

        <main class="container">
                <div class="pgp-key">
                    <form method="POST" action="">
                        @csrf
                        <textarea> Добавить PGP-ключ</textarea>
                    </form>
                </div>
                <div class="change-data">
                    
                </div>
                <div class="personal-contacts">
                    
                </div>
        </main>
    </div>
</body>
</html>