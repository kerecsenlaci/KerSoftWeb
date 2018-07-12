<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                margin-top: 100px
            }

            .title {
                font-size: 64px;
            }

            .subtitle {
                font-size: 34px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .box{
                width: 70%;
                margin: 0 auto;
                padding-top: 30px;
                font-size: 14px;
                text-align: justify;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Főoldal</a>
                    @else
                        <a href="{{ route('login') }}">Bejelentkezés</a>
                        <a href="{{ route('register') }}">Regisztráció</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    KerSoft Kft.
                </div>
                <div class="subtitle m-b-md">
                    Üdvüzöljük a<br>
                    Szervíz oldalunkon.
                </div>
                <div class="links">
                    <a class="nav-link" href="{{url('/news')}}">Hírek</a>
                    <a class="nav-link" href="{{url('/gyik')}}">Gyakori kérdések</a>
                    <a class="nav-link" href="{{url('/error_report')}}">Hiba bejelentés</a>
                    <a class="nav-link" href="{{url('/system_expansion')}}">Rendszerbővítés</a>
                    <a class="nav-link" href="{{url('/offer_request')}}">Ajánlatkérés / Új ügyfél</a>
                </div>
                <div class="box">
                    Route groups may also be used to handle sub-domain routing. Sub-domains may be assigned route parameters just like route URIs, allowing you to capture a portion of the sub-domain for usage in your route or controller. The sub-domain may be specified by calling the domain method before defining the group:Remember, by default, the RouteServiceProvider includes your route files within a namespace group, allowing you to register controller routes without specifying the full App\Http\Controllers namespace prefix. So, you only need to specify the portion of the namespace that comes after the base App\Http\Controllers namespace.Route groups allow you to share route attributes, such as middleware or namespaces, across a large number of routes without needing to define those attributes on each individual route. Shared attributes are specified in an array format as the first parameter to the Route::group method.
                </div>
            </div>
        </div>
    </body>
</html>
