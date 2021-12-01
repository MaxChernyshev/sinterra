<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Starter Kit</title>

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/front/css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body class="antialiased">
{{--<div class="relative flex items-top justify-center h-16">--}}
{{--    @if (Route::has('login'))--}}
{{--        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">--}}
{{--            @auth--}}
{{--                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>--}}
{{--            @else--}}
{{--                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>--}}

{{--                @if (Route::has('register'))--}}
{{--                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>--}}
{{--                @endif--}}
{{--            @endauth--}}
{{--        </div>--}}
{{--    @endif--}}
{{--</div>--}}


<div class="container-fluid header pt-5">
    <div class="row mx-auto">
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
            <a href="{{ route('mainPage') }}">
                <img src="{{ asset('img/logo-energy.png') }}" alt="">
            </a>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
            <ul class="list-unstyled text-white">
                <li>
                    <i class="fa fa-mobile"></i>
                    +79505303900<br>
                </li>
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:#" class="text-white">info@sinterra.info</a>
                </li>
                <li>
                    <i class="fal fa-alarm-clock"></i>
                    График работы:<br>Пн-Пт, 9:00 – 18:00
                </li>
            </ul>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <form class="form-inline input-group">
                <input class="form-control input-search-field" type="search" placeholder="Поиск" aria-label="Search">
                <button class="btn search-button" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </button>
            </form>
        </div>
    </div>

    <div class="row mx-auto">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="border: 1px solid white; width: 50px">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg"
                             width="16"
                             height="16"
                             fill="white"
                             class="bi bi-list"
                             viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link  text-white" href="{{ route('jobtypes.index') }}">Виды работ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-white" href="#">Наши работы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-white" href="#">О нас</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-white" href={{ route('contact-form') }}>Контакты</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>


</body>
</html>
