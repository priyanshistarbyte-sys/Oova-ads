<?php
/* SOLUTIONS / INDUSTRY — Mobile Apps  (modelled on propellerads.com/solutions/mobile-apps) */
$base = '';
$pageTitle = 'Mobile App Campaigns — OOVA Ads';
require __DIR__ . '/includes/header.php';

$stats = [
    ['+38%', 'More conversions with Onclick in 2023'],
    ['4x', 'Higher CTR with Push Badge feature'],
    ['2x', 'Conversions with In-Page Push in 2023'],
    ['76%', 'Of campaigns on CPA Goal basis'],
];
$benefits = [
    ['New ad formats', 'Expand your mobile marketing strategy with Push, In-Page Push, Interactive and more.'],
    ['More app installs', 'Drive high-intent installs and in-app events across Android & iOS at scale.'],
    ['Reach wider audience', '2B+ users across 195 GEOs — find new users beyond saturated channels.'],
    ['Stay within budget', 'CPA Goal and auto-optimization keep your cost per install predictable.'],
];
?>
<section class="section solhero">
    <div class="container solhero__grid">
        <div class="solhero__text">
            <span class="eyebrow">Mobile Apps</span>
            <h1>Get more users for your <span class="tx-green">mobile application</span></h1>
            <p class="lead">Expand your mobile marketing strategy with new ad formats! Increase your mobile app installs and reach a wider audience while staying within budget.</p>
            <div class="solhero__actions">
                <a href="https://panel.oovaads.com/login" class="btn btn--primary">Get more users →</a>
                <a href="index.php#formats" class="btn btn--ghost">Explore ad formats</a>
            </div>
        </div>
        <div class="solhero__media">
            <img src="img/mobile-apps-hero.svg" alt="Get more users for your mobile app with OOVA Ads">
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="about-stats__grid">
            <?php foreach ($stats as [$num, $label]): ?>
                <div class="statcard statcard--light"><b><?= $num ?></b><span><?= $label ?></span></div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section section--tint">
    <div class="container">
        <div class="section-head section-head--center">
            <span class="eyebrow">Why apps choose OOVA</span>
            <h2>More installs, wider reach, within budget</h2>
        </div>
        <div class="sol-grid">
            <?php foreach ($benefits as [$title, $desc]): ?>
                <div class="why-card"><h3><?= $title ?></h3><p><?= $desc ?></p></div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section cta">
    <div class="container">
        <h2>Get more users for your app with OOVA Ads</h2>
        <p>New ad formats and quality traffic to grow installs — all while staying on budget.</p>
        <div style="display:flex; gap:14px; justify-content:center; flex-wrap:wrap;">
            <a href="https://panel.oovaads.com/login" class="btn btn--light">Get more users →</a>
            <a href="contact.php" class="btn btn--white-outline">Talk to us</a>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
