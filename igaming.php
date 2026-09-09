<?php
/* SOLUTIONS / INDUSTRY — iGaming  (modelled on propellerads.com/solutions/igaming) */
$base = '';
$pageTitle = 'iGaming Campaigns — OOVA Ads';
require __DIR__ . '/includes/header.php';

$stats = [
    ['x3', 'FTD growth for iGaming offers'],
    ['2B+', 'Players reachable worldwide'],
    ['195', 'GEOs covered'],
    ['24/7', 'Expert support'],
];
$benefits = [
    ['Full-funnel platform', 'From awareness to FTDs — run every stage of your iGaming funnel in one account.'],
    ['Massive reach', 'Reach engaged players across 2B+ users, 195 GEOs and every ad format.'],
    ['Traffic protection', 'Multi-layer anti-fraud delivers verified players, not bots, on every campaign.'],
    ['Any traffic strategy', 'Push, Popunder, Interactive and DSP give you the flexibility to scale fast.'],
];
?>
<section class="section solhero">
    <div class="container solhero__grid">
        <div class="solhero__text">
            <span class="eyebrow">iGaming</span>
            <h1>Run <span class="tx-green">iGaming Advertising Campaigns</span> that scale</h1>
            <p class="lead">A full-funnel ad platform for affiliates, brands, and agencies running iGaming offers — with the reach and protection to power any traffic strategy.</p>
            <div class="solhero__actions">
                <a href="https://panel.oovaads.com/login" class="btn btn--primary">Get traffic now →</a>
                <a href="index.php#formats" class="btn btn--ghost">Explore ad formats</a>
            </div>
        </div>
        <div class="solhero__media">
            <img src="img/igaming-hero.svg" alt="iGaming advertising campaigns on OOVA Ads">
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
            <span class="eyebrow">Why iGaming chooses OOVA</span>
            <h2>Reach engaged players and scale FTDs</h2>
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
        <h2>Scale your iGaming campaigns with OOVA Ads</h2>
        <p>A full-funnel platform with the reach and protection to power any iGaming traffic strategy.</p>
        <div style="display:flex; gap:14px; justify-content:center; flex-wrap:wrap;">
            <a href="https://panel.oovaads.com/login" class="btn btn--light">Get traffic now →</a>
            <a href="contact.php" class="btn btn--white-outline">Talk to us</a>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
