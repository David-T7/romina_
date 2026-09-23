    {{-- ==========================================
         PARTNERS — auto-scroll logo strip
         To add a real logo: place the file in public/images/partners/
         and set 'image' => asset('images/partners/filename.png') below.
    =========================================== --}}

    <?php
    $partners = [
        ['name' => 'Romina Restaurants', 'image' => null, 'alt' => 'Romina Restaurants'],
        ['name' => 'KOBA',               'image' => null, 'alt' => 'KOBA Patisserie & Bakery'],
        ['name' => 'Meskott',            'image' => null, 'alt' => 'Meskott Culinary Experience'],
        ['name' => 'Romina Coffee',      'image' => null, 'alt' => 'Romina Coffee'],
        ['name' => 'Romina Imports',     'image' => null, 'alt' => 'Romina Imports'],
        ['name' => 'Jaquar World',       'image' => null, 'alt' => 'Jaquar World Addis Ababa'],
    ];
    ?>

    <section class="partners-strip" aria-label="Partners">

        <div class="container">
            <p class="mark">
                <span class="mark-rule"></span>
                <i></i>
                Partners
            </p>
        </div>

        <div class="partners-marquee">
            <div class="partners-track">

                {{-- first pass (visible to screen readers) --}}
                @foreach ($partners as $partner)
                    <div class="partner-tile">
                        @if ($partner['image'])
                            <img src="{{ $partner['image'] }}" alt="{{ $partner['alt'] }}">
                        @else
                            <span class="partner-tile-name">{{ $partner['name'] }}</span>
                        @endif
                    </div>
                @endforeach

                {{-- duplicate pass for seamless loop --}}
                @foreach ($partners as $partner)
                    <div class="partner-tile" aria-hidden="true">
                        @if ($partner['image'])
                            <img src="{{ $partner['image'] }}" alt="">
                        @else
                            <span class="partner-tile-name">{{ $partner['name'] }}</span>
                        @endif
                    </div>
                @endforeach

            </div>
        </div>

    </section>
