<?php
/* SOLUTIONS — For Direct Advertisers  (modelled on propellerads.com/solutions/direct-advertisers) */
$base = '';
$pageTitle = 'For Direct Advertisers — OOVA Ads';
require __DIR__ . '/includes/header.php';

$benefits = [
    ['Brand awareness at scale', 'Put your brand in front of 2B+ users across social, web, messenger and programmatic.'],
    ['Convert to real KPIs', 'Drive traffic that turns into leads, installs, deposits and sales — not just clicks.'],
    ['Auto-optimization', 'AI-powered features increase ROI and save your time by optimizing toward your goals.'],
    ['Precise targeting', 'Reach exactly the right audience with granular GEO, device, OS and interest targeting.'],
];
$stats = [
    ['2B+', 'Audience reach'],
    ['98%', 'Non-human activity filtered'],
    ['195', 'GEOs covered'],
    ['24/7', 'Expert support'],
];
?>
<section class="section solhero">
    <div class="container solhero__grid">
        <div class="solhero__text">
            <span class="eyebrow">For Direct Advertisers</span>
            <h1>Promote your brand to <span class="tx-green">target audience</span></h1>
            <p class="lead">Drive traffic that boosts brand awareness and converts to leads, installs, deposits and more. Reach performance KPIs by leveraging auto-optimization features that increase ROI and save your time.</p>
            <div class="solhero__actions">
                <a href="https://panel.oovaads.com/login" class="btn btn--primary">Start now →</a>
                <a href="contact.php" class="btn btn--ghost">Book a demo</a>
            </div>
        </div>
        <div class="solhero__media">
            <img src="img/direct-advertisers-hero.svg" alt="Direct advertiser optimizing brand campaigns with OOVA Ads">
        </div>
    </div>
</section>

<section class="section section--tint">
    <div class="container">
        <div class="section-head section-head--center">
            <span class="eyebrow">Why advertisers choose OOVA</span>
            <h2>Reach your audience and hit your KPIs</h2>
        </div>
        <div class="sol-grid">
            <?php foreach ($benefits as [$title, $desc]): ?>
                <div class="why-card">
                    <h3><?= $title ?></h3>
                    <p><?= $desc ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head section-head--center"><h2>Performance you can trust</h2></div>
        <div class="about-stats__grid">
            <?php foreach ($stats as [$num, $label]): ?>
                <div class="statcard"><b><?= $num ?></b><span><?= $label ?></span></div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section cta">
    <div class="container">
        <h2>Grow your brand with OOVA Ads</h2>
        <p>Reach your target audience and convert them into results — with auto-optimization that saves you time.</p>
        <div style="display:flex; gap:14px; justify-content:center; flex-wrap:wrap;">
            <a href="https://panel.oovaads.com/login" class="btn btn--light">Start now →</a>
            <a href="contact.php" class="btn btn--white-outline">Book a demo</a>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
