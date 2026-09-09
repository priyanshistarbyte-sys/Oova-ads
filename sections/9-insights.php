<?php
/* SECTION 9 — Insights / blog  (PropellerAds ha-section-09) */
$posts = [
    ['SUCCESS STORIES', '📈', 'TikTok Shop + OOVA Combo: 700k Conversions, $110k Total Profit [Case Study]'],
    ['PLATFORM UPDATES', '✨', '[NEW Ad Format] Interactive Ads: Get Clicks From The Most Engaged Users'],
    ['AD TRENDS', '🌍', 'World Cup 2026: Traffic Forecast & Verticals We Expect to Grow'],
    ['MEDIA BUYING', '🎯', 'Why Push and Pop Traffic Perform Where Social Ads Don\'t'],
    ['SUCCESS STORIES', '🚀', 'How Social Traffic Boosted a VPN Campaign to $100K Growth in 30 Days'],
    ['POPUNDER ADS', '💡', 'Pop-Up Advertising in 2026: Evergreen Classic or a Blast From the Past?'],
];
?>
<section class="section section--tint" id="resources">
    <div class="container">
        <div class="section-head section-head--center">
            <span class="eyebrow">Blog</span>
            <h2>Insights from OOVA Ads</h2>
        </div>
        <div class="insights__grid">
            <?php foreach ($posts as [$cat, $emoji, $title]): ?>
                <a class="post" href="#">
                    <div class="post__img"><span><?= $emoji ?></span></div>
                    <div class="post__body">
                        <span class="post__cat"><?= $cat ?></span>
                        <h3><?= $title ?></h3>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
