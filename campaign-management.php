<?php
/* FEATURES — Campaign Management  (modelled on propellerads.com/features/campaign-management) */
$base = '';
$pageTitle = 'Campaign Management — OOVA Ads';
require __DIR__ . '/includes/header.php';

$formats = [
    ['🖱️', 'Onclick (Popunder)', 'Full-page and eye-catching ads opening in the background.'],
    ['🔔', 'Push Notification', 'Short message with an image delivered directly to the user\'s device.'],
    ['🎮', 'Interactive Ads', 'Clicks from playable-style creatives, AI-optimized for your offer.'],
    ['✈️', 'Telegram Ads', 'Native banners in Telegram mini apps.'],
];
?>
<!-- HERO -->
<section class="section feathero">
    <span class="feathero__deco feathero__deco--tl" aria-hidden="true">⚙️</span>
    <span class="feathero__deco feathero__deco--tr" aria-hidden="true">💲</span>
    <span class="feathero__deco feathero__deco--bl" aria-hidden="true">📣</span>
    <span class="feathero__deco feathero__deco--br" aria-hidden="true">⏱️</span>
    <div class="container">
        <div class="feathero__inner">
            <span class="eyebrow">Campaign Management</span>
            <h1>Start ad campaigns in minutes and always stay in control</h1>
            <p>Setting up and managing campaigns in OOVA Ads is straightforward and intuitive. Use a single dashboard to test, optimize, and scale your ad campaigns.</p>
            <a href="https://panel.oovaads.com/login" class="btn btn--primary">Start the campaign →</a>
        </div>
    </div>
</section>

<!-- STAGES -->
<section class="section">
    <div class="container">
        <div class="section-head section-head--center">
            <h2>Easily manage your ad campaign at every stage</h2>
        </div>

        <!-- Stage 1: testing -->
        <div class="about-split cm-row">
            <div class="about-split__text">
                <h2><span class="tx-green">When testing</span> CPA offers and own products</h2>
                <ul class="grow__list">
                    <li>Stay within your test budget by choosing the right bid with the <b>Traffic Estimator</b>.</li>
                    <li>Save time on testing and automate placement selection with <b>SmartCPC</b> and <b>SmartCPM</b> bidding models.</li>
                    <li>Kickstart your campaign with ready-to-go ad templates, or even your landing page as a creative.</li>
                </ul>
            </div>
            <div class="about-split__media"><img src="img/cm-chart.svg" alt="Impressions vs conversions chart"></div>
        </div>

        <!-- Stage 2: optimizing -->
        <div class="about-split about-split--reverse cm-row">
            <div class="about-split__text">
                <h2><span class="tx-green">When optimizing</span> your campaign for lower conversion costs</h2>
                <ul class="grow__list">
                    <li>Mix <b>ready-made audiences</b> gathered by interests, age, and gender to reach relevant users.</li>
                    <li><b>Auto-change campaign parameters</b> when your KPIs reach certain values.</li>
                </ul>
            </div>
            <div class="about-split__media"><img src="img/cm-audiences.svg" alt="Audience targeting dashboard"></div>
        </div>

        <!-- Stage 3: scaling -->
        <div class="cm-scale">
            <div class="cm-scale__text">
                <h2><span class="tx-green">When scaling</span> campaigns while keeping stable CR and high ROI</h2>
                <ul class="grow__list">
                    <li>Reach untapped audiences by adding extra traffic sources to your campaign.</li>
                    <li>Easily test new audiences with different ad formats — <b>auto-convert 1 campaign into 3</b> with different formats in a couple of clicks.</li>
                    <li>Track costs and profit, ROI, conversions, and other KPIs on a single dashboard.</li>
                </ul>
            </div>
            <div class="cm-formats">
                <?php foreach ($formats as [$icon, $title, $desc]): ?>
                    <div class="cm-fcard">
                        <h3><?= $title ?></h3>
                        <p><?= $desc ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section class="section cta">
    <div class="container">
        <h2>Start your ad campaign with OOVA Ads</h2>
        <p>Test, optimize and scale from a single, intuitive dashboard — and always stay in control.</p>
        <div style="display:flex; gap:14px; justify-content:center; flex-wrap:wrap;">
            <a href="https://panel.oovaads.com/login" class="btn btn--light">Start the campaign →</a>
            <a href="contact.php" class="btn btn--white-outline">Talk to us</a>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
