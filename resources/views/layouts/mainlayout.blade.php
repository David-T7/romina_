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

@include('partials.header')

<main>

@include('partials.hero')

@include('partials.about')

@include('partials.who-we-are')

@include('partials.portfolio')

@include('partials.values')

@include('partials.culture')

@include('partials.executive-team')

@include('partials.businesses')

@include('partials.sustainability')

@include('partials.footer')

</main>


<script>
/* =====================================================
   MOBILE NAV
===================================================== */
document.addEventListener('DOMContentLoaded', function () {

    const openBtn  = document.getElementById('menuOpen');
    const closeBtn = document.getElementById('menuClose');
    const mobileNav = document.getElementById('mobileNav');
    const navLinks = document.querySelectorAll('.mobile-nav-links a');

    function openMenu() {
        mobileNav.classList.add('open');
        mobileNav.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
    }

    function closeMenu() {
        mobileNav.classList.remove('open');
        mobileNav.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
    }

    openBtn.addEventListener('click', openMenu);
    closeBtn.addEventListener('click', closeMenu);

    navLinks.forEach(function (link) {
        link.addEventListener('click', closeMenu);
    });

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') closeMenu();
    });

});


/* =====================================================
   FIFTY COUNT-UP
===================================================== */
document.addEventListener('DOMContentLoaded', function () {

    const fiftySection = document.querySelector('.fifty-section');
    const counter = fiftySection && fiftySection.querySelector('.fifty-count');

    if (!fiftySection || !counter) return;

    let animated = false;

    function runCount() {
        const target = parseInt(counter.dataset.target, 10) || 50;
        const duration = 2200;
        const startTime = performance.now();

        function tick(now) {
            const elapsed  = now - startTime;
            const progress = Math.min(elapsed / duration, 1);
            const eased    = 1 - Math.pow(1 - progress, 3);
            counter.textContent = Math.floor(eased * target);
            if (progress < 1) requestAnimationFrame(tick);
            else counter.textContent = target;
        }

        requestAnimationFrame(tick);
    }

    const obs = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting && !animated) {
                animated = true;
                runCount();
                obs.unobserve(fiftySection);
            }
        });
    }, { threshold: 0.3 });

    obs.observe(fiftySection);

});


/* =====================================================
   TIMELINE
===================================================== */
document.addEventListener('DOMContentLoaded', function () {

    const TIMELINE = [
        { year: '1973', text: 'Girma Taye opens a small, cherished restaurant in Arat Kilo, in the heart of Addis Ababa.' },
        { year: '2009', text: 'Romina Coffee launches, taking Ethiopian Arabica to Europe, the USA, Asia and the Middle East.' },
        { year: '2017', text: 'A partnership between Jaquar Group and Romina Group opens Jaquar World Addis Ababa.' },
        { year: '2020', text: 'KOBA Patisserie & Bakery is established, built on craftsmanship and artisan baking.' },
        { year: 'Today', text: 'A diversified Ethiopian group spanning hospitality, coffee export, international trading, importing and distribution.' },
    ];

    const nodes  = document.querySelectorAll('.tl-node');
    const dot    = document.getElementById('tlDot');
    const detail = document.getElementById('tlDetail');
    const big    = document.getElementById('tlBig');
    const text   = document.getElementById('tlText');

    if (!nodes.length || !dot || !detail) return;

    function activate(index) {
        nodes.forEach(function (n, i) {
            n.classList.toggle('on', i === index);
            n.setAttribute('aria-pressed', i === index ? 'true' : 'false');
        });

        dot.style.left = ((index / (TIMELINE.length - 1)) * 100) + '%';

        detail.classList.remove('tl-animate');
        void detail.offsetWidth;
        detail.classList.add('tl-animate');

        big.textContent  = TIMELINE[index].year;
        text.textContent = TIMELINE[index].text;
    }

    nodes.forEach(function (node) {
        node.addEventListener('click',      function () { activate(+node.dataset.index); });
        node.addEventListener('mouseenter', function () { activate(+node.dataset.index); });
    });

});


/* =====================================================
   HERO SLIDER
===================================================== */
document.addEventListener('DOMContentLoaded', function () {

    const slides      = document.querySelectorAll('.hero-slide');
    const nextButton  = document.querySelector('.next-slide');
    const prevButton  = document.querySelector('.prev-slide');
    const currentNumber  = document.querySelector('.current-slide');
    const progressActive = document.querySelector('.progress-active');
    const progressDot    = document.querySelector('.progress-dot');

    let current = 0;
    let autoplay;
    const total = slides.length;

    function updateSlide(index) {
        slides.forEach((slide, i) => slide.classList.toggle('active', i === index));
        currentNumber.textContent = String(index + 1).padStart(2, '0');
        const pct = ((index + 1) / total) * 100;
        progressActive.style.width = pct + '%';
        progressDot.style.left = `calc(${pct}% - 5px)`;
    }

    function nextSlide() {
        current = (current + 1) % total;
        updateSlide(current);
        restartAutoplay();
    }

    function previousSlide() {
        current = (current - 1 + total) % total;
        updateSlide(current);
        restartAutoplay();
    }

    function startAutoplay() {
        autoplay = setInterval(() => {
            current = (current + 1) % total;
            updateSlide(current);
        }, 6000);
    }

    function restartAutoplay() {
        clearInterval(autoplay);
        startAutoplay();
    }

    nextButton.addEventListener('click', nextSlide);
    prevButton.addEventListener('click', previousSlide);

    document.addEventListener('keydown', function (e) {
        if (e.key === 'ArrowRight') nextSlide();
        if (e.key === 'ArrowLeft')  previousSlide();
    });

    updateSlide(0);
    startAutoplay();

});


/* =====================================================
   PORTFOLIO SLIDER
===================================================== */
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
        document.querySelector('.portfolio-progress-active');

    const progressDot =
        document.querySelector('.portfolio-progress-dot');

    const currentNumber =
        document.querySelector('.portfolio-current');

    if (!section || !container || !track || !cards.length || !progressBar || !progressDot) {
        return;
    }

    function getHorizontalDistance() {
        return Math.max(0, track.scrollWidth - container.clientWidth);
    }

    function getScrollProgress() {
        const sectionTop    = section.offsetTop;
        const sectionHeight = section.offsetHeight;
        const viewportHeight = window.innerHeight;
        const scrollTop     = window.pageYOffset || document.documentElement.scrollTop;
        const distanceFromStart = scrollTop - sectionTop;
        const scrollDistance    = sectionHeight - viewportHeight;
        return Math.max(0, Math.min(1, distanceFromStart / scrollDistance));
    }

    function updatePortfolio() {
        const progress           = getScrollProgress();
        const horizontalDistance = getHorizontalDistance();
        const x                  = horizontalDistance * progress;

        track.style.transform = `translate3d(-${x}px, 0, 0)`;

        const percentage = progress * 100;
        progressBar.style.width = percentage + '%';
        progressDot.style.left  = `calc(${percentage}% - 5px)`;

        const cardWidth  = cards[0].offsetWidth;
        const gap        = parseFloat(window.getComputedStyle(track).gap) || 25;
        const cardStep   = cardWidth + gap;
        let currentIndex = Math.round(x / cardStep);
        currentIndex     = Math.max(0, Math.min(cards.length - 1, currentIndex));
        currentNumber.textContent = String(currentIndex + 1).padStart(2, '0');
    }

    let ticking = false;
    window.addEventListener('scroll', () => {
        if (!ticking) {
            window.requestAnimationFrame(() => { updatePortfolio(); ticking = false; });
            ticking = true;
        }
    }, { passive: true });

    window.addEventListener('resize', () => { updatePortfolio(); });

    updatePortfolio();

});


/* =====================================================
   VALUES — WHY CHOOSE ROMINA
===================================================== */
document.addEventListener('DOMContentLoaded', function () {

    var VALUES = [
        { name: 'Excellence',   text: 'Striving for superior performance and quality in everything we undertake.' },
        { name: 'Innovation',   text: 'Committed to continuous creativity and adapting to stay ahead of the curve and the competition.' },
        { name: 'Quality',      text: 'Providing our customers with the highest standard of products and services available.' },
        { name: 'Sustainability', text: 'Operating in an environmentally friendly way, protecting our resources for future generations.' },
        { name: 'Integrity',    text: 'Conducting our business with unwavering honesty, transparency and ethical standards.' }
    ];

    var items   = document.querySelectorAll('.val-list li');
    var card    = document.getElementById('valCard');
    var nameEl  = document.getElementById('valName');
    var textEl  = document.getElementById('valText');

    if (!items.length || !card) return;

    function activate(index) {
        items.forEach(function (li, i) {
            li.classList.toggle('on', i === index);
            li.querySelector('button').setAttribute('aria-expanded', i === index ? 'true' : 'false');
        });

        /* re-trigger fadeup animation */
        card.style.animation = 'none';
        card.offsetHeight; /* reflow */
        card.style.animation = '';

        nameEl.textContent = VALUES[index].name;
        textEl.textContent = VALUES[index].text;
    }

    items.forEach(function (li, i) {
        var btn = li.querySelector('button');
        btn.addEventListener('click',      function () { activate(i); });
        btn.addEventListener('mouseenter', function () { activate(i); });
        btn.addEventListener('focus',      function () { activate(i); });
    });

});


/* =====================================================
   EXECUTIVE TEAM — SCROLL REVEAL
===================================================== */
document.addEventListener("DOMContentLoaded", function () {

    const section = document.querySelector("#executive-team");
    if (!section) return;

    if ("IntersectionObserver" in window) {

        const observer = new IntersectionObserver(
            function (entries, observer) {
                entries.forEach(function (entry) {
                    if (!entry.isIntersecting) return;
                    section.classList.add("is-visible");
                    observer.unobserve(entry.target);
                });
            },
            { threshold: 0.12, rootMargin: "0px 0px -70px 0px" }
        );

        observer.observe(section);

    } else {
        section.classList.add("is-visible");
    }

});


/* =====================================================
   SUSTAINABILITY COUNTERS
===================================================== */
document.addEventListener("DOMContentLoaded", function () {

    const section  = document.querySelector("#sustainability");
    const counters = section.querySelectorAll(".counter");
    let hasAnimated = false;

    function animateCounter(counter) {
        const target    = Number(counter.dataset.target);
        const duration  = target > 1000 ? 1800 : 1200;
        const startTime = performance.now();

        function update(currentTime) {
            const elapsed      = currentTime - startTime;
            const progress     = Math.min(elapsed / duration, 1);
            const easedProgress = 1 - Math.pow(1 - progress, 3);
            counter.textContent = Math.floor(easedProgress * target).toLocaleString();
            if (progress < 1) requestAnimationFrame(update);
            else counter.textContent = target.toLocaleString();
        }

        requestAnimationFrame(update);
    }

    const observer = new IntersectionObserver(
        function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting && !hasAnimated) {
                    hasAnimated = true;
                    counters.forEach(function (counter, i) {
                        setTimeout(function () { animateCounter(counter); }, i * 100);
                    });
                    observer.unobserve(section);
                }
            });
        },
        { threshold: 0.25 }
    );

    observer.observe(section);

});


/* =====================================================
   SUSTAINABILITY ACCORDION
===================================================== */
document.addEventListener("DOMContentLoaded", function () {

    const accordionItems = document.querySelectorAll(".sustainability-accordion .accordion-item");

    accordionItems.forEach(function (item) {

        const trigger = item.querySelector(".accordion-trigger");

        trigger.addEventListener("click", function () {

            const isActive = item.classList.contains("active");

            accordionItems.forEach(function (other) {
                other.classList.remove("active");
                other.querySelector(".accordion-trigger").setAttribute("aria-expanded", "false");
            });

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
