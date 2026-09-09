<?php
/* SOLUTIONS — For Affiliates  (modelled on propellerads.com/solutions/affiliates) */
$base = '';
$pageTitle = 'For Affiliates — OOVA Ads';
require __DIR__ . '/includes/header.php';

$benefits = [
    ['Massive volume', 'Up to 243 conversions a second from 2B+ daily users across social, web, messenger and programmatic.'],
    ['Top traffic quality', 'Multi-layer anti-fraud eliminates 98% of non-human activity pre-bid — you pay for real users only.'],
    ['Unmatched automation', 'AI bidding, auto-rules and smart optimization scale winning campaigns while you sleep.'],
    ['Every ad format', 'Push, In-Page Push, Popunder, Interactive, Social and DSP — all from one account.'],
];
$stats = [
    ['243', 'Conversions / second'],
    ['2B+', 'Daily active users'],
    ['195', 'GEOs covered'],
    ['6', 'Ad formats'],
];
?>
<section class="section solhero">
    <div class="container solhero__grid">
        <div class="solhero__text">
            <span class="eyebrow">For Affiliates</span>
            <h1>Up to <span class="tx-green">243 conversions</span> a second for affiliates</h1>
            <p class="lead">Industry-leading multisource ad network with the top traffic quality and volume, unmatched automation features, and multiple ad formats.</p>
            <div class="solhero__actions">
                <a href="https://panel.oovaads.com/login" class="btn btn--primary">Start now →</a>
                <a href="index.php#formats" class="btn btn--ghost">Explore ad formats</a>
            </div>
        </div>
        <div class="solhero__media">
            <img src="img/affiliates-hero.svg" alt="Affiliate marketer tracking conversions on OOVA Ads">
        </div>
    </div>
</section>

<section class="section section--tint">
    <div class="container">
        <div class="section-head section-head--center">
            <span class="eyebrow">Why affiliates choose OOVA</span>
            <h2>Everything you need to scale profitable campaigns</h2>
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
        <div class="section-head section-head--center"><h2>Affiliate performance in numbers</h2></div>
        <div class="about-stats__grid">
            <?php foreach ($stats as [$num, $label]): ?>
                <div class="statcard"><b><?= $num ?></b><span><?= $label ?></span></div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section cta">
    <div class="container">
        <h2>Start earning with OOVA Ads today</h2>
        <p>Join 50,000+ affiliates scaling growth on a multisource platform. Launch your first campaign in 5 minutes.</p>
        <div style="display:flex; gap:14px; justify-content:center; flex-wrap:wrap;">
            <a href="https://panel.oovaads.com/login" class="btn btn--light">Sign up free →</a>
            <a href="contact.php" class="btn btn--white-outline">Talk to us</a>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
