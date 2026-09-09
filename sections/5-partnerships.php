<?php
/* SECTION 5 — Partnerships  (PropellerAds ha-section-05) */
$partnerships = [
    ['Media Agencies', 'Manage all your clients from one dashboard with white-glove support and transparent reporting.', 'Partner with us'],
    ['Brands', 'Reach verified audiences at scale with enterprise-grade brand safety and fraud protection.', 'Grow your brand'],
    ['CPA Partners', 'Monetize high-converting traffic with competitive payouts and dedicated affiliate managers.', 'Join the network'],
];
?>
<section class="section section--dark partnerships" id="partnerships">
    <div class="container">
        <div class="partnerships__intro">
            <div class="section-head">
                <span class="eyebrow">Partnerships</span>
                <h2>Built for partners who think bigger</h2>
            </div>
            <p class="partnerships__lead">Whether you represent a brand, an agency, or premium traffic, OOVA Ads gives you the reach, tools, and people to grow with confidence.</p>
        </div>
        <div class="partner__grid">
            <?php foreach ($partnerships as $i => [$title, $desc, $cta]): ?>
                <article class="pcol">
                    <span class="pcol__number">0<?= $i + 1 ?></span>
                    <h3><?= $title ?></h3>
                    <p><?= $desc ?></p>
                    <a href="https://panel.oovaads.com/login" class="pcol__link"><span><?= $cta ?></span><span aria-hidden="true">↗</span></a>
                </article>
            <?php endforeach; ?>
        </div>
        <div class="partnerships__rule" aria-hidden="true"><span></span></div>
    </div>
</section>
