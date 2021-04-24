<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('meta')
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/b6add834b6.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    @livewireScripts
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="{{ url('/js/baguetteBox/baguetteBox.css') }}" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    @livewireStyles
    @yield('personal-style')
    <title>Tennis Padel</title>
</head>
{{-- #202123 --}}
<style>
    body {
        -webkit-font-smoothing: antialiased;
        -webkit-backface-visibility: hidden;
        background-color: #141414;
    }


    .featurette-divider {
        background-color: #e3342f;
    }

    .anti-parpadeo {
        -webkit-font-smoothing: antialiased;
        -webkit-backface-visibility: hidden;
    }

    body::-webkit-scrollbar {
        width: 12px;
    }

    body::-webkit-scrollbar-track {
        background: black;
    }

    body::-webkit-scrollbar-thumb {
        background-color: #e3342f;
        border-radius: 20px;
        border: 3px solid;
    }

    /* Works on Firefox */
    body {
        scrollbar-width: thin;
        scrollbar-color: #e3342f black;
    }

    /* Works on Chrome, Edge, and Safari */
    *::-webkit-scrollbar {
        width: 15px;
    }

    *::-webkit-scrollbar-track {
        background: black;
    }

    *::-webkit-scrollbar-thumb {
        background-color: #e3342f;
        border-radius: 20px;
        border: 3px solid ;
    }

</style>

<body>
    @include('components.header')
    @yield('content')
    <script src="{{ url('/js/baguetteBox/baguetteBox.js') }}"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    @yield('personal-script')
    @yield('components.footer')
</body>

</html>
