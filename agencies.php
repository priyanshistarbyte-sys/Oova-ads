<?php
/* SOLUTIONS — For Agencies  (modelled on propellerads.com/solutions/agencies) */
$base = '';
$pageTitle = 'For Agencies — OOVA Ads';
require __DIR__ . '/includes/header.php';

$benefits = [
    ['All clients, one dashboard', 'Manage every client account and campaign from a single, organized workspace.'],
    ['Unique reach', 'About 1.5B monthly audience reach helps you find fresh leads beyond saturated channels.'],
    ['White-glove support', 'Dedicated managers and 24/7 support help your team launch, optimize and scale.'],
    ['Transparent reporting', 'Real-time, client-ready analytics you can share with confidence.'],
];
$stats = [
    ['1.5B', 'Monthly audience reach'],
    ['50K+', 'Trusted partners'],
    ['24/7', 'Expert support'],
    ['195', 'GEOs covered'],
];
?>
<section class="section solhero">
    <div class="container solhero__grid">
        <div class="solhero__text">
            <span class="eyebrow">For Agencies</span>
            <h1>New ad channels in <span class="tx-green">agency's marketing</span> toolkit</h1>
            <p class="lead">Industry-leading platform with about 1,500,000,000 monthly audience reach to help advertising agencies find unique leads.</p>
            <div class="solhero__actions">
                <a href="https://panel.oovaads.com/login" class="btn btn--primary">Start now →</a>
                <a href="contact.php" class="btn btn--ghost">Book a demo</a>
            </div>
        </div>
        <div class="solhero__media">
            <img src="img/agencies-hero.svg" alt="Advertising agency analysing growth with OOVA Ads">
        </div>
    </div>
</section>

<section class="section section--tint">
    <div class="container">
        <div class="section-head section-head--center">
            <span class="eyebrow">Why agencies choose OOVA</span>
            <h2>New channels, more leads, less busywork</h2>
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
        <div class="section-head section-head--center"><h2>Built for agency scale</h2></div>
        <div class="about-stats__grid">
            <?php foreach ($stats as [$num, $label]): ?>
                <div class="statcard"><b><?= $num ?></b><span><?= $label ?></span></div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section cta">
    <div class="container">
        <h2>Add OOVA Ads to your agency toolkit</h2>
        <p>Give your clients new acquisition channels with 1.5B monthly reach — backed by a dedicated team.</p>
        <div style="display:flex; gap:14px; justify-content:center; flex-wrap:wrap;">
            <a href="https://panel.oovaads.com/login" class="btn btn--light">Get started →</a>
            <a href="contact.php" class="btn btn--white-outline">Book a demo</a>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
