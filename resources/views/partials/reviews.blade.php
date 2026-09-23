{{-- =============================================
     GUEST REVIEWS — What our guests say
============================================== --}}

<section class="reviews-section" id="reviews">
    <div class="rev-wrap">

        {{-- LEFT: image carousel --}}
        <div class="rev-media" role="presentation">
            <div class="rev-img-track" id="revImgTrack">

                <figure class="rev-img">
                    <img
                        src="{{ asset('images/reviews/review-1.jpg') }}"
                        alt="Romina Restaurant dining experience — guest review"
                    >
                </figure>

                <figure class="rev-img">
                    <img
                        src="{{ asset('images/reviews/review-3.jpg') }}"
                        alt="Romina grilled beef ribs and Ethiopian coffee — guest review"
                    >
                </figure>

                <figure class="rev-img">
                    <img
                        src="{{ asset('images/reviews/review-2.jpg') }}"
                        alt="Romina guest ratings and reviews"
                    >
                </figure>

                <figure class="rev-img">
                    <img
                        src="{{ asset('images/reviews/review-4.jpg') }}"
                        alt="Romina Restaurant atmosphere and food"
                    >
                </figure>

            </div>
        </div>

        {{-- RIGHT: review content --}}
        <div class="rev-content">

            <p class="mark tone-white">
                <span class="mark-rule"></span>
                <i aria-hidden="true"></i>
                Guest reviews
            </p>

            <h2 class="rev-headline">What our<br>guests say.</h2>

            <div class="rev-aggregate">
                <span class="rev-score">4.3</span>
                <div class="rev-agg-right">
                    <div class="rev-stars-static" aria-label="4.3 out of 5 stars">
                        <span>★★★★</span><span class="rev-star-dim">★</span>
                    </div>
                    <span class="rev-count">141 guest reviews</span>
                </div>
            </div>

            <div class="rev-cards-wrap">
                <div class="rev-cards" id="revCards">

                    {{-- Review 1 — Bill B, TripAdvisor --}}
                    <article class="rev-card" data-index="0">
                        <div class="rev-stars" aria-label="5 out of 5 stars">★★★★★</div>
                        <blockquote class="rev-text">
                            "Sitting under the trees in front of Romina on a sunny day is a great way
                            to have lunch. The staff were quite welcoming and explained the various menu
                            options. The beef filet tibs were special — not the tiny hard-to-chew kind
                            one gets at other places. The vegetable fasting dish was cleverly arranged
                            as a many-layered cake, topped with a green chili candle."
                        </blockquote>
                        <footer class="rev-author">
                            <span class="rev-initials" aria-hidden="true">BB</span>
                            <div class="rev-author-detail">
                                <strong class="rev-name">Bill B</strong>
                                <span class="rev-meta">Bel Air, Maryland &middot; December 2018</span>
                            </div>
                        </footer>
                    </article>

                    {{-- Review 2 — geelongexpat, TripAdvisor --}}
                    <article class="rev-card" data-index="1">
                        <div class="rev-stars" aria-label="5 out of 5 stars">★★★★★</div>
                        <blockquote class="rev-text">
                            "Romina offers a wide range of food from a range of cuisines. I opted for
                            grilled beef ribs which came with injera — service was fast and the food
                            was tasty. It was good to get some authentic Ethiopian cuisine in the capital.
                            The coffee was strong and had a beautiful caramel coloured top.
                            Just like it should have."
                        </blockquote>
                        <footer class="rev-author">
                            <span class="rev-initials" aria-hidden="true">GE</span>
                            <div class="rev-author-detail">
                                <strong class="rev-name">geelongexpat</strong>
                                <span class="rev-meta">Melbourne, Australia &middot; July 2024</span>
                            </div>
                        </footer>
                    </article>

                    {{-- Review 3 --}}
                    <article class="rev-card" data-index="2">
                        <div class="rev-stars" aria-label="5 out of 5 stars">★★★★★</div>
                        <blockquote class="rev-text">
                            "Very nice experience. Great authentic food, good draft beer, very friendly
                            staff. Recommended!"
                        </blockquote>
                        <footer class="rev-author">
                            <span class="rev-initials" aria-hidden="true">RG</span>
                            <div class="rev-author-detail">
                                <strong class="rev-name">Romina Guest</strong>
                                <span class="rev-meta">Addis Ababa</span>
                            </div>
                        </footer>
                    </article>

                    {{-- Review 4 --}}
                    <article class="rev-card" data-index="3">
                        <div class="rev-stars" aria-label="5 out of 5 stars">★★★★★</div>
                        <blockquote class="rev-text">
                            "One of the best restaurants in Addis Ababa. Full service and very
                            clean facilities."
                        </blockquote>
                        <footer class="rev-author">
                            <span class="rev-initials" aria-hidden="true">RG</span>
                            <div class="rev-author-detail">
                                <strong class="rev-name">Romina Guest</strong>
                                <span class="rev-meta">Addis Ababa</span>
                            </div>
                        </footer>
                    </article>

                </div>
            </div>

            <nav class="rev-controls" aria-label="Review navigation">

                <button class="rev-btn" id="revPrev" aria-label="Previous review">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" aria-hidden="true">
                        <path d="M11 4l-5 5 5 5" stroke="currentColor" stroke-width="1.5"
                              stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>

                <div class="rev-dots" id="revDots" role="tablist" aria-label="Review pages">
                    <button class="rev-dot active" data-idx="0"
                            role="tab" aria-label="Review 1" aria-selected="true"></button>
                    <button class="rev-dot" data-idx="1"
                            role="tab" aria-label="Review 2" aria-selected="false"></button>
                    <button class="rev-dot" data-idx="2"
                            role="tab" aria-label="Review 3" aria-selected="false"></button>
                    <button class="rev-dot" data-idx="3"
                            role="tab" aria-label="Review 4" aria-selected="false"></button>
                </div>

                <button class="rev-btn" id="revNext" aria-label="Next review">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" aria-hidden="true">
                        <path d="M7 4l5 5-5 5" stroke="currentColor" stroke-width="1.5"
                              stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>

            </nav>

        </div>

    </div>
</section>
