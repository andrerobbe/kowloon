<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SEO -->
    <meta name="author" content="Maurits Robbe">
    <meta name="description" content="Styleguide for Kowloon">
    <meta name="keywords" content="Kowloon, styleguide">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Styleguide Kowloon</title>    

    <!-- Styles -->
    <link href="{{ asset('css/styleguide.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />
</head>
<body>
    <div id="app">
        <header>
            <a href="/"><img src="/img/logo/kowloon-big.png" alt="kowloon logo"></a>
            <h1 class="heading h-l">Styleguide</h1>
        </header>

        <ul class="nav">
            <li><a href="#colors">Colors</a></li>
            <li><a href="#logo">Logo</a></li>
            <li><a href="#icons">Icons</a></li>
            <li><a href="#typography">Typography</a></li>
            <li><a href="#buttons">Buttons</a></li>
            <li><a href="/">Back to Kowloon</a></li>
        </ul>

        <main class="wrapper">
            <div id="colors">
                <h2 class="heading h-l">Colors</h2>

                <div>
                    <div class="colors accent">
                        <h3>Accent Colors</h3>
                        <div>
                            <div class="dog">#ff6f9e</div>
                            <div class="cat">#8787ff</div>
                            <div class="fish">#ffb93f</div>
                            <div class="bird">#7aff82</div>
                            <div class="hamster">#7ce3ff</div>
                            <div class="other">#ff3f3f</div>
                            <div class="btn-cookie">#e27500</div>
                            <div class="bg-cookie">#e6cfb9</div>
                        </div>
                    </div>
                    <div class="colors greyscale">
                        <h3>Greyscale</h3>
                        <div>
                            <div class="black">#000000</div>
                            <div class="bg-hamburger">#252525</div>
                            <div class="bg-nav">#323232</div>
                            <div class="bg-page">#454545</div>
                            <div class="bg-divider2">#535353</div>
                            <div class="bg-prod">#565656</div>
                            <div class="bg-divider">#616161</div>
                            <div class="bg-faq">#717171</div>
                            <div class="bg-slider">#828282</div>
                            <div class="nav-txt">#959595</div>
                            <div class="bg-placeholder">#b6b6b6</div>
                            <div class="sub-txt">#cecece</div>
                            <div class="bg-search-icon">#ededed</div>
                            <div class="bg-search">#f6f6f6</div>
                            <div class="white">#ffffff</div>

                        </div>
                    </div>
                    
                </div>
                

            </div>
            <div id="logo">
                <h2 class="heading h-l">Logo</h2>
                
            </div>
            <div id="icons">
                <h2 class="heading h-l">Icons</h2>
                
            </div>
            <div id="typography">
                <h2 class="heading h-l">Typography</h2>
                
            </div>
            <div id="buttons">
                <h2 class="heading h-l">Buttons</h2>
                
            </div>
        </main>        
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/styleguide.js') }}" defer></script>
</body>
</html>