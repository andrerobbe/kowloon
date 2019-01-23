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
            <h1 class="heading h-l">Styleguide</h1>
            <a href="/"><img src="/img/logo/kowloon-big.png" alt="kowloon logo"></a>
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
                        <div class="flex">
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
                        <div class="flex">
                            <div class="w black">#000000</div>
                            <div class="w bg-hamburger">#252525</div>
                            <div class="w bg-nav">#323232</div>
                            <div class="w bg-page">#454545</div>
                            <div class="w bg-divider2">#535353</div>
                            <div class="w bg-prod">#565656</div>
                            <div class="w bg-divider">#616161</div>
                            <div class="w bg-faq">#717171</div>
                            <div class="w bg-slider">#828282</div>
                            <div class="b nav-txt">#959595</div>
                            <div class="b bg-placeholder">#b6b6b6</div>
                            <div class="b sub-txt">#cecece</div>
                            <div class="b bg-search-icon">#ededed</div>
                            <div class="b bg-search">#f6f6f6</div>
                            <div class="b white">#ffffff</div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="logo">
                <h2 class="heading h-l">Logo</h2>
                <div class="logos">
                    <div class="flex">
                        <img src="/img/logo/kowloon-big.png" alt="kowloon logo">
                        <img src="/img/logo/kowloon.png" alt="kowloon logo" class="kowloon">
                    </div>
                    <div class="flex">
                        <img src="/img/logo/logo.png" alt="kowloon logo">
                        <img src="/img/logo/logo-dogs.png" alt="kowloon logo">
                        <img src="/img/logo/logo-cats.png" alt="kowloon logo">
                        <img src="/img/logo/logo-fish.png" alt="kowloon logo">
                        <img src="/img/logo/logo-birds.png" alt="kowloon logo">
                        <img src="/img/logo/logo-small-animals.png" alt="kowloon logo">
                    </div>
                </div>
                
            </div>
            <div id="icons">
                <h2 class="heading h-l">Icons</h2>
                <div class="icons flex">
                    <div class="sprite-big dog"></div>
                    <div class="sprite-big cat"></div>
                    <div class="sprite-big fish"></div>
                    <div class="sprite-big bird"></div>
                    <div class="sprite-big hamster"></div>
                    <div class="sprite-big plus"></div>
                </div>
                <div class="code">
<xmp>
<div class="sprite-big dog"></div>
<div class="sprite-big cat"></div>
<div class="sprite-big fish"></div>
<div class="sprite-big bird"></div>
<div class="sprite-big hamster"></div>
<div class="sprite-big plus"></div>

To make the icon white add a filter:
<div class="sprite-big dog" style="filter: brightness(10) saturate(0);"></div>
</xmp>
                </div>
                <div class="icons flex small">
                    <div class="sprite hamburger"></div>
                    <div class="sprite search"></div>
                    <div class="sprite faq"></div>
                    <div class="sprite break"></div>
                    <div class="sprite clear"></div>
                    <div class="sprite esc"></div>
                    <div class="sprite mail"></div>
                </div>                
                <div class="code">
<xmp>
<div class="sprite hamburger"></div>
<div class="sprite search"></div>
<div class="sprite faq"></div>
<div class="sprite break"></div>
<div class="sprite clear"></div>
<div class="sprite esc"></div>
<div class="sprite mail"></div>
</xmp>
                </div>
            </div>
            <div id="typography">
                <h2 class="heading h-l">Typography</h2>
                <p class="font-title">The font used for headings is Choplin Demo</p>
                <p class="font-txt">The font used for regular text is Arial</p>
                <div>
                    <h3 class="heading h-xl uppercase">H1 44 pixels</h1>
                    <h3 class="heading h-xl">H1 44 pixels</h1>
                    <h3 class="heading h-xl font-txt">Arial 44px</h1>
                    <h3 class="heading h-l">H2 40px</h1>
                    <h3 class="heading h-ml">H3 26px</h1>
                    <h3 class="heading h-m">H1 20px</h1>
                    <p class="nav-m align-center">Nav 22px</p>
                    <p class="btn-m align-center">Button 18.97px</p>
                    <p class="txt-xxl align-right">Txt 20px</p>
                    <p class="txt-xl align-right">Txt 16px</p>
                    <p class="txt-l align-right">Txt 15px</p>
                    <p class="txt-m align-right">Txt 14px</p>   
                    <p class="txt-m font-title align-right">Choplin 14px</p>   
                </div>
                <div class="code">
<xmp>
<p class="font-title">The font used for headings is Choplin Demo</p>
<p class="font-txt">The font used for regular text is Arial</p>


<h3 class="heading h-xl uppercase">H1 44 pixels</h1>
<h3 class="heading h-xl">H1 44 pixels</h1>
<h3 class="heading h-xl font-txt">Arial 44px</h1>
<h3 class="heading h-l">H2 40px</h1>
<h3 class="heading h-ml">H3 26px</h1>
<h3 class="heading h-m">H1 20px</h1>

<p class="nav-m align-center">Nav 22px</p>
<p class="btn-m align-center">Button 18.97px</p>

<p class="txt-xxl align-right">Txt 20px</p>
<p class="txt-xl align-right">Txt 16px</p>
<p class="txt-l align-right">Txt 15px</p>
<p class="txt-m align-right">Txt 14px</p>   
<p class="txt-m font-title align-right">Choplin 14px</p> 
</xmp>
                </div>
                
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