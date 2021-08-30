<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="./js/jquery.min.js?var=3.6.0"></script>
    {{-- <script src="{{ asset('js/app.js') }}" defer></script>s --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <!-- 開発バージョン -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/vue@2"></script><!-- 本番バージョン --> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/reset.min.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="{{ asset('css/my.css') }}" rel="stylesheet">


    <!-- ヘッダーStyles -->
    <style>
        #header {
            width: 100%;
            background: #333;
        }

        #header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #fff;
            text-align: center;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        #header.fixed {
            position: fixed;
            z-index: 999;
            top: 0;
            left: 0;
        }

        #g-navi {
            list-style: none;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        #g-navi li a {
            text-decoration: none;
            color: #666;
            padding: 10px;
        }

    </style>
    <script type="module">
        $(function() {
            if ($('#header').length) {
                var headerH = $('#header').offset().top;

                function FixedAnime() {
                    var scroll = $(window).scrollTop();
                    if (scroll >= headerH) {
                        $('#header').addClass('fixed');
                    } else {
                        $('#header').removeClass('fixed');
                    }
                }

                $(window).scroll(function() {
                    FixedAnime();
                });
                $(window).on('load', function() {
                    FixedAnime();
                });
            }
        });
    </script>
</head>

<body>
    <div id="splash">
        <div id="splash-logo">
            読み込み中
        </div>
    </div>
    <div class="splashbg" id="splashbg"></div>
    <div id="container">
        @php
            if (empty($background_type)) {
                $background_type = 'note';
            }
        @endphp
        @include('layouts.background',['background_type' => $background_type])

        <div id="header-contents">
            <div id="app">
                <nav id="header-nav" class="navbar navbar-expand-md navbar-light shadow-sm"
                    style="background-color:rgba(255,255,255,0.1); backdrop-filter:blur(3px); -webkit-backdrop-filter:blur(3px);">
                    <div class="container">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{-- {{ config('app.name', 'Laravel') }} --}}
                            <style>
                                .title_logo_navbar {
                                    height: 1.875rem;
                                    /* 1.35 x 1.5 */
                                    width: auto
                                }

                            </style>
                            <img class="title_logo_navbar" src="{{ url('/') }}/img/logo_demo.png" alt="">
                        </a><button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="{{ __('Toggle navigation') }}"><span
                                class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav me-auto"></ul>
                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ms-auto">
                                <!-- Authentication Links -->
                            @guest @if (Route::has('login'))<li class="nav-item"><a class="nav-link"href="{{ route('login') }}">{{ __('Login') }}</a></li>@endif @if (Route::has('register'))<li class="nav-item"><a class="nav-link"href="{{ route('register') }}">{{ __('Register') }}</a></li>@endif @else <li class="nav-item dropdown"><a
                                        id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        v-pre>{{ Auth::user()->name }} </a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"><a
                                            class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }} </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">@csrf </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
            @if (isset($XXXXXXXXXXXXXXXXXXXX))
                <header id="header">
                    <div class="container">
                        <div class="d-flex align-items-center">
                            <img src="./img/man.png" alt="" style="width:1.5rem; height:1.5rem;">
                            <h5 class="my-0 mx-2" style="line-height: 0;vertical-align: middle;">NAME</h5>
                            <p class="my-0">さん</p>
                        </div>
                        <nav>
                            <ul id="g-navi">
                                <li><a href="#area-1">Area1</a></li>
                                <li><a href="#area-2">Area2</a></li>
                            </ul>
                        </nav>
                    </div>
                </header>
            @endif

            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </div>
    <script>
        $(window).on('load', function() {
            var firstView = false;
            if (firstView) {
                var delayTime1 = 1200,
                    delayTime2 = 1500
                $("#splash-logo").delay(1200).fadeOut('slow');
                $("#splash").delay(1500).fadeOut('slow', function() {
                    $('body').addClass('appear');
                });
            } else {
                // document.getElementById("splash").style.opacity = 0;
                document.getElementById("splashbg").style.opacity = 0;
                $('#splash').fadeOut();
                $('body').addClass('appear');
            }
        });
    </script>
</body>

</html>
