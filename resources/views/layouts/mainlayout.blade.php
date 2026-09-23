<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Business Group</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
        rel="stylesheet"
    >

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body>

<header class="site-header">
    <div class="container nav-wrapper">

        <!-- Logo -->
        <a href="/" class="logo">
            <img src="{{ asset('images/logo/logo-white.png') }}" alt="">
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
                            Restaurants & Culinary Brands
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
                            Food & Beverage
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
        <button class="mobile-menu-button" aria-label="Open menu">
            <span></span>
            <span></span>
            <span></span>
        </button>

    </div>
</header>


<main>

    <!-- ==========================================
         HERO
    =========================================== -->

    <section class="hero">

        <!-- Slides -->
        <div class="hero-slides">

            <!-- Slide 01 -->
            <div class="hero-slide active">

                <div class="hero-background"
                     style="background-image:
                     url('{{ asset('images/hero/hero-01.jpg') }}');">
                </div>

                <div class="hero-overlay"></div>

                <div class="container hero-content">

                    <div class="hero-category">
                        BUSINESS GROUP
                    </div>

                    <h1>
                        Building businesses<br>
                        <span>that shape tomorrow.</span>
                    </h1>

                    <p>
                        We build, grow and invest in businesses that create
                        lasting value for people, communities and the future.
                    </p>

                    <a href="#businesses" class="hero-link">
                        Discover our businesses
                        <span><i class="fa-solid fa-arrow-right"></i></span>
                    </a>

                </div>

            </div>


            <!-- Slide 02 -->
            <div class="hero-slide">

                <div class="hero-background"
                     style="background-image:
                     url('{{ asset('images/hero/hero-02.jpg') }}');">
                </div>

                <div class="hero-overlay"></div>

                <div class="container hero-content">

                    <div class="hero-category">
                        OUR BUSINESSES
                    </div>

                    <h1>
                        Creating brands<br>
                        <span>people love.</span>
                    </h1>

                    <p>
                        From hospitality and food to emerging ventures,
                        our businesses are built around quality, experience
                        and meaningful connections.
                    </p>

                    <a href="#businesses" class="hero-link">
                        Explore our businesses
                        <span><i class="fa-solid fa-arrow-right"></i></span>
                    </a>

                </div>

            </div>


            <!-- Slide 03 -->
            <div class="hero-slide">

                <div class="hero-background"
                     style="background-image:
                     url('{{ asset('images/hero/hero-03.jpg') }}');">
                </div>

                <div class="hero-overlay"></div>

                <div class="container hero-content">

                    <div class="hero-category">
                        OUR VISION
                    </div>

                    <h1>
                        Growth with<br>
                        <span>purpose.</span>
                    </h1>

                    <p>
                        We believe successful businesses should create
                        positive impact while delivering sustainable,
                        long-term growth.
                    </p>

                    <a href="#sustainability" class="hero-link">
                        Our approach
                        <span><i class="fa-solid fa-arrow-right"></i></span>
                    </a>

                </div>

            </div>

        </div>


        <!-- ==========================================
             HERO CONTROLS
        =========================================== -->

        <div class="container hero-controls">

            <!-- Counter -->
            <div class="slide-counter">
                <span class="current-slide">01</span>
                <span class="counter-divider">/</span>
                <span>03</span>
            </div>


            <!-- Progress Line -->
            <div class="slide-progress">

                <div class="progress-line">
                    <div class="progress-active"></div>
                    <span class="progress-dot"></span>
                </div>

            </div>


            <!-- Arrows -->
            <div class="slide-arrows">

                <button class="slide-arrow prev-slide"
                        aria-label="Previous slide">
                    ←
                </button>

                <button class="slide-arrow next-slide"
                        aria-label="Next slide">
                    →
                </button>

            </div>

        </div>

    </section>


    <!-- ==========================================
         ABOUT
    =========================================== -->

    <section id="about" class="content-section about-section">

        <div class="container two-column">

            <div>
                <span class="section-label">ABOUT US</span>

                <h2>
                    <span>Welcome to</span><br>
                    Romina Group.
                </h2>
            </div>

            <div class="section-description">
                <p>
                    Established in 1973 and based in Addis Ababa, Ethiopia, Romina Group is a formidable Ethiopian holding company that has evolved from a humble beginning into a robust and diversified enterprise. Our five decades of growth have been marked by strategic expansion, successful partnerships, and an unwavering commitment to excellence across all our endeavours.
                </p>
            </div>

        </div>

    </section>

    <!-- =====================================================
     WHO WE ARE
===================================================== -->

<section class="who-we-are" id="about">

    <div class="who-container">

        <!-- ==============================================
             TOP LABEL
        =============================================== -->

        <div class="who-top">

            <div class="who-eyebrow">
                WHO WE ARE
            </div>

            <div class="who-top-line"></div>

            <div class="who-location">
                ADDIS ABABA · ETHIOPIA
            </div>

        </div>


        <!-- ==============================================
             MAIN INTRO
        =============================================== -->

        <div class="who-intro">

            <div class="who-intro-number">

                <span>50</span>

                <small>+</small>

                <div>
                    YEARS<br>
                    OF EVOLUTION
                </div>

            </div>


            <div class="who-intro-content">

                <h2>
                    From one cherished
                    restaurant to a
                    <span>diverse group.</span>
                </h2>

            </div>

        </div>


        <!-- ==============================================
             STORY
        =============================================== -->

        <div class="who-story">

            <div class="who-story-image">

                <img
                    src="{{ asset('images/about/romina-history.jpg') }}"
                    alt="Romina Group history in Addis Ababa"
                >

                <div class="who-image-overlay"></div>

                <div class="who-image-caption">
                    EST. 1973
                </div>

            </div>


            <div class="who-story-content">

                <div class="who-story-index">
                    01 / OUR STORY
                </div>


                <p class="who-lead">
                    Romina Group was founded in 1973 by
                    <strong>Girma Taye</strong>, a prominent,
                    self-made business leader, starting with a
                    small, cherished restaurant in Arat Kilo,
                    in the heart of Addis Ababa.
                </p>


                <p>
                    After over 50+ years of dedicated service
                    and continuous evolution, Romina Group now
                    operates a dynamic and diverse portfolio
                    spanning several key sectors.
                </p>


                <div class="who-divider"></div>


                <div class="who-signature">

                    <span class="who-signature-line"></span>

                    <div>
                        <strong>Girma Taye</strong>
                        <small>Founder · Romina Group</small>
                    </div>

                </div>

            </div>

        </div>


        <!-- ==============================================
             SECTORS
        =============================================== -->

        <div class="who-sectors">

            <div class="who-sectors-heading">

                <span>
                    OUR BUSINESS
                </span>

                <p>
                    Today, our experience spans a growing
                    collection of businesses and services
                    connected by one shared foundation.
                </p>

            </div>


            <div class="who-sector-grid">


                <!-- SECTOR 01 -->

                <div class="who-sector">

                    <div class="who-sector-number">
                        01
                    </div>

                    <div class="who-sector-content">

                        <h3>
                            Restaurant Management
                            & Hospitality
                        </h3>

                        <p>
                            Creating welcoming spaces,
                            memorable dining experiences
                            and distinctive culinary brands.
                        </p>

                    </div>

                </div>


                <!-- SECTOR 02 -->

                <div class="who-sector">

                    <div class="who-sector-number">
                        02
                    </div>

                    <div class="who-sector-content">

                        <h3>
                            International
                            Trading Services
                        </h3>

                        <p>
                            Connecting businesses and
                            markets through trusted
                            international trading services.
                        </p>

                    </div>

                </div>


                <!-- SECTOR 03 -->

                <div class="who-sector">

                    <div class="who-sector-number">
                        03
                    </div>

                    <div class="who-sector-content">

                        <h3>
                            Coffee
                            Exporting
                        </h3>

                        <p>
                            Bringing Ethiopia's coffee
                            heritage to international
                            markets.
                        </p>

                    </div>

                </div>


                <!-- SECTOR 04 -->

                <div class="who-sector">

                    <div class="who-sector-number">
                        04
                    </div>

                    <div class="who-sector-content">

                        <h3>
                            Importing &
                            Distribution
                        </h3>

                        <p>
                            Importing and distributing
                            essential products to the
                            local Ethiopian market.
                        </p>

                    </div>

                </div>


            </div>

        </div>

    </div>

</section>


<!-- =====================================================
     CULTURE & LEADERSHIP
===================================================== -->

<section class="culture-section" id="culture">

    <div class="culture-container">

        <!-- ==============================================
             SECTION INTRO
        =============================================== -->

        <div class="culture-intro">

            <div class="culture-label">
                <span>OUR CULTURE</span>
                <i></i>
            </div>


            <div class="culture-heading">

                <h2>
                    A family of people,
                    <span>driven by purpose.</span>
                </h2>

                <div class="culture-intro-number">
                    05
                    <small>
                        DECADES<br>
                        TOGETHER
                    </small>
                </div>

            </div>

        </div>


        <!-- ==============================================
             CULTURE CONTENT
        =============================================== -->

        <div class="culture-main">

            <div class="culture-statement">

                <p class="culture-lead">
                    We are a family of passionate individuals
                    united by a shared vision and deep
                    community passion.
                </p>

                <p>
                    Our top professional executives are seasoned
                    industry experts with proven track records,
                    whose strategic leadership guides the Group's
                    assets toward continued success and industry
                    recognition.
                </p>

                <p>
                    Our dedicated employees are the core of our
                    success, committed to delivering the best
                    possible customer experience every day.
                </p>

                <div class="culture-highlight">

                    <span class="culture-highlight-line"></span>

                    <p>
                        Together, we are dedicated to creating
                        exciting experiences, generating wealth,
                        and positively shaping the world around us.
                    </p>

                </div>

            </div>


            <!-- ==========================================
                 LEADERSHIP PANEL
            =========================================== -->

            <div class="culture-leadership">

                <div class="culture-leadership-top">

                    <span>
                        01
                    </span>

                    <span>
                        LEADERSHIP
                    </span>

                </div>


                <div class="culture-leadership-icon">
                    <span><i class="fa-solid fa-lightbulb"></i></span>
                </div>


                <h3>
                    Experience
                    <br>
                    meets vision.
                </h3>


                <p>
                    Seasoned professionals provide the
                    strategic direction that connects our
                    people, businesses and long-term ambitions.
                </p>


                <div class="culture-leadership-bottom">

                    <span></span>

                    <small>
                        ROMINA GROUP
                    </small>

                </div>

            </div>

        </div>


        <!-- ==============================================
             VALUES INTRO
        =============================================== -->

        <div class="values-intro">

            <div class="values-label">
                <span>OUR GUIDING VALUES</span>
            </div>


            <div class="values-copy">

                <h2>
                    Principles that
                    <span>guide us.</span>
                </h2>

                <p>
                    Over the past five decades, we have cultivated
                    a system of shared values and beliefs that are
                    deeply ingrained in our company culture and
                    permeate every level of our organization.
                </p>

            </div>

        </div>


        <!-- ==============================================
             VALUES TABLE
        =============================================== -->

        <div class="values-table">

            <!-- TABLE HEADER -->

            <div class="values-table-row values-table-head">

                <div>
                    VALUE
                </div>

                <div>
                    OUR COMMITMENT
                </div>

            </div>


            <!-- EXCELLENCE -->

            <div class="values-table-row">

                <div class="value-name">
                    <h3>
                        Excellence
                    </h3>

                </div>

                <div class="value-description">
                    Striving for superior performance and
                    quality in everything we undertake.
                </div>

            </div>


            <!-- INNOVATION -->

            <div class="values-table-row">

                <div class="value-name">
                    <h3>
                        Innovation
                    </h3>

                </div>

                <div class="value-description">
                    Committed to continuous creativity and
                    adapting to stay ahead of the curve and
                    the competition.
                </div>

            </div>


            <!-- QUALITY -->

            <div class="values-table-row">

                <div class="value-name">
                    <h3>
                        Quality
                    </h3>

                </div>

                <div class="value-description">
                    Providing our customers with the highest
                    standard of products and services available.
                </div>

            </div>


            <!-- SUSTAINABILITY -->

            <div class="values-table-row">

                <div class="value-name">
                    <h3>
                        Sustainability
                    </h3>

                </div>

                <div class="value-description">
                    Operating in an environmentally friendly way,
                    protecting our resources for future generations.
                </div>

            </div>


            <!-- INTEGRITY -->

            <div class="values-table-row">

                <div class="value-name">
                    <h3>
                        Integrity
                    </h3>

                </div>

                <div class="value-description">
                    Conducting our business with unwavering honesty,
                    transparency, and ethical standards.
                </div>

            </div>


            <!-- COMMUNITY PASSION -->

            <div class="values-table-row">

                <div class="value-name">
                    <h3>
                        Community Passion
                    </h3>

                </div>

                <div class="value-description">
                    Placing the best interest of the community at
                    the forefront, regarding it as equally important
                    as our core business goals.
                </div>

            </div>

        </div>

    </div>

</section>

<!-- =====================================================
     EXECUTIVE TEAM
===================================================== -->

<section class="executive-team-section" id="executive-team">

    <div class="executive-team-container">

        <!-- HEADER -->

        <div class="executive-team-header">

            <div class="executive-team-label">
                THE TEAM
            </div>

            <div class="executive-team-heading">

                <h2>
                    Experienced people,
                    <span>shared direction.</span>
                </h2>

                <p>
                    Our executive team consists of industry experts
                    with diverse and reliable experience, overseeing
                    the Group's assets and guiding it towards success
                    through strategic leadership and vision.
                </p>

            </div>

        </div>


        <!-- TEAM MEMBERS -->

        <div class="executive-team-grid">

            <!-- EXECUTIVE 01 -->

            <article class="executive-member">

                <div class="executive-photo">
                    <img
                        src="{{ asset('images/team/executive-01.jpg') }}"
                        alt="Executive team member"
                    >

                </div>

                <div class="executive-info">

                    <span>
                        EXECUTIVE LEADERSHIP
                    </span>

                    <h3>
                        Executive Name
                    </h3>

                    <p>
                        Executive Position
                    </p>

                </div>

            </article>


            <!-- EXECUTIVE 02 -->

            <article class="executive-member">

                <div class="executive-photo">
                    <img
                        src="{{ asset('images/team/executive-02.jpg') }}"
                        alt="Executive team member"
                    >
                   

                </div>

                <div class="executive-info">

                    <span>
                        EXECUTIVE LEADERSHIP
                    </span>

                    <h3>
                        Executive Name
                    </h3>

                    <p>
                        Executive Position
                    </p>

                </div>

            </article>


            <!-- EXECUTIVE 03 -->

            <article class="executive-member">

                <div class="executive-photo">
                    <img
                        src="{{ asset('images/team/executive-03.jpg') }}"
                        alt="Executive team member"
                    >
                   

                </div>

                <div class="executive-info">

                    <span>
                        EXECUTIVE LEADERSHIP
                    </span>

                    <h3>
                        Executive Name
                    </h3>

                    <p>
                        Executive Position
                    </p>

                </div>

            </article>


            <!-- EXECUTIVE 04 -->

            <article class="executive-member">

                <div class="executive-photo">
                    <img
                        src="{{ asset('images/team/executive-04.jpg') }}"
                        alt="Executive team member"
                    >
                   

                </div>

                <div class="executive-info">

                    <span>
                        EXECUTIVE LEADERSHIP
                    </span>

                    <h3>
                        Executive Name
                    </h3>

                    <p>
                        Executive Position
                    </p>

                </div>

            </article>

        </div>


        <!-- BOTTOM STATEMENT -->

        <div class="executive-team-bottom">

            <div class="executive-team-line"></div>

            <p>
                Strategic leadership.
                <span>Long-term vision.</span>
            </p>

        </div>

    </div>

</section>






    <!-- ==========================================
         BUSINESSES
    =========================================== -->

    <section id="businesses" class="businesses-section">

        <div class="container">

            <div class="section-heading">
                <span class="section-label">OUR BUSINESSES</span>

                <h2>
                    Businesses built<br>
                    <span>for tomorrow.</span>
                </h2>
            </div>


            <div class="business-grid">

                <a href="#" class="business-card">

                    <div class="business-image"
                         style="background-image:
                         url('{{ asset('images/business/restaurant.jpg') }}');">
                    </div>

                    <div class="business-card-content">
                        <span>01</span>

                        <h3>
                            Restaurants &<br>
                            Culinary Brands
                        </h3>

                        <div class="business-arrow"><span><i class="fa-solid fa-arrow-right"></i></span></div>
                    </div>

                </a>


                <a href="#" class="business-card">

                    <div class="business-image"
                         style="background-image:
                         url('{{ asset('images/business/coffee.jpg') }}');">
                    </div>

                    <div class="business-card-content">
                        <span>02</span>

                        <h3>
                            Romina<br>
                            Coffee
                        </h3>

                        <div class="business-arrow"><span><i class="fa-solid fa-arrow-right"></i></span></div>
                    </div>

                </a>


                <a href="#" class="business-card">

                    <div class="business-image"
                         style="background-image:
                         url('{{ asset('images/business/baked.jpg') }}');">
                    </div>

                    <div class="business-card-content">
                        <span>03</span>

                        <h3>
                            Patisseries
                        </h3>

                        <div class="business-arrow"><span><i class="fa-solid fa-arrow-right"></i></span></div>
                    </div>

                </a>

            </div>

        </div>

    </section>

    <section class="sustainability-section" id="sustainability">
  <div class="sustainability-container">

    <div class="sustainability-header">
        <div class="culture-label">
            <span>Sustainability</span>
            <i></i>
        </div>

      <h2>Sustainability Practices</h2>

      <p>
        At Romina Coffee, sustainability isn't a side project – it's woven into
        how we source, process, and export every batch of Ethiopian coffee.
        Our approach ties environmental responsibility to farmer livelihoods
        and community wellbeing, so the people and ecosystems behind every cup
        can keep thriving for generations to come.
      </p>
    </div>

    <div class="impact-divider"></div>

    <div class="impact-header">
      <div>
        <span class="impact-eyebrow">Our Impact</span>
        <h3>By the Numbers</h3>
      </div>

      <div class="impact-line"></div>
    </div>

    <div class="impact-grid">

      <!-- Farmers -->
      <div class="impact-card">
        <div class="impact-icon">
          <svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
            <circle cx="9" cy="7" r="4"/>
            <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
            <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
          </svg>
        </div>

        <div class="impact-number">
          <span class="counter" data-target="3714">0</span>
        </div>

        <p>Farmers Supported</p>
      </div>

      <!-- Farmland -->
      <div class="impact-card">
        <div class="impact-icon">
          <svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M3 21h18"/>
            <path d="M5 21V9l7-5 7 5v12"/>
            <path d="M9 21v-6h6v6"/>
            <path d="M8 11h.01"/>
            <path d="M12 11h.01"/>
            <path d="M16 11h.01"/>
          </svg>
        </div>

        <div class="impact-number impact-number-small">
          <span class="prefix">~</span>
          <span class="counter decimal-counter" data-target="5480">0</span>
        </div>

        <p>Coffee Farmland Covered <span class="unit">hectares</span></p>
      </div>

      <!-- Schools -->
      <div class="impact-card">
        <div class="impact-icon">
          <svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M3 21h18"/>
            <path d="M5 21V10l7-6 7 6v11"/>
            <path d="M9 21v-6h6v6"/>
            <path d="M8 10h.01"/>
            <path d="M12 10h.01"/>
            <path d="M16 10h.01"/>
          </svg>
        </div>

        <div class="impact-number">
          <span class="counter" data-target="4">0</span>
        </div>

        <p>Schools Built</p>
      </div>

      <!-- Water -->
      <div class="impact-card">
        <div class="impact-icon">
          <svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M12 2.5S5 10 5 15a7 7 0 0 0 14 0c0-5-7-12.5-7-12.5Z"/>
            <path d="M9 16a3 3 0 0 0 3 3"/>
          </svg>
        </div>

        <div class="impact-number">
          <span class="counter" data-target="1">0</span>
        </div>

        <p>Potable-Water Sites</p>

        <span class="impact-detail">
          Plus bridges and road infrastructure
        </span>
      </div>

      <!-- Certifications -->
      <div class="impact-card certifications-card">
        <div class="impact-icon">
          <svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M12 3l2.4 4.86L20 8.68l-4 3.9.94 5.5L12 15.5l-4.94 2.58L8 12.58l-4-3.9 5.6-.82L12 3Z"/>
          </svg>
        </div>

        <div class="impact-number">
          <span class="counter" data-target="8">0</span>
        </div>

        <p>Organic Certifications</p>

        <span class="impact-detail">
          + Rainforest Alliance
        </span>
      </div>

    </div>

    <div class="sustainability-footer">
      <span></span>
      <p>Building a more sustainable future, one cup at a time.</p>
      <span></span>
    </div>

  </div>
</section>


<section class="sustainability-details" id="sustainability-details">
  <div class="details-container">

    <div class="details-heading">
      <span class="details-label">Our Approach</span>
      <h2>Sustainability in Practice</h2>
      <p>
        Our sustainability programme connects responsible sourcing, farmer
        support, community investment, environmental stewardship, and
        continuous learning across our coffee operations.
      </p>
    </div>

    <div class="sustainability-accordion">

      <!-- 01 Farmer Support -->
      <div class="accordion-item active">
        <button class="accordion-trigger" type="button" aria-expanded="true">
          <span class="accordion-title">
            <span class="accordion-number">01</span>
            <span class="accordion-name">
              <span class="accordion-icon">🌱</span>
              Farmer Support &amp; Responsible Sourcing
            </span>
          </span>

          <span class="accordion-chevron">
            <i class="fa-solid fa-chevron-down"></i>
          </span>
        </button>

        <div class="accordion-content">
          <div class="accordion-content-inner">

            <p>
              We invest directly in the farmers who grow our coffee – providing
              disease-resistant coffee seedlings and shade-tree seedlings free
              of charge to encourage sustainable growing systems, and supporting
              them throughout the agricultural year with access to the planting
              materials they need.
            </p>

            <p>
              Beyond the farm, we purchase coffee at fair, premium prices and
              share dividends based on farmers' original coffee supply – giving
              our partners a stake in the value their coffee creates, not just a
              one-time sale.
            </p>

            <p>
              This support runs across our sourcing network in
              <strong>Sidama, Limmu, Yirgacheffe, Guji, Djimma, and Nekempte</strong>,
              with facilities and operations based in
              <strong>Sidama, West Arsi, Wollega, and Guji.</strong>
            </p>

          </div>
        </div>
      </div>


      <!-- 02 Community Development -->
      <div class="accordion-item">
        <button class="accordion-trigger" type="button" aria-expanded="false">
          <span class="accordion-title">
            <span class="accordion-number">02</span>
            <span class="accordion-name">
              <span class="accordion-icon">🏘️</span>
              Community Development
            </span>
          </span>

          <span class="accordion-chevron">
            <i class="fa-solid fa-chevron-down"></i>
          </span>
        </button>

        <div class="accordion-content">
          <div class="accordion-content-inner">

            <p>
              Our responsibility doesn't end at the farm gate. We invest
              directly in the infrastructure our coffee communities need to
              thrive, including:
            </p>

            <ul>
              <li>Four schools for community children</li>
              <li>Bridges to improve connectivity</li>
              <li>Roads to improve transportation and access</li>
              <li>
                One potable-water site, bringing clean water within reach
                for the surrounding community
              </li>
            </ul>

            <p>
              These projects are built within the same communities that grow
              our coffee – practical, long-term investments in education,
              mobility, and everyday essentials.
            </p>

            <div class="photo-placeholder">
              <span class="photo-placeholder-icon">
                <i class="fa-regular fa-image"></i>
              </span>
              <span>Photos will be shared</span>
            </div>

          </div>
        </div>
      </div>


      <!-- 03 Environmental Commitment -->
      <div class="accordion-item">
        <button class="accordion-trigger" type="button" aria-expanded="false">
          <span class="accordion-title">
            <span class="accordion-number">03</span>
            <span class="accordion-name">
              <span class="accordion-icon">🌍</span>
              Environmental Commitment
            </span>
          </span>

          <span class="accordion-chevron">
            <i class="fa-solid fa-chevron-down"></i>
          </span>
        </button>

        <div class="accordion-content">
          <div class="accordion-content-inner">

            <p>
              Great coffee starts with a healthy environment, and we take that
              responsibility seriously. Our environmental programme includes
              shade-tree planting and disease-resistant varieties on the farm,
              alongside a growing push toward reduced carbon emissions, less
              operational waste, and renewable energy at our processing
              facilities – together with expanding partnerships in
              reforestation and biodiversity conservation.
            </p>

          </div>
        </div>
      </div>


      <!-- 04 Water Treatment -->
      <div class="accordion-item">
        <button class="accordion-trigger" type="button" aria-expanded="false">
          <span class="accordion-title">
            <span class="accordion-number">04</span>
            <span class="accordion-name">
              <span class="accordion-icon">💧</span>
              Water Treatment
            </span>
          </span>

          <span class="accordion-chevron">
            <i class="fa-solid fa-chevron-down"></i>
          </span>
        </button>

        <div class="accordion-content">
          <div class="accordion-content-inner">

            <p>
              Washed coffee processing uses a lot of water, so we treat the
              water used during washing before it's released back into the
              environment – an ongoing operational commitment, not a one-off
              project, applied at our wet-mill and processing facilities across
              <strong>Sidama, West Arsi, Wollega, and Guji.</strong>
            </p>

          </div>
        </div>
      </div>


      <!-- 05 Looking Ahead -->
      <div class="accordion-item">
        <button class="accordion-trigger" type="button" aria-expanded="false">
          <span class="accordion-title">
            <span class="accordion-number">05</span>
            <span class="accordion-name">
              <span class="accordion-icon">🎯</span>
              Looking Ahead
            </span>
          </span>

          <span class="accordion-chevron">
            <i class="fa-solid fa-chevron-down"></i>
          </span>
        </button>

        <div class="accordion-content">
          <div class="accordion-content-inner">

            <p>
              Our sustainability journey continues with a focus on practical,
              measurable improvements across our operations.
            </p>

            <ul>
              <li>Reducing our carbon footprint</li>
              <li>Minimizing operational waste</li>
              <li>
                Investing in renewable energy at our processing facilities
              </li>
              <li>Expanding reforestation partnerships</li>
              <li>Supporting biodiversity conservation</li>
            </ul>

            <div class="photo-placeholder">
              <span class="photo-placeholder-icon">
                <i class="fa-regular fa-image"></i>
              </span>
              <span>Photos will be shared</span>
            </div>

          </div>
        </div>
      </div>


      <!-- 06 Farmer & Staff Training -->
      <div class="accordion-item">
        <button class="accordion-trigger" type="button" aria-expanded="false">
          <span class="accordion-title">
            <span class="accordion-number">06</span>
            <span class="accordion-name">
              <span class="accordion-icon">🎓</span>
              Farmer &amp; Staff Training
            </span>
          </span>

          <span class="accordion-chevron">
            <i class="fa-solid fa-chevron-down"></i>
          </span>
        </button>

        <div class="accordion-content">
          <div class="accordion-content-inner">

            <p>
              Training sits at the heart of how we build a more sustainable
              coffee industry. For our partner farmers, that means hands-on
              capacity-building in sustainable farming practices, farm
              management, plant health and disease prevention, proper use of
              improved varieties, shade-tree management, harvesting and quality
              practices, environmental responsibility, and processing quality –
              delivered continuously, in step with the agricultural calendar.
            </p>

            <p>
              We're extending that same commitment to our own people, building
              staff training and professional-development opportunities across
              the Group.
            </p>

            <p>
              Training happens where the work happens – in our coffee-growing
              communities, sourcing areas, and processing facilities – through
              farm demonstrations, field sessions, technical workshops,
              processing-site training, agricultural extension support,
              internal staff programmes, and knowledge-sharing with technical
              partners.
            </p>

          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- ==========================================
     BUSINESS PORTFOLIO
=========================================== -->

<section id="portfolio" class="portfolio-section">

    <div class="container">

        <!-- Portfolio Header -->
        <div class="portfolio-header">

            <div>
                <span class="portfolio-label">
                    BUSINESS PORTFOLIO
                </span>

                <h2>
                    Four sectors,<br>
                    <span>built from one restaurant.</span>
                </h2>
            </div>

            <div class="portfolio-intro">
                <p>
                    From hospitality and coffee to new ventures,
                    our portfolio brings together businesses built
                    around quality, people and long-term value.
                </p>
            </div>

        </div>


        <!-- Portfolio Slider -->
        <div class="portfolio-slider-wrapper">

            <div class="portfolio-track">


                <!-- CARD 01 -->
                <article class="portfolio-card">

                    <div class="portfolio-image">

                        <img
                            src="{{ asset('images/portfolio/restaurant.jpg') }}"
                            alt="Romina Restaurant interior, evening service"
                        >

                        <div class="portfolio-image-caption">
                            Romina Restaurant interior, evening service
                        </div>

                    </div>


                    <div class="portfolio-card-content">

                        <span class="portfolio-number">
                            01
                        </span>

                        <h3>
                            Restaurant management
                            & hospitality
                        </h3>

                        <p>
                            Home-styled dishes, warm service and
                            three distinct culinary brands across
                            Addis Ababa.
                        </p>


                        <div class="portfolio-pills">

                            <span>Romina Restaurants</span>
                            <span>KOBA</span>
                            <span>Meskott</span>

                        </div>


                        <a href="#" class="portfolio-link">
                            Explore our restaurants
                            <span><i class="fa-solid fa-arrow-right"></i></span>
                        </a>

                    </div>

                </article>


                <!-- CARD 02 -->
                <article class="portfolio-card">

                    <div class="portfolio-image">

                        <img
                            src="{{ asset('images/portfolio/coffee.jpg') }}"
                            alt="Romina Coffee"
                        >

                        <div class="portfolio-image-caption">
                            Romina Coffee, crafted for everyday moments
                        </div>

                    </div>


                    <div class="portfolio-card-content">

                        <span class="portfolio-number">
                            02
                        </span>

                        <h3>
                            Coffee & beverage
                            experiences
                        </h3>

                        <p>
                            Thoughtfully sourced coffee, distinctive
                            spaces and a growing culture built around
                            every cup.
                        </p>


                        <div class="portfolio-pills">

                            <span>Romina Coffee</span>
                            <span>Specialty Coffee</span>
                            <span>Retail</span>

                        </div>


                        <a href="#" class="portfolio-link">
                            Explore Romina Coffee
                            <span><i class="fa-solid fa-arrow-right"></i></span>
                        </a>

                    </div>

                </article>


                <!-- CARD 03 -->
                <article class="portfolio-card">

                    <div class="portfolio-image">

                        <img
                            src="{{ asset('images/portfolio/jaguar.jpg') }}"
                            alt="Business investment and ventures"
                        >

                        <div class="portfolio-image-caption">
                            Building the next generation of businesses
                        </div>

                    </div>


                    <div class="portfolio-card-content">

                        <span class="portfolio-number">
                            03
                        </span>

                        <h3>
                            Jaguar Appliances
                        </h3>

                        <p>
                            Spaces designed for people and business
                        </p>


                        <div class="portfolio-pills">

                            <span>Investments</span>
                            <span>New Ventures</span>
                            <span>Partnerships</span>

                        </div>


                        <a href="#" class="portfolio-link">
                            Explore our ventures
                            <span><i class="fa-solid fa-arrow-right"></i></span>
                        </a>

                    </div>

                </article>


                <!-- CARD 04 -->
                <article class="portfolio-card">

                    <div class="portfolio-image">

                        <img
                            src="{{ asset('images/portfolio/baked.jpg') }}"
                            alt="Business property and real estate"
                        >

                        <div class="portfolio-image-caption">
                            Identifying opportunities, supporting
                            entrepreneurs and building businesses
                            with long-term potential.
                        </div>

                    </div>


                    <div class="portfolio-card-content">

                        <span class="portfolio-number">
                            04
                        </span>

                        <h3>
                            Patisseries
                        </h3>

                        <p>
                            Creating purposeful spaces that bring
                            together people, businesses and communities.
                        </p>


                        <div class="portfolio-pills">

                            <span>Patisseries</span>
                            <span>Passion</span>
                            <span>Cake</span>

                        </div>


                        <a href="#" class="portfolio-link">
                            Explore our properties
                            <span><i class="fa-solid fa-arrow-right"></i></span>
                        </a>

                    </div>

                </article>

            </div>

        </div>


        <!-- Portfolio Controls -->
        <div class="portfolio-scroll-controls">

    <div class="portfolio-counter">
        <span class="portfolio-current">01</span>
        <span>/</span>
        <span>04</span>
    </div>

    <div class="portfolio-progress">

        <div class="portfolio-progress-line">
            <div class="portfolio-progress-active"></div>

            <span class="portfolio-progress-dot"></span>
        </div>

    </div>

</div>

    </div>

</section>


    <!-- ==========================================
         FOOTER
    =========================================== -->

    <footer id="contact" class="footer">

        <div class="container">

            <div class="footer-top">

                <div class="footer-brand">

                    <div class="logo footer-logo">
                        <img src="{{ asset('images/logo/logo-white.png') }}" alt="">
                    </div>

                    <p>
                        Building businesses.<br>
                        Creating value.
                    </p>

                </div>


                <div class="footer-links">

                    <div>
                        <span>EXPLORE</span>
                        <a href="#about">About</a>
                        <a href="#businesses">Businesses</a>
                        <a href="#sustainability">Sustainability</a>
                    </div>

                    <div>
                        <span>CONNECT</span>
                        <a href="#careers">Careers</a>
                        <a href="#news">News</a>
                        <a href="#contact">Contact</a>
                    </div>

                </div>

            </div>


            <div class="footer-bottom">

                <span>
                    © {{ date('Y') }} Business Group. All rights reserved.
                </span>

                <span>
                    Privacy Policy &nbsp; | &nbsp; Terms
                </span>

            </div>

        </div>

    </footer>

</main>


<script>
document.addEventListener('DOMContentLoaded', function () {

    const slides = document.querySelectorAll('.hero-slide');
    const nextButton = document.querySelector('.next-slide');
    const prevButton = document.querySelector('.prev-slide');

    const currentNumber =
        document.querySelector('.current-slide');

    const progressActive =
        document.querySelector('.progress-active');

    const progressDot =
        document.querySelector('.progress-dot');

    let current = 0;
    let autoplay;

    const total = slides.length;


    function updateSlide(index) {

        slides.forEach((slide, i) => {
            slide.classList.toggle('active', i === index);
        });

        currentNumber.textContent =
            String(index + 1).padStart(2, '0');

        const percentage =
            ((index + 1) / total) * 100;

        progressActive.style.width =
            percentage + '%';

        progressDot.style.left =
            `calc(${percentage}% - 5px)`;
    }


    function nextSlide() {

        current++;

        if (current >= total) {
            current = 0;
        }

        updateSlide(current);
        restartAutoplay();
    }


    function previousSlide() {

        current--;

        if (current < 0) {
            current = total - 1;
        }

        updateSlide(current);
        restartAutoplay();
    }


    function startAutoplay() {

        autoplay = setInterval(() => {

            current++;

            if (current >= total) {
                current = 0;
            }

            updateSlide(current);

        }, 6000);
    }


    function restartAutoplay() {

        clearInterval(autoplay);
        startAutoplay();

    }


    nextButton.addEventListener('click', nextSlide);
    prevButton.addEventListener('click', previousSlide);


    /* Keyboard navigation */

    document.addEventListener('keydown', function (event) {

        if (event.key === 'ArrowRight') {
            nextSlide();
        }

        if (event.key === 'ArrowLeft') {
            previousSlide();
        }

    });


    /* Initial state */

    updateSlide(0);
    startAutoplay();





    

});

document.addEventListener('DOMContentLoaded', () => {

    const section =
        document.querySelector('.portfolio-section');

    const container =
        section?.querySelector('.container');

    const track =
        document.querySelector('.portfolio-track');

    const cards =
        document.querySelectorAll('.portfolio-card');

    const progressBar =
        document.querySelector(
            '.portfolio-progress-active'
        );

    const progressDot =
        document.querySelector(
            '.portfolio-progress-dot'
        );

    const currentNumber =
        document.querySelector(
            '.portfolio-current'
        );


    /*
    |--------------------------------------------------------------------------
    | Safety check
    |--------------------------------------------------------------------------
    */

    if (
        !section ||
        !container ||
        !track ||
        !cards.length ||
        !progressBar ||
        !progressDot
    ) {
        return;
    }


    /*
    |--------------------------------------------------------------------------
    | Get the actual horizontal travel distance
    |--------------------------------------------------------------------------
    */

    function getHorizontalDistance() {

        const trackWidth =
            track.scrollWidth;

        const viewportWidth =
            container.clientWidth;

        return Math.max(
            0,
            trackWidth - viewportWidth
        );

    }


    /*
    |--------------------------------------------------------------------------
    | Get vertical scroll progress through section
    |--------------------------------------------------------------------------
    */

    function getScrollProgress() {

        const sectionTop =
            section.offsetTop;

        const sectionHeight =
            section.offsetHeight;

        const viewportHeight =
            window.innerHeight;


        const scrollTop =
            window.pageYOffset ||
            document.documentElement.scrollTop;


        /*
        Where are we inside the section?
        */

        const distanceFromStart =
            scrollTop - sectionTop;


        /*
        The sticky viewport stays for this
        entire distance.
        */

        const scrollDistance =
            sectionHeight -
            viewportHeight;


        let progress =
            distanceFromStart /
            scrollDistance;


        /*
        Keep between 0 and 1.
        */

        progress =
            Math.max(
                0,
                Math.min(
                    1,
                    progress
                )
            );


        return progress;

    }


    /*
    |--------------------------------------------------------------------------
    | Update slider
    |--------------------------------------------------------------------------
    */

    function updatePortfolio() {

        const progress =
            getScrollProgress();


        const horizontalDistance =
            getHorizontalDistance();


        /*
        Calculate horizontal position.
        */

        const x =
            horizontalDistance *
            progress;


        /*
        MOVE CARDS LEFT
        */

        track.style.transform =
            `translate3d(
                -${x}px,
                0,
                0
            )`;


        /*
        RED PROGRESS LINE
        */

        const percentage =
            progress * 100;


        progressBar.style.width =
            percentage + '%';


        /*
        RED DOT
        */

        progressDot.style.left =
            `calc(
                ${percentage}% - 5px
            )`;


        /*
        CURRENT CARD
        */

        const cardWidth =
            cards[0].offsetWidth;


        const gap =
            parseFloat(
                window.getComputedStyle(track).gap
            ) || 25;


        const cardStep =
            cardWidth + gap;


        let currentIndex =
            Math.round(
                x / cardStep
            );


        currentIndex =
            Math.max(
                0,
                Math.min(
                    cards.length - 1,
                    currentIndex
                )
            );


        currentNumber.textContent =
            String(currentIndex + 1)
                .padStart(2, '0');

    }


    /*
    |--------------------------------------------------------------------------
    | Scroll listener
    |--------------------------------------------------------------------------
    */

    let ticking = false;


    window.addEventListener(
        'scroll',
        () => {

            if (!ticking) {

                window.requestAnimationFrame(
                    () => {

                        updatePortfolio();

                        ticking = false;

                    }
                );

                ticking = true;

            }

        },
        {
            passive: true
        }
    );


    /*
    |--------------------------------------------------------------------------
    | Resize
    |--------------------------------------------------------------------------
    */

    window.addEventListener(
        'resize',
        () => {

            updatePortfolio();

        }
    );


    /*
    |--------------------------------------------------------------------------
    | Initial update
    |--------------------------------------------------------------------------
    */

    updatePortfolio();

});

document.addEventListener("DOMContentLoaded", function () {

    const section =
        document.querySelector("#executive-team");

    if (!section) {
        return;
    }


    /* =====================================================
       SCROLL REVEAL
    ===================================================== */

    if ("IntersectionObserver" in window) {

        const observer =
            new IntersectionObserver(
                function (entries, observer) {

                    entries.forEach(function (entry) {

                        if (!entry.isIntersecting) {
                            return;
                        }

                        section.classList.add("is-visible");

                        observer.unobserve(
                            entry.target
                        );

                    });

                },
                {
                    threshold: 0.12,
                    rootMargin: "0px 0px -70px 0px"
                }
            );

        observer.observe(section);

    } else {

        section.classList.add("is-visible");

    }

});

document.addEventListener("DOMContentLoaded", function () {
    const section = document.querySelector("#sustainability");
    const counters = section.querySelectorAll(".counter");

    let hasAnimated = false;

    function animateCounter(counter) {
      const target = Number(counter.dataset.target);
      const duration = target > 1000 ? 1800 : 1200;
      const startTime = performance.now();

      function update(currentTime) {
        const elapsed = currentTime - startTime;
        const progress = Math.min(elapsed / duration, 1);

        // Smooth ease-out animation
        const easedProgress = 1 - Math.pow(1 - progress, 3);
        const currentValue = Math.floor(easedProgress * target);

        counter.textContent = currentValue.toLocaleString();

        if (progress < 1) {
          requestAnimationFrame(update);
        } else {
          counter.textContent = target.toLocaleString();
        }
      }

      requestAnimationFrame(update);
    }

    const observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting && !hasAnimated) {
            hasAnimated = true;

            counters.forEach(function (counter, index) {
              setTimeout(function () {
                animateCounter(counter);
              }, index * 100);
            });

            observer.unobserve(section);
          }
        });
      },
      {
        threshold: 0.25
      }
    );

    observer.observe(section);
  });

  document.addEventListener("DOMContentLoaded", function () {

    const accordionItems =
      document.querySelectorAll(".sustainability-accordion .accordion-item");

    accordionItems.forEach(function (item) {

      const trigger = item.querySelector(".accordion-trigger");

      trigger.addEventListener("click", function () {

        const isActive = item.classList.contains("active");

        // Close all items
        accordionItems.forEach(function (otherItem) {
          otherItem.classList.remove("active");

          const otherTrigger =
            otherItem.querySelector(".accordion-trigger");

          otherTrigger.setAttribute("aria-expanded", "false");
        });

        // Open clicked item if it wasn't already open
        if (!isActive) {
          item.classList.add("active");
          trigger.setAttribute("aria-expanded", "true");
        }

      });

    });

  });
</script>

</body>
</html>
