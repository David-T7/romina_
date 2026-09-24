<header class="site-header">
    <div class="container nav-wrapper">

        <!-- Logo -->
        <a href="/" class="logo">
            <img src="{{ asset('images/logo/logo-romina-white.svg') }}" class="logo-white" width="160" height="50" alt="Romina Group">
            <img src="{{ asset('images/logo/logo-romina.svg') }}"       class="logo-navy"  width="160" height="50" alt="Romina Group">
        </a>

        <!-- Desktop Navigation -->
        <nav class="main-navigation">

            <a href="#about">About</a>

            <!-- Businesses Mega Menu -->
            <div class="nav-dropdown">
                <button class="dropdown-trigger">
                    Businesses
                    <span class="dropdown-arrow"><i class="fa-solid fa-chevron-down"></i></span>
                </button>

                <div class="mega-menu">

                    <div class="mega-menu-intro">
                        <span class="menu-label">OUR BUSINESSES</span>
                        <h3>Building businesses<br>that matter.</h3>
                        <p>
                            A diverse portfolio of businesses creating
                            long-term value across multiple industries.
                        </p>
                    </div>

                    <div class="mega-column">
                        <span class="column-title">
                            Restaurants &amp; Culinary Brands
                        </span>

                        <a href="#">
                            Restaurant Brands
                            <small>Explore <span><i class="fa-solid fa-arrow-right"></i></span></small>
                        </a>

                        <a href="#">
                            Hospitality
                            <small>Explore <span><i class="fa-solid fa-arrow-right"></i></span></small>
                        </a>

                        <a href="#">
                            Food &amp; Beverage
                            <small>Explore <span><i class="fa-solid fa-arrow-right"></i></span></small>
                        </a>
                    </div>

                    <div class="mega-column">
                        <span class="column-title">
                            Romina Coffee
                        </span>

                        <a href="#">
                            Our Coffee
                            <small>Explore <span><i class="fa-solid fa-arrow-right"></i></span></small>
                        </a>

                        <a href="#">
                            Coffee Shops
                            <small>Explore <span><i class="fa-solid fa-arrow-right"></i></span></small>
                        </a>

                        <a href="#">
                            Our Story
                            <small>Explore <span><i class="fa-solid fa-arrow-right"></i></span></small>
                        </a>
                    </div>

                    <div class="mega-column">
                        <span class="column-title">
                            Other Businesses
                        </span>

                        <a href="#">
                            Real Estate
                            <small>Explore <span><i class="fa-solid fa-arrow-right"></i></span></small>
                        </a>

                        <a href="#">
                            Investments
                            <small>Explore <span><i class="fa-solid fa-arrow-right"></i></span></small>
                        </a>

                        <a href="#">
                            Consumer Brands
                            <small>Explore <span><i class="fa-solid fa-arrow-right"></i></span></small>
                        </a>
                    </div>

                </div>
            </div>

            <a href="#sustainability">Sustainability</a>
            <a href="#careers">Careers</a>
            <a href="#news">News</a>
            <a href="#contact">Contact</a>

            <a href="#contact" class="talk-button">
                Let's Talk
            </a>

        </nav>

        <!-- Mobile Menu Button -->
        <button class="mobile-menu-button" id="menuOpen" aria-label="Open menu">
            <i class="fa-solid fa-bars"></i>
        </button>

    </div>
</header>


<!-- ==========================================
     MOBILE NAV OVERLAY
=========================================== -->

<div class="mobile-nav" id="mobileNav" aria-hidden="true">

    <div class="container mobile-nav-top">
        <a href="/" class="logo">
            <img src="{{ asset('images/logo/logo-romina-white.svg') }}" width="160" height="50" alt="Romina Group">
        </a>
        <button class="mobile-nav-close" id="menuClose" aria-label="Close menu">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>

    <nav class="container mobile-nav-links" aria-label="Mobile navigation">
        <a href="#about"          style="--d: 0ms">About</a>
        <a href="#businesses"     style="--d: 50ms">Businesses</a>
        <a href="#sustainability" style="--d: 100ms">Sustainability</a>
        <a href="#careers"        style="--d: 150ms">Careers</a>
        <a href="#news"           style="--d: 200ms">News</a>
        <a href="#contact"        style="--d: 250ms">Contact</a>
    </nav>

    <div class="container mobile-nav-brands">
        <span>Romina Restaurants</span>
        <span>KOBA</span>
        <span>Meskott</span>
        <span>Romina Coffee</span>
        <span>Romina Imports</span>
        <span>Jaquar World</span>
    </div>

    <div class="container mobile-nav-foot">
        <a href="mailto:info@rominaplc.com">info@rominaplc.com</a>
    </div>

</div>
