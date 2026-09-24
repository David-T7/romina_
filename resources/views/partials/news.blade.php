    {{--
         LATEST NEWS — ported from React romina.jsx (News component)
         Edit $news / $news_cats to add stories or swap for DB data without touching markup.
    --}}

    <?php
    $news_cats = ['All', 'Events', 'Launches', 'Coffee harvest', 'Awards', 'CSR', 'Restaurants', 'Group news'];

    $news = [
        [
            'cat'   => 'Coffee harvest',
            'title' => "Placeholder story: this season's harvest update",
            'shot'  => 'Cherry picking at a partner farm',
        ],
        [
            'cat'   => 'Launches',
            'title' => 'Placeholder story: a new branch opening',
            'shot'  => 'Opening day at a new location',
        ],
        [
            'cat'   => 'CSR',
            'title' => 'Placeholder story: community project update',
            'shot'  => 'Community project site',
        ],
        [
            'cat'   => 'Group news',
            'title' => 'Placeholder story: group announcement',
            'shot'  => 'Romina head office, Noah Diplomat Building',
        ],
    ];
    ?>

    {{-- Data island — JS reads this, PHP array is the only source to edit --}}
    <script type="application/json" id="newsJson"><?php echo json_encode($news, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP); ?></script>

    <section class="sec news" id="news">
        <div class="news-wrap">

            <div class="news-head">
                <div>
                    <p class="mark">
                        <span class="mark-rule"></span>
                        <i></i>
                        Latest news
                    </p>
                    <h2 class="t-h2">Stories from across the group</h2>
                </div>
                <a class="link-cta" href="#">
                    View all news
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
                </a>
            </div>

            <div class="chips" role="group" aria-label="Filter news">
                @foreach ($news_cats as $c)
                    <button
                        class="{{ $c === 'All' ? 'on' : '' }}"
                        aria-pressed="{{ $c === 'All' ? 'true' : 'false' }}"
                        data-chip="{{ $c }}"
                    >{{ $c }}</button>
                @endforeach
            </div>

            {{-- Populated by JS --}}
            <div class="news-body" id="newsBody"></div>

        </div>

        {{-- Article modal --}}
        <div class="news-overlay" id="newsOverlay" hidden aria-modal="true" role="dialog" aria-label="Article">
            <div class="news-dialog-box">
                <button class="news-dialog-close" id="newsDialogClose" aria-label="Close article">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                </button>
                <div class="news-dialog-img" id="newsDialogImg"></div>
                <div class="news-dialog-body">
                    <p class="news-meta" id="newsDialogMeta"></p>
                    <h2 class="news-dialog-title" id="newsDialogTitle"></h2>
                    <p class="news-dialog-desc">This is a placeholder article. The communications team will supply the headline, date, photography and full story before launch.</p>
                </div>
            </div>
        </div>

    </section>
