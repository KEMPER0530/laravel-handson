<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

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
        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">

                </div>
            @endif

            <div class="content">
                @auth
                    <div class="title m-b-md">
                        Maintenance <br>Menu
                    </div>
                @else
                    <div class="title m-b-md">
                        akazawa portfolio <br>admin site
                    </div>
                @endauth
                <div class="links">
                    @auth
                        <a href="{{ url('/maintenance/home') }}">Home</a>
                        <a href="{{ url('/maintenance/profile') }}">Profile</a>
                        <a href="{{ url('/maintenance/work') }}">Work</a>
                        <a href="{{ url('/maintenance/crdcardinfo') }}">Card</a>
                        <a href="{{ url('/maintenance/logininfo') }}">User</a>
                        <a href="{{ url('/maintenance/tmpuserinfo') }}">Temporary user</a>
                        <a href="{{ url('/maintenance/accesslog') }}">Accesslog</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        <!-- @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif -->
                    @endauth
                </div>
            </div>
        </div>
    </body>
</html>
