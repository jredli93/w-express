<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">

    <title>West Express</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/popular/flaticon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/business/flaticon.css') }}">
    <!-- MapBox -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet' />

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lity.css') }}" rel="stylesheet">
    <link rel="shortcut icon" type="image/jpg" href="/assets/images/favicon.ico" />
</head>

<body class="{{ (Request::is('contact') ? 'gradient-background' : '') }}">

    @yield('header')
    @yield('content')
    @yield('footer')

    <div class="overlay overlay-slidedown">
        <i class="fas fa-times close-button"></i>
        <nav>
            <ul>
                <li><a href="{{ URL::route('home') }}">Home</a></li>
                <li><a href="{{ URL::route('about-us') }}">About</a></li>
                <li><a href="{{ URL::route('services') }}">Services</a></li>
                <li><a href="{{ URL::route('careers') }}">Careers</a></li>
                <li><a href="{{ URL::route('contact') }}">Contact</a></li>
            </ul>
        </nav>
    </div>

    <!-- Scripts -->
    <script src="http://code.jquery.com/jquery.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://kit.fontawesome.com/5abe40685b.js" crossorigin="anonymous"></script>
    <script>
        $(function() {
                AOS.init();
            });
    </script>
    <script src="{{ asset('js/aos.js') }}" defer></script>
    <script src="{{ asset('js/lity.js') }}" defer></script>
    <script src="{{ asset('js/mobile-menu.js') }}" defer></script>
    <script src="{{ asset('js/map.js') }}" defer></script>
</body>

</html>