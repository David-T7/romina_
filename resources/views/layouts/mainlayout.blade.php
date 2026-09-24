<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Romina Group</title>

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

<div class="scroll-prog" aria-hidden="true"><i></i></div>

@include('partials.header')

<main>

@include('partials.hero')

@include('partials.about')

@include('partials.who-we-are')

@include('partials.portfolio')

@include('partials.values')

@include('partials.reviews')

@include('partials.brands-tabs')

@include('partials.coffee')

@include('partials.executive-team')

@include('partials.businesses')

@include('partials.news')

@include('partials.sustainability')

@include('partials.partners')

@include('partials.careers')

@include('partials.contact')

@include('partials.find-us')

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
   TIMELINE / Our story staircase
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
    const rail   = document.querySelector('.tl-rail');

    if (!nodes.length || !dot || !detail) return;

    function activate(index) {
        nodes.forEach(function (n, i) {
            n.classList.toggle('on',   i === index);
            n.classList.toggle('past', i < index);
            n.setAttribute('aria-pressed', i === index ? 'true' : 'false');
            n.setAttribute('aria-current', i === index ? 'step' : 'false');
        });
        dot.style.left = ((index / (TIMELINE.length - 1)) * 100) + '%';
        detail.classList.remove('tl-animate');
        void detail.offsetWidth;
        detail.classList.add('tl-animate');
        big.textContent  = TIMELINE[index].year;
        text.textContent = TIMELINE[index].text;
    }

    var isMobile       = window.matchMedia('(max-width: 768px)').matches;
    var prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    /* ---- Desktop: hover + click ---- */
    if (!isMobile) {
        nodes.forEach(function (node) {
            node.addEventListener('click',      function () { activate(+node.dataset.index); });
            node.addEventListener('mouseenter', function () { activate(+node.dataset.index); });
        });
        if (rail) rail.classList.add('tl-entered');
        return;
    }

    /* ---- Mobile reduced-motion: tap only, no ball ---- */
    if (prefersReduced) {
        nodes.forEach(function (node) {
            node.addEventListener('click', function () { activate(+node.dataset.index); });
        });
        if (rail) { rail.classList.add('tl-entered'); activate(0); }
        return;
    }

    /* ---- Mobile: bouncing ball autoplay ---- */
    var ball        = null;   // <span class="tl-ball"> created after entrance anim
    var ballX       = 0;      // bottom-center x relative to rail
    var ballY       = 0;      // bottom y relative to rail (= tread line)
    var stepIndex   = 0;
    var autoTimer   = null;
    var entrTimer   = null;
    var hopRaf      = null;
    var autoPlaying = false;
    var userCtrl    = false;
    var isVisible   = false;

    /* Landing point: right-top corner of step (tread/riser junction) */
    function getLanding(i) {
        var rr = rail.getBoundingClientRect();
        var nr = nodes[i].getBoundingClientRect();
        return { x: nr.right - rr.left, y: nr.top - rr.top };
    }

    /* Place ball instantly (bottom-center at x,y) */
    function placeBall(x, y) {
        ballX = x; ballY = y;
        ball.style.transform = 'translate(' + (x - 7) + 'px,' + (y - 14) + 'px)';
    }

    function cancelHop() {
        if (hopRaf) { cancelAnimationFrame(hopRaf); hopRaf = null; }
    }

    /* Squash on landing using Web Animations API */
    function squash(x, y) {
        if (typeof ball.animate !== 'function') return;
        var p = 'translate(' + (x - 7) + 'px,' + (y - 14) + 'px)';
        ball.animate(
            [{ transform: p + ' scaleX(1.15) scaleY(0.8)' }, { transform: p }],
            { duration: 80, easing: 'ease-out' }
        );
    }

    /* Arc hop via requestAnimationFrame */
    function hopTo(toX, toY, dur, onDone) {
        cancelHop();
        var sx = ballX, sy = ballY;
        var dx = toX - sx, dy = toY - sy;
        /* Arc height: upward arc regardless of direction, capped for long jumps */
        var arcH = Math.min(80 + Math.abs(dx) * 0.15 + Math.abs(dy) * 0.1, 100);
        var t0   = performance.now();

        function tick(now) {
            var raw  = Math.min((now - t0) / dur, 1);
            var ease = raw < 0.5 ? 2 * raw * raw : -1 + (4 - 2 * raw) * raw;
            var x    = sx + dx * ease;
            var y    = sy + dy * ease - arcH * Math.sin(Math.PI * raw);
            ball.style.transform = 'translate(' + (x - 7) + 'px,' + (y - 14) + 'px)';
            if (raw < 1) {
                hopRaf = requestAnimationFrame(tick);
            } else {
                hopRaf = null;
                ballX = toX; ballY = toY;
                squash(toX, toY);
                if (onDone) onDone();
            }
        }
        hopRaf = requestAnimationFrame(tick);
    }

    /* Hop ball to step i, then activate it */
    function moveTo(i, dur, done) {
        var lp = getLanding(i);
        hopTo(lp.x, lp.y, dur, function () {
            activate(i);
            stepIndex = i;
            if (done) done();
        });
    }

    function scheduleNext() {
        if (!autoPlaying) return;
        clearTimeout(autoTimer);
        autoTimer = setTimeout(function () {
            if (!autoPlaying) return;
            moveTo((stepIndex + 1) % TIMELINE.length, 550, scheduleNext);
        }, 1600);
    }

    function startAutoplay() {
        if (autoPlaying || !ball) return;
        autoPlaying = true;
        scheduleNext();
    }

    function stopAutoplay() {
        autoPlaying = false;
        clearTimeout(autoTimer);
        cancelHop();
    }

    /* Tap: hand control to user */
    nodes.forEach(function (node) {
        node.addEventListener('click', function () {
            var idx = +node.dataset.index;
            stopAutoplay();
            userCtrl = true;
            if (ball) moveTo(idx, 300, null);
            else { activate(idx); stepIndex = idx; }
        });
    });

    /* Enter viewport: run entrance anim, then create ball and start autoplay */
    function onEnter() {
        isVisible = true;
        if (!rail.classList.contains('tl-entered')) {
            rail.classList.add('tl-entered');
            /* Wait for last step's entrance anim: 320ms delay + 500ms = 820ms */
            entrTimer = setTimeout(function () {
                ball = document.createElement('span');
                ball.className = 'tl-ball';
                ball.setAttribute('aria-hidden', 'true');
                rail.appendChild(ball);
                rail.classList.add('tl-has-ball');
                var lp = getLanding(0);
                placeBall(lp.x, lp.y);
                activate(0);
                stepIndex = 0;
                if (!userCtrl) startAutoplay();
            }, 860);
        } else if (ball && !userCtrl) {
            startAutoplay();
        }
    }

    function onLeave() {
        isVisible = false;
        clearTimeout(entrTimer);
        stopAutoplay();
    }

    if (typeof IntersectionObserver !== 'undefined') {
        var io = new IntersectionObserver(function (entries) {
            if (entries[0].isIntersecting) onEnter(); else onLeave();
        }, { threshold: 0.15 });
        io.observe(rail);
    } else {
        rail.classList.add('tl-entered');
    }

    /* Pause when tab loses focus */
    document.addEventListener('visibilitychange', function () {
        if (document.hidden) { stopAutoplay(); }
        else if (isVisible && !userCtrl) { startAutoplay(); }
    });

    /* Reposition ball on resize */
    window.addEventListener('resize', function () {
        if (!ball) return;
        stopAutoplay();
        var lp = getLanding(stepIndex);
        placeBall(lp.x, lp.y);
        if (isVisible && !userCtrl) { setTimeout(startAutoplay, 300); }
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
   COFFEE SECTION
===================================================== */
document.addEventListener('DOMContentLoaded', function () {

    /* parallax on hero beans image */
    var beansImg = document.getElementById('cofBeansImg');
    if (beansImg) {
        var beansSec = beansImg.closest('.cof-beans');
        window.addEventListener('scroll', function () {
            var r = beansSec.getBoundingClientRect();
            if (r.bottom < 0 || r.top > window.innerHeight) return;
            var progress = -r.top / window.innerHeight;
            beansImg.style.transform = 'translate3d(0,' + (progress * 80) + 'px,0)';
        }, { passive: true });
    }

    /* journey animate-in */
    var journey = document.getElementById('cofJourney');
    if (journey) {
        new IntersectionObserver(function (entries, obs) {
            if (entries[0].isIntersecting) {
                journey.classList.add('go');
                obs.unobserve(journey);
            }
        }, { threshold: 0.25 }).observe(journey);
    }

    /* stats count-up */
    var statsEl = document.getElementById('cofStats');
    if (statsEl) {
        new IntersectionObserver(function (entries, obs) {
            if (!entries[0].isIntersecting) return;
            statsEl.querySelectorAll('.cof-count').forEach(function (el) {
                var to  = parseInt(el.dataset.to, 10);
                var dur = to > 1000 ? 2000 : 1200;
                var t0  = performance.now();
                (function tick(now) {
                    var p = Math.min((now - t0) / dur, 1);
                    var e = 1 - Math.pow(1 - p, 3);
                    el.textContent = Math.floor(e * to).toLocaleString();
                    if (p < 1) requestAnimationFrame(tick);
                    else el.textContent = to.toLocaleString();
                })(performance.now());
            });
            obs.unobserve(statsEl);
        }, { threshold: 0.15 }).observe(statsEl);
    }

});


/* =====================================================
   GUEST REVIEWS — auto-slider
===================================================== */
document.addEventListener('DOMContentLoaded', function () {

    var imgTrack = document.getElementById('revImgTrack');
    var cards    = document.getElementById('revCards');
    var dots     = document.querySelectorAll('.rev-dot');
    var prevBtn  = document.getElementById('revPrev');
    var nextBtn  = document.getElementById('revNext');
    var section  = document.querySelector('.reviews-section');

    if (!imgTrack || !cards || !dots.length || !prevBtn || !nextBtn || !section) return;

    var TOTAL    = dots.length;
    var current  = 0;
    var timer    = null;
    var INTERVAL = 4500;
    var reduced  = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    function goTo(index) {
        current = (index + TOTAL) % TOTAL;
        imgTrack.style.transform = 'translateX(-' + (current * 100) + '%)';
        cards.style.transform    = 'translateX(-' + (current * 100) + '%)';
        dots.forEach(function (d, i) {
            d.classList.toggle('active', i === current);
            d.setAttribute('aria-selected', i === current ? 'true' : 'false');
        });
    }

    function startTimer() {
        if (reduced) return;
        clearInterval(timer);
        timer = setInterval(function () { goTo(current + 1); }, INTERVAL);
    }

    function resetTimer() {
        clearInterval(timer);
        startTimer();
    }

    prevBtn.addEventListener('click', function () { goTo(current - 1); resetTimer(); });
    nextBtn.addEventListener('click', function () { goTo(current + 1); resetTimer(); });

    dots.forEach(function (d) {
        d.addEventListener('click', function () { goTo(+d.dataset.idx); resetTimer(); });
    });

    /* pause on hover / focus */
    section.addEventListener('mouseenter', function () { clearInterval(timer); });
    section.addEventListener('mouseleave', startTimer);
    section.addEventListener('focusin',    function () { clearInterval(timer); });
    section.addEventListener('focusout',   startTimer);

    /* swipe support */
    var touchStart = null;
    section.addEventListener('touchstart', function (e) {
        touchStart = e.changedTouches[0].clientX;
    }, { passive: true });
    section.addEventListener('touchend', function (e) {
        if (touchStart === null) return;
        var dx = e.changedTouches[0].clientX - touchStart;
        if (Math.abs(dx) > 40) { goTo(dx < 0 ? current + 1 : current - 1); resetTimer(); }
        touchStart = null;
    });

    /* keyboard */
    section.addEventListener('keydown', function (e) {
        if (e.key === 'ArrowLeft')  { goTo(current - 1); resetTimer(); }
        if (e.key === 'ArrowRight') { goTo(current + 1); resetTimer(); }
    });

    goTo(0);
    startTimer();

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
   SUSTAINABILITY APPROACH
===================================================== */
(function () {

    function initApproachAccordion() {
        var section = document.querySelector('.sustainability-details');
        if (!section) return;
        var items = section.querySelectorAll('.accordion-item');

        items.forEach(function (item) {
            var trigger = item.querySelector('.accordion-trigger');
            if (!trigger) return;

            trigger.addEventListener('click', function () {
                var isActive = item.classList.contains('active');

                items.forEach(function (other) {
                    other.classList.remove('active');
                    var t = other.querySelector('.accordion-trigger');
                    if (t) t.setAttribute('aria-expanded', 'false');
                });

                if (!isActive) {
                    item.classList.add('active');
                    trigger.setAttribute('aria-expanded', 'true');
                }
            });
        });
    }

    function initApproachReveal() {
        var section = document.querySelector('.sustainability-details');
        if (!section) return;
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

        var header = section.querySelector('.sa-reveal');
        var rows   = section.querySelectorAll('.accordion-reveal');

        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (!entry.isIntersecting) return;
                entry.target.classList.add('revealed');
                observer.unobserve(entry.target);
            });
        }, { threshold: 0.12 });

        if (header) observer.observe(header);

        rows.forEach(function (row, i) {
            row.style.transitionDelay = (i * 55) + 'ms';
            observer.observe(row);
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function () {
            initApproachAccordion();
            initApproachReveal();
        });
    } else {
        initApproachAccordion();
        initApproachReveal();
    }

}());


/* =====================================================
   BUSINESSES TABS
   Tab switching + per-panel image carousel with
   progress bar autoplay (5.2 s/slide, pause on hover).
===================================================== */
document.addEventListener('DOMContentLoaded', function () {

    var section = document.getElementById('brands');
    if (!section) return;

    var tabs      = Array.from(section.querySelectorAll('.brand-tab'));
    var panels    = Array.from(section.querySelectorAll('.brand-pane'));
    var markEl    = section.querySelector('#brandsMark');
    var DURATION  = 5200;
    var reduced   = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    var activeKey = 'restaurants';

    /* ---- gallery factory ------------------------------------------ */
    function initGallery(panel) {

        var stack     = panel.querySelector('.stack');
        var slideEls  = Array.from(panel.querySelectorAll('.slide'));
        var capEl     = panel.querySelector('.gallery-cap');
        var progFill  = panel.querySelector('.prog-fill');
        var prevBtn   = panel.querySelector('.gal-prev');
        var nextBtn   = panel.querySelector('.gal-next');
        var galEl     = panel.querySelector('.gallery');
        var n         = slideEls.length;
        var current   = 0;
        var timer     = null;
        var hovered   = false;

        if (!n) return { pause: noop, resume: noop };

        function noop() {}

        function restartAnim() {
            if (!progFill) return;
            progFill.style.animation = 'none';
            void progFill.offsetHeight;                          /* force reflow */
            progFill.style.animation = '';
            progFill.style.animationName     = 'brands-grow';
            progFill.style.animationDuration = DURATION + 'ms';
            progFill.style.animationTimingFunction = 'linear';
            progFill.style.animationFillMode = 'both';
            progFill.style.animationPlayState = (hovered || reduced) ? 'paused' : 'running';
        }

        function scheduleNext() {
            clearTimeout(timer);
            if (!hovered && !reduced) {
                timer = setTimeout(function () { goTo(current + 1, 1); }, DURATION);
            }
        }

        function goTo(i, dir) {
            var prev = current;
            current  = ((i % n) + n) % n;
            if (current === prev) return;

            stack.classList.toggle('back', dir < 0);

            slideEls.forEach(function (s, idx) {
                s.classList.remove('on', 'was');
                s.setAttribute('aria-hidden', idx !== current ? 'true' : 'false');
                if (idx === prev)    s.classList.add('was');
                if (idx === current) s.classList.add('on');
            });

            if (capEl) capEl.textContent = slideEls[current].dataset.caption || '';
            restartAnim();
            scheduleNext();
        }

        function pause() {
            hovered = true;
            clearTimeout(timer);
            if (progFill) progFill.style.animationPlayState = 'paused';
        }

        function resume() {
            hovered = false;
            if (progFill) progFill.style.animationPlayState = 'running';
            scheduleNext();
        }

        if (prevBtn) prevBtn.addEventListener('click', function () { goTo(current - 1, -1); });
        if (nextBtn) nextBtn.addEventListener('click', function () { goTo(current + 1,  1); });

        if (galEl) {
            galEl.addEventListener('mouseenter', pause);
            galEl.addEventListener('mouseleave', resume);
        }

        /* boot */
        restartAnim();
        scheduleNext();

        return { pause: pause, resume: resume };
    }

    /* ---- initialise all panels ------------------------------------ */
    var galleries = {};
    panels.forEach(function (panel) {
        var key       = panel.id.replace('brand-panel-', '');
        galleries[key] = initGallery(panel);
    });

    /* ---- tab switching -------------------------------------------- */
    function switchTab(key) {
        if (key === activeKey) return;

        if (galleries[activeKey]) galleries[activeKey].pause();

        var oldPanel = document.getElementById('brand-panel-' + activeKey);
        if (oldPanel) oldPanel.setAttribute('data-state', 'inactive');

        activeKey = key;

        var tone = 'light';
        tabs.forEach(function (tab) {
            var isActive = tab.dataset.brand === key;
            tab.setAttribute('data-state',    isActive ? 'active'   : 'inactive');
            tab.setAttribute('aria-selected', isActive ? 'true'     : 'false');
            if (isActive) tone = tab.dataset.tone || 'light';
        });

        /* swap section tone class */
        section.className = section.className.replace(/\btone-\S+/g, '').trim() + ' tone-' + tone;

        /* swap mark colour for night tone */
        if (markEl) markEl.classList.toggle('tone-white', tone === 'night');

        var newPanel = document.getElementById('brand-panel-' + key);
        if (newPanel) newPanel.setAttribute('data-state', 'active');

        if (galleries[key]) galleries[key].resume();
    }

    tabs.forEach(function (tab) {
        tab.addEventListener('click', function () { switchTab(tab.dataset.brand); });
    });

});

/* =====================================================
   ACCOMPLISHMENTS — swipe carousel
===================================================== */
document.addEventListener('DOMContentLoaded', function () {

    var section = document.getElementById('accomplishments');
    if (!section) return;

    var track   = document.getElementById('acTrack');
    if (!track) return;

    var cards   = Array.from(track.querySelectorAll('.ac-card'));
    var prevBtn = section.querySelector('.ac-prev');
    var nextBtn = section.querySelector('.ac-next');
    var dot     = section.querySelector('.ac-progress-dot');
    var ptrack  = section.querySelector('.ac-progress-track');

    /* ----- progress dot ----- */
    function updateProgress() {
        var max = track.scrollWidth - track.clientWidth;
        if (max <= 0 || !dot || !ptrack) return;
        var pct  = track.scrollLeft / max;
        var room = ptrack.offsetWidth - 9;
        dot.style.left = Math.round(pct * room) + 'px';
    }

    track.addEventListener('scroll', updateProgress, { passive: true });

    /* ----- arrow scroll ----- */
    function scrollCards(dir) {
        var w = cards[0] ? cards[0].offsetWidth + 16 : 356;
        track.scrollBy({ left: dir * w, behavior: 'smooth' });
    }

    if (prevBtn) prevBtn.addEventListener('click', function () { scrollCards(-1); });
    if (nextBtn) nextBtn.addEventListener('click', function () { scrollCards(1); });

    /* ----- keyboard on track ----- */
    track.addEventListener('keydown', function (e) {
        if (e.key === 'ArrowRight') { e.preventDefault(); scrollCards(1); }
        if (e.key === 'ArrowLeft')  { e.preventDefault(); scrollCards(-1); }
    });

    /* ----- mouse drag-to-scroll ----- */
    var dragging = false, startX = 0, startScroll = 0;

    track.addEventListener('pointerdown', function (e) {
        if (e.pointerType === 'touch') return;
        dragging = true;
        startX = e.clientX;
        startScroll = track.scrollLeft;
        track.setPointerCapture(e.pointerId);
        track.style.cursor = 'grabbing';
    });
    track.addEventListener('pointermove', function (e) {
        if (!dragging) return;
        track.scrollLeft = startScroll - (e.clientX - startX);
    });
    track.addEventListener('pointerup',     function () { dragging = false; track.style.cursor = ''; });
    track.addEventListener('pointercancel', function () { dragging = false; track.style.cursor = ''; });

    /* ----- entrance stagger (once) ----- */
    var prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    if (!prefersReduced && typeof IntersectionObserver !== 'undefined') {
        var io = new IntersectionObserver(function (entries) {
            if (!entries[0].isIntersecting) return;
            cards.forEach(function (card, i) {
                setTimeout(function () { card.classList.add('ac-visible'); }, i * 100);
            });
            io.disconnect();
        }, { threshold: 0.1 });
        io.observe(section);
    } else {
        cards.forEach(function (c) { c.classList.add('ac-visible'); });
    }

    updateProgress();

});

/* =====================================================
   CONTACT FORM — client-side validation only
===================================================== */
(function () {
    function initContactForm() {
        var form   = document.getElementById('ctcForm');
        var status = document.getElementById('ctcStatus');
        if (!form || !status) return;

        form.addEventListener('submit', function (e) {
            e.preventDefault();

            var name    = (form.querySelector('[name="name"]').value    || '').trim();
            var email   = (form.querySelector('[name="email"]').value   || '').trim();
            var message = (form.querySelector('[name="message"]').value || '').trim();

            if (!name || !email || !message) {
                status.textContent   = 'Add your name, email and message, then send again.';
                status.className     = 'f-status err';
                status.style.display = 'block';
                return;
            }

            status.textContent   = "Form preview: this form isn't connected to an inbox yet. Email info@rominaplc.com in the meantime.";
            status.className     = 'f-status';
            status.style.display = 'block';
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initContactForm);
    } else {
        initContactForm();
    }
}());


/* =====================================================
   SCROLL PROGRESS
===================================================== */
(function () {
    var bar = document.querySelector('.scroll-prog');
    if (!bar) return;
    var raf = 0;
    function update() {
        var max = document.documentElement.scrollHeight - window.innerHeight;
        var sp  = max > 0 ? Math.min(1, Math.max(0, window.scrollY / max)) : 0;
        bar.style.setProperty('--sp', sp.toFixed(4));
    }
    window.addEventListener('scroll', function () {
        cancelAnimationFrame(raf);
        raf = requestAnimationFrame(update);
    }, { passive: true });
    window.addEventListener('resize', function () {
        cancelAnimationFrame(raf);
        raf = requestAnimationFrame(update);
    }, { passive: true });
    update();
}());


/* =====================================================
   HEADER SCROLL STATE
===================================================== */
(function () {
    var hdr = document.querySelector('.site-header');
    if (!hdr) return;
    function updateHeader() { hdr.classList.toggle('is-scrolled', window.scrollY > 60); }
    window.addEventListener('scroll', updateHeader, { passive: true });
    updateHeader();
}());
</script>

</body>
</html>
