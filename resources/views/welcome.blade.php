<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Orizon | Agua mineral natural de manantial</title>
        <link rel="shortcut icon" href="img/favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900,900i" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
        <link rel="stylesheet" href=" {{asset('css/bootstrap.min.css')}} ">
        <link rel="stylesheet" href=" {{asset('css/bootstrap.css')}} ">
        <link rel="stylesheet" href=" {{asset('css/botones.css')}} ">
        <link rel="stylesheet" href=" {{asset('css/estilo.css')}} ">

        @yield('styles')

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-168566389-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-168566389-1');
        </script>


    </head>
    <body>
        <div id="load-overlay" class="overlay"></div>
        @include('includes.nav-bar')

        {{-- @include('includes.header')
        @include('includes.que-es') --}}
        @yield('content')
        @include('includes.footer')
        {{-- @include('includes.legales') --}}
        {{-- @include('botones-botella') --}}
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script src=" {{asset('js/jquery.min.js')}} "></script>
        <script src=" {{asset('js/bootstrap.min.js')}} "></script>
        <script src=" {{asset('js/home.js')}} "></script>
        @yield('scripts')


    </body>
    </html>

