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
        <!-- Header -->
        <header>
            <h1 class="heading h-l">Styleguide</h1>
            <a href="/"><img src="/img/logo/kowloon-big.png" alt="kowloon logo"></a>
        </header>
        
        <!-- Navigation -->
        <ul class="nav">
            <li><a href="#colors">Colors</a></li>
            <li><a href="#logo">Logo</a></li>
            <li><a href="#icons">Icons</a></li>
            <li><a href="#typography">Typography</a></li>
            <li><a href="#buttons">Buttons</a></li>
            <li><a href="#input">Input</a></li>
            <li><a href="/">Back to Kowloon</a></li>
        </ul>

        <main class="wrapper">



            <!-- Colors -->
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



            <!-- Logo -->
            <div id="logo">
                <h2 class="heading h-l">Logo</h2>
                <p>You can use the following logos. Note that the 'K' logo color depends on the animal category and can only be used within the right category. For example the purple K can only be used on pages about dogs.</p>
                <div class="logos margin-top">
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



            <!-- Icons -->
            <div id="icons">
                <h2 class="heading h-l">Icons</h2>
                <p>We use these icons to display the animal categories.</p>
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
<div class="sprite-big dog">    </div>
<div class="sprite-big cat">    </div>
<div class="sprite-big fish">   </div>
<div class="sprite-big bird">   </div>
<div class="sprite-big hamster"></div>
<div class="sprite-big plus">   </div>

To make the icon white, add a filter
<div class="sprite-big dog" style="filter: brightness(10) saturate(0);"></div>
</xmp>
                </div>
                <p class="margin-top">These icons are used for navigation purposes.</p>
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
<div class="sprite hamburger">  </div>
<div class="sprite search">     </div>
<div class="sprite faq">        </div>
<div class="sprite break">      </div>
<div class="sprite clear">      </div>
<div class="sprite esc">        </div>
<div class="sprite mail">       </div>
</xmp>
                </div>
            </div>



            <!-- Typography -->
            <div id="typography">
                <h2 class="heading h-l">Typography</h2>
                <p class="font-title">The font used for headings is Choplin Demo</p>
                <p class="font-txt">The font used for regular text is Arial</p>
                <div class="margin-top">
                    <h3 class="heading h-xl uppercase">H1 44 pixels</h1>
                    <h3 class="heading h-xl">H1 44 pixels</h1>
                    <h3 class="heading h-xl font-txt">Arial 44px</h1>
                    <h3 class="heading h-l">H2 40px</h1>
                    <h3 class="heading h-ml">H3 26px</h1>
                    <h3 class="heading h-m">H4 20px</h1>
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


<h3 class="heading h-xl uppercase">         H1 44 pixels    </h1>
<h3 class="heading h-xl">                   H1 44 pixels    </h1>
<h3 class="heading h-xl font-txt">          Arial 44px      </h1>
<h3 class="heading h-l">                    H2 40px         </h1>
<h3 class="heading h-ml">                   H3 26px         </h1>
<h3 class="heading h-m">                    H4 20px         </h1>

<p class="nav-m align-center">              Nav 22px        </p>
<p class="btn-m align-center">              Button 18.97px  </p>

<p class="txt-xxl align-right">             Txt 20px        </p>
<p class="txt-xl align-right">              Txt 16px        </p>
<p class="txt-l align-right">               Txt 15px        </p>
<p class="txt-m align-right">               Txt 14px        </p>   
<p class="txt-m font-title align-right">    Choplin 14px    </p> 
</xmp>
                </div>
                
            </div>



            <!-- Buttons -->
            <div id="buttons">
                <h2 class="heading h-l">Buttons</h2>
                <p>The color of the button depends on which page you're on.</p>
                <div class="flex">
                    <button class="btn btn-primary">Regular Button</button>
                    <button class="btn btn-primary btn-cookie">Cookie Button</button>
                </div>
                <div class="flex margin-top">
                    <button class="btn btn-primary dog">Dog Button</button>
                    <button class="btn btn-primary cat">Cat Button</button>
                    <button class="btn btn-primary fish">Fish Button</button>
                    <button class="btn btn-primary bird">Bird Button</button>
                    <button class="btn btn-primary hamster">Hamster Button</button>
                    <button class="btn btn-primary other">Other Button</button>                    
                </div>
                <div class="code">
<xmp>
<button class="btn btn-primary">            Regular Button  </button>
<button class="btn btn-primary btn-cookie"> Cookie Button   </button> //uses transparent BG on hover
<button class="btn btn-primary dog">        Dog Button      </button>
<button class="btn btn-primary cat">        Cat Button      </button>
<button class="btn btn-primary fish">       Fish Button     </button>
<button class="btn btn-primary bird">       Bird Button     </button>
<button class="btn btn-primary hamster">    Hamster Button  </button>
<button class="btn btn-primary other">      Other Button    </button>


CSS used on buttons above:

button {
    display: block;
    margin: 10px 0;
    width: 250px;
    height: 50px;
}

</xmp>
                </div>
            </div>



            <!-- Input -->
            <div id="input">
                <h2 class="heading h-l">Input</h2>

                <!-- Checkboxes -->
                <div class="checkboxes">
                    <h3>Checkboxes</h3>
                    <div class="article-filters">
                        <h4>Checkboxes Regular</h4>
                        <section class="categories">
                            <label class="checkbox">Checked
                                <input type="checkbox" checked="">
                                <span class="checkmark"></span>
                            </label>
                            <label class="checkbox">Not Checked
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </section>
                    </div>
                    <div class="checkbox-grid">
                        <div class="article-filters dog">
                            <h4>Checkboxes Dog Pages</h4>
                            <section class="categories">
                                <label class="checkbox">Checked
                                    <input type="checkbox" checked="">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="checkbox">Try Hovering
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </section>
                        </div>
                        <div class="article-filters cat">
                            <h4>Checkboxes Cat Pages</h4>
                            <section class="categories">
                                <label class="checkbox">Checked
                                    <input type="checkbox" checked="">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="checkbox">Try Hovering
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </section>
                        </div>
                        <div class="article-filters fish">
                            <h4>Checkboxes Fish Pages</h4>
                            <section class="categories">
                                <label class="checkbox">Checked
                                    <input type="checkbox" checked="">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="checkbox">Try Hovering
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </section>
                        </div>
                        <div class="article-filters bird">
                            <h4>Checkboxes Bird Pages</h4>
                            <section class="categories">
                                <label class="checkbox">Checked
                                    <input type="checkbox" checked="">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="checkbox">Try Hovering
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </section>
                        </div>
                        <div class="article-filters hamster">
                            <h4>Checkboxes Hamster Pages</h4>
                            <section class="categories">
                                <label class="checkbox">Checked
                                    <input type="checkbox" checked="">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="checkbox">Try Hovering
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </section>
                        </div>
                        <div class="article-filters other">
                            <h4>Checkboxes Other Pages</h4>
                            <section class="categories">
                                <label class="checkbox">Checked
                                    <input type="checkbox" checked="">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="checkbox">Try Hovering
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="code">
<xmp>
Change the class 'dog' in the div accordingly to: cat, fish, bird, hamster, other

<div class="article-filters dog">
    <section class="categories">
        <label class="checkbox">Checked
            <input type="checkbox" checked="">
            <span class="checkmark"></span>
        </label>
        <label class="checkbox">Not Checked
            <input type="checkbox">
            <span class="checkmark"></span>
        </label>
    </section>
</div>
</xmp>
                </div>


                <!-- Priceslider -->
                <h3 class="margin-top">Price slider</h3>
                <div class="price-slider">
                    <section class="range-slider">
                        <input value="8" min="8" max="499" step="1" type="range">
                        <input value="499" min="8" max="499" step="1" type="range">
                        <div class="values">
                            <div class="val-1"><span class="euro-sign">&euro;</span><span class="rangeValue-1"></span></div> - <div class="val-2"><span class="euro-sign">&euro;</span><span class="rangeValue-2"></span></div>
                        </div>
                    </section>
                </div>
                <div class="code">
<xmp>
<div class="price-slider">
    <section class="range-slider">
        <input value="8" min="8" max="499" step="1" type="range">
        <input value="499" min="8" max="499" step="1" type="range">
        <div class="values">
            <div class="val-1">
                <span class="euro-sign">&euro;</span><span class="rangeValue-1"></span>
            </div>
             - 
             <div class="val-2">
                <span class="euro-sign">&euro;</span><span class="rangeValue-2"></span>
            </div>
        </div>
    </section>
</div>
</xmp>
                </div>
                
                <!-- Select Box -->
                <h3 class="margin-top">Select Options</h3>
                <div class="code">
<xmp>
<div class="select-box">
    <select>
        <option>Sort by relevance</option>
        <option>Price: low to high</option>
        <option>Price: high to low</option>
        <option>Latest</option>
        <option>Oldest</option>
    </select>
</div>
</xmp>
                </div>
                <div class="select-box">
                    <select>
                        <option>Sort by relevance</option>
                        <option>Price: low to high</option>
                        <option>Price: high to low</option>
                        <option>Latest</option>
                        <option>Oldest</option>
                    </select>
                </div>
            </div>
            <!-- End of Input -->
        </main>
    </div>


    <!-- Scripts -->
    <script src="{{ asset('js/styleguide.js') }}" defer></script>
</body>
</html>