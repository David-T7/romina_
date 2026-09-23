{{-- =============================================
     VALUES — "Why choose Romina"
     React exact port: values section
============================================== --}}

<section class="values-section" id="values">
    <div class="values-wrap values-grid">

        {{-- Left: list --}}
        <div>
            <p class="mark">
                <span class="mark-rule"></span>
                <i aria-hidden="true"></i>
                Why choose Romina
            </p>

            <ul class="val-list" id="valList">

                <li class="on" data-index="0">
                    <button type="button" aria-expanded="true">
                        <span class="val-word">Excellence</span>
                        <i class="val-dot" aria-hidden="true"></i>
                    </button>
                    <p class="val-inline">Striving for superior performance and quality in everything we undertake.</p>
                </li>

                <li data-index="1">
                    <button type="button" aria-expanded="false">
                        <span class="val-word">Innovation</span>
                        <i class="val-dot" aria-hidden="true"></i>
                    </button>
                    <p class="val-inline">Committed to continuous creativity and adapting to stay ahead of the curve and the competition.</p>
                </li>

                <li data-index="2">
                    <button type="button" aria-expanded="false">
                        <span class="val-word">Quality</span>
                        <i class="val-dot" aria-hidden="true"></i>
                    </button>
                    <p class="val-inline">Providing our customers with the highest standard of products and services available.</p>
                </li>

                <li data-index="3">
                    <button type="button" aria-expanded="false">
                        <span class="val-word">Sustainability</span>
                        <i class="val-dot" aria-hidden="true"></i>
                    </button>
                    <p class="val-inline">Operating in an environmentally friendly way, protecting our resources for future generations.</p>
                </li>

                <li data-index="4">
                    <button type="button" aria-expanded="false">
                        <span class="val-word">Integrity</span>
                        <i class="val-dot" aria-hidden="true"></i>
                    </button>
                    <p class="val-inline">Conducting our business with unwavering honesty, transparency and ethical standards.</p>
                </li>

            </ul>
        </div>

        {{-- Right: sticky card --}}
        <aside class="val-side" aria-live="polite">
            <div class="val-card" id="valCard">
                <span class="divider" aria-hidden="true"><b></b><i></i><b></b></span>
                <p class="val-name" id="valName">Excellence</p>
                <p class="val-text" id="valText">Striving for superior performance and quality in everything we undertake.</p>
            </div>
        </aside>

    </div>
</section>
