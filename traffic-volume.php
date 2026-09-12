<?php
/* FEATURES — Traffic Volume  (modelled on propellerads.com/features/traffic-volume) */
$base = '';
$pageTitle = 'Traffic Volume — OOVA Ads';
require __DIR__ . '/includes/header.php';

$stats = [
    ['120,370', 'Ad impressions per second'],
    ['1.5B+', 'Monthly audience'],
    ['195', 'GEOs covered'],
    ['6', 'Ad formats'],
];
$cards = [
    ['🌍', 'Global reach', '1.5B+ monthly audience across 195 GEOs — scale user acquisition anywhere.'],
    ['⚡', 'Enormous volume', 'Over 120,370 ad impressions a second give you the volume to test and scale fast.'],
    ['📈', 'Drive real results', 'Grow installs, sales, conversions and brand awareness across every industry.'],
    ['🎯', 'Every ad format', 'Push, In-Page Push, Popunder, Interactive, Social and DSP — all in one account.'],
];
?>
<section class="section feathero">
    <span class="feathero__deco feathero__deco--tl" aria-hidden="true">📊</span>
    <span class="feathero__deco feathero__deco--br" aria-hidden="true">⚙️</span>
    <div class="container">
        <div class="feathero__inner">
            <span class="eyebrow">Traffic Volume</span>
            <h1>We deliver over <span class="tx-green">120,370</span> ad impressions a second worldwide</h1>
            <p>With 1.5B+ monthly audience, we are a leading platform for user acquisition and performance marketing. We help businesses drive installs and sales, grow conversions and brand awareness, across industries.</p>
            <a href="https://panel.oovaads.com/login" class="btn btn--primary">Start now →</a>
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
            <span class="eyebrow">Why volume matters</span>
            <h2>Massive reach to scale anywhere</h2>
        </div>
        <div class="sol-grid">
            <?php foreach ($cards as [$icon, $title, $desc]): ?>
                <div class="why-card">
                    
                    <h3><?= $title ?></h3>
                    <p><?= $desc ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section cta">
    <div class="container">
        <h2>Scale with OOVA Ads' massive volume</h2>
        <p>120,370 impressions a second and 1.5B+ monthly audience — reach new users worldwide.</p>
        <div style="display:flex; gap:14px; justify-content:center; flex-wrap:wrap;">
            <a href="https://panel.oovaads.com/login" class="btn btn--light">Start now →</a>
            <a href="contact.php" class="btn btn--white-outline">Talk to us</a>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
