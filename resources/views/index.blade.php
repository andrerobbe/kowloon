<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="//db.onlinewebfonts.com/c/f320547242a88bd9207eeb10e77b1d13?family=Choplin+Medium-DEMO" rel="stylesheet" type="text/css"/>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body class="{{ $_SERVER['REQUEST_URI'] === '/' ? 'index' : '' }}">
    <div id="app">
        <div class="cookie">

        </div>
        <div class="fade-out">
            <div class="nagivation">
                <nav>

                </nav>
            </div>
            <header>
                <div class="slideshow">
                    <div>
                        <img src="../img/header/party-dog.png" alt="A labrador dog that is in a party">
                        <img src="../img/header/dog-with-diving-glasses.png" alt="A dog that has swimming glasses equipped">
                    </div>
                </div>
            </header>

            <main>
                <div class="wrapper">
                    
                </div>
            </main>
        </div>     
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>