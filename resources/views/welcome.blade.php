<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                margin: 0;
            }

            .wrap {
                align-items: center;
                min-height: 100%;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
            }
            .header {
                background: gray;
                text-align: left
            }

            .content {
                text-align: center;
            }

            .footer {
                background: gray;
                display: flex;
                justify-content: center
            }

            .title {
                font-size: 84px;
            }

            a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

        </style>
    </head>
    <body>
        <div class="wrap">
            <header class="header">
                    <a href="{{ url('/') }}">Top</a>
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            @endif
            </header>

            <div class="content">
                <div class="title m-b-md">
                    Laravel-Sample
                </div>
            </div>
            
            <footer class="footer">
                <div>
                    <a href="https://mogataro-nuxt-sample-app.herokuapp.com/">Nuxt-Sample-App</a>
                </div>
                <div>
                    <a href="https://mogataro.com/motoori/">Blog</a>
                </div>
                <div>
                    <a href="https://github.com/mogataro">GitHub</a>
                </div>
            </footer>
        </div>
    </body>
</html>
