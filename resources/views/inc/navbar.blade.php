<!-- mobile hamburger -->
<div id="mobile-menu" class="sprite hamburger">
    <a></a>
</div>
<!-- -->

<nav class="navbar-vertical">
    <ul class="navbar">
        <li id="nav-burger" class="sprite hamburger">
            <a></a>
        </li>
        <li id="nav-search" class="sprite search">
            <a>Search</a>
        </li>
        <li id="nav-faq" class="sprite faq">
            <a>FAQ</a>
        </li>
        <li>
            <div class="divider"></div>
        </li>
        <div class="nav-animals">
            <li class="sprite dog {{ $_SERVER['REQUEST_URI'] === '/dogs' ? 'active' : '' }}">
                <a href="/dogs">Dogs</a>
            </li>
            <li class="sprite cat {{ $_SERVER['REQUEST_URI'] === '/cats' ? 'active' : '' }}">
                <a href="/cats">Cats</a>
            </li>
            <li class="sprite fish {{ $_SERVER['REQUEST_URI'] === '/fish' ? 'active' : '' }}">
                <a href="/fish">Fish</a>
            </li>
            <li class="sprite bird {{ $_SERVER['REQUEST_URI'] === '/bird' ? 'active' : '' }}">
                <a href="/birds">Birds</a>
            </li>
            <li class="sprite hamster {{ $_SERVER['REQUEST_URI'] === '/small-animals' ? 'active' : '' }}">
                <a href="/small-animals">Small Animal</a>
            </li>
        </div>
    </ul>
    <ul id="navbar-logo">
        <!-- small logo -->
        @if     ( $_SERVER['REQUEST_URI'] === '/dogs' )
        <li><a href="/"><img src="/img/logo/logo-dogs.png" alt="Kowloon Logo"></a></li>

        @elseif ( $_SERVER['REQUEST_URI'] === '/cats' )
        <li><a href="/"><img src="/img/logo/logo-cats.png" alt="Kowloon Logo"></a></li>

        @elseif ( $_SERVER['REQUEST_URI'] === '/fish' )
        <li><a href="/"><img src="/img/logo/logo-fish.png" alt="Kowloon Logo"></a></li>

        @elseif ( $_SERVER['REQUEST_URI'] === '/birds' )
        <li><a href="/"><img src="/img/logo/logo-birds.png" alt="Kowloon Logo"></a></li>

        @elseif ( $_SERVER['REQUEST_URI'] === '/small-animals' )
        <li><a href="/"><img src="/img/logo/logo-other.png" alt="Kowloon Logo"></a></li>

        @else
        <li><a href="/"><img src="/img/logo/logo.png" alt="Kowloon Logo"></a></li>
        @endif

        <!-- long logo -->
        <li id="logo-long"><a href="/"><img src="/img/logo/kowloon.png" alt="Kowloon Logo" class="inactive"></a></li>
    </ul>
</nav>
