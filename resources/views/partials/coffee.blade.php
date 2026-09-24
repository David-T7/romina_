{{-- =============================================
     ROMINA COFFEE — exact port of React section
============================================== --}}

<section class="coffee-sec" id="coffee">

    {{-- 1. HERO: beans full-bleed image + headline --}}
    <div class="cof-beans" id="cofBeans">

        <div class="cof-beans-img" id="cofBeansImg">
            <img
                src="{{ asset('images/coffee/green-beans.jpg') }}"
                alt="Green Ethiopian coffee beans drying on raised beds"
            >
        </div>

        <div class="cof-wrap cof-beans-copy">

            <p class="mark tone-white">
                <span class="mark-rule"></span>
                <i aria-hidden="true"></i>
                Romina Coffee, since 2009
            </p>

            <h2 class="cof-display">Upholding the legacy of Ethiopian coffee</h2>

            <p class="cof-lead">
                Ethiopian coffee is more than an export commodity. It is one of life's little
                luxuries, a catalyst for meaningful social interaction, and a source of
                inspiration worldwide.
            </p>

        </div>

    </div>


    {{-- 2. GRID: sticky photo left + stats right --}}
    <div class="cof-wrap cof-grid">

        <div class="cof-photo">
            <div class="cof-photo-in">
                <img
                    src="{{ asset('images/coffee/drying-beds.jpg') }}"
                    alt="A farmer tending coffee on a drying bed"
                >
            </div>
            <p class="cof-caption">Drying beds. Photography from the Romina brand library.</p>
        </div>

        <ol class="cof-stats" id="cofStats">

            <li>
                <p class="cof-stat-n"><span class="cof-count" data-to="24">0</span></p>
                <div>
                    <p class="cof-stat-l">Wet mill stations</p>
                    <p class="cof-stat-t">Located across all major coffee-growing regions, at advantageous altitudes.</p>
                </div>
            </li>

            <li>
                <p class="cof-stat-n"><span class="cof-count" data-to="7">0</span>+</p>
                <div>
                    <p class="cof-stat-l">Coffee-growing regions</p>
                    <p class="cof-stat-t">Sidamo, Limmu, Yirgachefe, Guji, Nekempte, Anfilo and Nansabo.</p>
                </div>
            </li>

            <li>
                <p class="cof-stat-n">3,000–<span class="cof-count" data-to="3500">0</span></p>
                <div>
                    <p class="cof-stat-l">Tons of annual capacity</p>
                    <p class="cof-stat-t">Annual production capacity, in tons.</p>
                </div>
            </li>

            <li>
                <p class="cof-stat-n"><span class="cof-count" data-to="30000">0</span>+</p>
                <div>
                    <p class="cof-stat-l">Farmers</p>
                    <p class="cof-stat-t">Supplying beans of varied tastes and profiles.</p>
                </div>
            </li>

            <li>
                <p class="cof-stat-n"><span class="cof-count" data-to="6000">0</span>+</p>
                <div>
                    <p class="cof-stat-l">Specialty farmer partners</p>
                    <p class="cof-stat-t">Smallholders producing specialty coffee in the Oromia region.</p>
                </div>
            </li>

            <li>
                <p class="cof-stat-n"><span class="cof-count" data-to="7">0</span></p>
                <div>
                    <p class="cof-stat-l">Certified stations</p>
                    <p class="cof-stat-t">Holding Rainforest, Fair Trade and UTZ certifications.</p>
                </div>
            </li>

        </ol>

    </div>


    {{-- 3. QUOTE + MARKETS --}}
    <div class="cof-wrap cof-quote">
        <p class="cof-quote-text">"Spreading the magic beans across continents."</p>
        <ul class="cof-markets">
            <li>Europe</li>
            <li>USA</li>
            <li>Asia</li>
            <li>Middle East</li>
        </ul>
    </div>


    {{-- 4. JOURNEY: farm to global market --}}
    <div class="cof-wrap cof-journey" id="cofJourney">

        <h3 class="cof-journey-h3">From farm to global market</h3>

        <ol class="cof-j-list">
            <span class="cof-j-line"><i></i></span>
            <li><span class="cof-j-dot"></span><span class="cof-j-n">01</span><span class="cof-j-name">Farm</span></li>
            <li><span class="cof-j-dot"></span><span class="cof-j-n">02</span><span class="cof-j-name">Harvest</span></li>
            <li><span class="cof-j-dot"></span><span class="cof-j-n">03</span><span class="cof-j-name">Wet mill</span></li>
            <li><span class="cof-j-dot"></span><span class="cof-j-n">04</span><span class="cof-j-name">Processing</span></li>
            <li><span class="cof-j-dot"></span><span class="cof-j-n">05</span><span class="cof-j-name">Cup testing</span></li>
            <li><span class="cof-j-dot"></span><span class="cof-j-n">06</span><span class="cof-j-name">Export</span></li>
            <li><span class="cof-j-dot"></span><span class="cof-j-n">07</span><span class="cof-j-name">Global market</span></li>
        </ol>

        <div class="cof-j-sort">
            <img
                src="{{ asset('images/coffee/hand-sorting.jpg') }}"
                alt="Hand-sorting green coffee at a processing station"
            >
        </div>

    </div>


    {{-- 5. THREE COLUMNS --}}
    <div class="cof-wrap cof-cols">

        <div>
            <h4>Quality assurance</h4>
            <p>Careful handpicking and rigorous cupping tests before any lot is approved for export.</p>
        </div>

        <div>
            <h4>Traceability</h4>
            <p>Farm-to-cup tracking, from the station where a lot is washed through to delivery.</p>
        </div>

        <div>
            <h4>Farmers first</h4>
            <p>Training and knowledge transfer, disease-resistant seedlings and shade trees, and fairer
               compensation through higher pricing and a post-sale share.</p>
        </div>

    </div>

</section>
