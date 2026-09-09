<?php
/* SOLUTIONS / INDUSTRY — Finance  (modelled on propellerads.com/solutions/finance) */
$base = '';
$pageTitle = 'Finance Campaigns — OOVA Ads';
require __DIR__ . '/includes/header.php';

$stats = [
    ['+30%', 'Higher CR for finance offers'],
    ['195', 'GEOs covered'],
    ['98%', 'Non-human activity filtered'],
    ['24/7', 'Expert support'],
];
$benefits = [
    ['Sought-after audiences', 'Reach one of the most valuable audiences — users looking to get, store or invest money.'],
    ['Powerful features', 'AI bidding, CPA Goal and auto-rules optimize toward deposits and qualified leads.'],
    ['High-performing formats', 'Push, In-Page Push, Popunder and Interactive — proven to convert for finance offers.'],
    ['Relevant placements', 'Brand-safe, anti-fraud protected inventory across web, social and messenger.'],
];
?>
<section class="section solhero">
    <div class="container solhero__grid">
        <div class="solhero__text">
            <span class="eyebrow">Finance</span>
            <h1>Lead generation for your <span class="tx-green">Finance offers</span></h1>
            <p class="lead">The Finance vertical refers to everything that has to do with money: getting, storing, or investing them. And how do you get one of the most sought-after audiences? With powerful features, high-performing formats, and relevant ad placements.</p>
            <div class="solhero__actions">
                <a href="https://panel.oovaads.com/login" class="btn btn--primary">Start now →</a>
                <a href="index.php#formats" class="btn btn--ghost">Explore ad formats</a>
            </div>
        </div>
        <div class="solhero__media">
            <img src="img/finance-hero.svg" alt="Finance offers audience on OOVA Ads">
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
            <span class="eyebrow">Why finance chooses OOVA</span>
            <h2>Reach high-value audiences and grow deposits</h2>
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
        <h2>Grow your finance offers with OOVA Ads</h2>
        <p>Powerful features, high-performing formats and relevant placements to reach sought-after audiences.</p>
        <div style="display:flex; gap:14px; justify-content:center; flex-wrap:wrap;">
            <a href="https://panel.oovaads.com/login" class="btn btn--light">Start now →</a>
            <a href="contact.php" class="btn btn--white-outline">Talk to us</a>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
