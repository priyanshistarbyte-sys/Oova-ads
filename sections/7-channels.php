<?php
/* SECTION 7 — Acquisition channels / ad formats  (PropellerAds ha-section-07)
   Accordion: each format expands to bullets (left) + a device mockup (right). One open at a time. */
$channels = [
    ['name' => 'Paid & Organic Social', 'title' => 'Paid & Organic Social',
     'desc' => 'Reach high-intent users across social platforms, sourced via our partner network. No need to juggle accounts or duplicate setups — just launch a new campaign in OOVA Ads.',
     'specs' => [['Performance', 'up to 30x higher CR vs display'], ['Access', 'Premium social inventory via our partner network'], ['Engagement', 'Users actively exploring new content'], ['Launch', 'Just paste your landing page — no creatives needed']]],
    ['name' => 'Interactive Ads', 'title' => 'Interactive Ads',
     'desc' => 'Pre-qualified audiences are pre-engaged with playable-style creatives before they see your offers.',
     'specs' => [['Reach', '66M+ daily, 2B impressions monthly, worldwide coverage'], ['Top Verticals', 'Ready-to-convert users for Finance, Social & Giveaways'], ['Mechanic', 'Drive users straight to your landing page with zero friction']]],
    ['name' => 'Telegram Mini Apps', 'title' => 'Telegram Mini Apps Ads',
     'desc' => 'Tap into the fast-growing Telegram ecosystem and reach users right inside mini apps.',
     'specs' => [['Reach', 'Millions of daily Telegram users'], ['Format', 'Native mini-app placements'], ['Best for', 'iGaming, crypto, utilities']]],
    ['name' => 'Popunder (Onclick)', 'title' => 'Popunder (Onclick) Ads',
     'desc' => 'Full-page ads that capture attention with massive reach and unbeatable scale.',
     'specs' => [['Volume', 'Billions of impressions daily'], ['Format', 'Full-page onclick'], ['Best for', 'Fast testing & scaling']]],
    ['name' => 'Push / In-Page Push', 'title' => 'Push & In-Page Push',
     'desc' => 'Two push formats, one buying interface — classic push for opted-ins, in-page push for actively browsing audiences across all devices.',
     'specs' => [['Scale', '186B+ monthly impressions'], ['Coverage', 'All devices and platforms, including iOS and macOS'], ['Creatives', 'Custom or AI-generated with dynamic personalization'], ['Delivery', 'Reaches users on-session and off-browser']]],
    ['name' => 'DSP / oRTB', 'title' => 'DSP / oRTB',
     'desc' => 'Buy programmatically through our DSP with full oRTB integration and granular control.',
     'specs' => [['Access', 'Programmatic oRTB inventory'], ['Control', 'Granular targeting & bidding'], ['Best for', 'Advanced media buyers']]],
];
?>
<section class="section section--tint" id="formats">
    <div class="container">
        <div class="section-head section-head--center">
            <span class="eyebrow">Ad Formats</span>
            <h2>6 scalable acquisition channels — one multisource platform</h2>
            <p class="lead">Already know your format? Run push, popunder, or interactive ads on your own terms. Every format comes with performance data and case studies to back your decisions and hit your targets.</p>
        </div>

        <div class="chacc">
            <?php foreach ($channels as $i => $c): ?>
                <details class="chitem" name="channels"<?= $i === 0 ? ' open' : '' ?>>
                    <summary class="chsum">
                        <span class="chsum__name"><?= $c['name'] ?></span>
                        <span class="chsum__chev" aria-hidden="true">⌄</span>
                    </summary>
                    <div class="chbody">
                        <div class="chbody__text">
                            <p class="chbody__desc"><?= $c['desc'] ?></p>
                            <ul class="chbody__specs">
                                <?php foreach ($c['specs'] as [$k, $v]): ?>
                                    <li><b><?= $k ?>:</b> <?= $v ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <a href="https://panel.oovaads.com/login" class="chbody__link">About this format →</a>
                        </div>
                        <div class="chbody__media">
                            <img src="img/ad-mockup.svg" alt="<?= $c['title'] ?> preview on laptop and phone">
                        </div>
                    </div>
                </details>
            <?php endforeach; ?>
        </div>
    </div>
</section>
