<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FreeAds</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ route('search') }}">Recherche</a>
                @auth
                        <a href="{{ route('profil') }}">Profil</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <br>
                <div class="content">
                    @foreach($results as $result)
                        <div class="card" style="width: 18rem; border: 2px solid black;">
                            <img width="200" src="{{ str_replace("public", "storage", $result->img) }}" class="card-img-top" alt="Image annnonce">
                            <div class="card-body">
                                <h5 class="card-title">{{ $result->titre }}</h5>
                                <p class="card-text">{{ $result->prix }}€</p>
                                <a href="/annonce/{{ $result->id }}" class="btn btn-primary">Voir plus</a>
                            </div>
                        </div><br>
                    @endforeach
                </div>
        </div>
    </body>
</html>
