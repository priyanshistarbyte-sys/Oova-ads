<?php
/* SOLUTIONS / INDUSTRY — eCommerce  (modelled on propellerads.com/solutions/ecommerce) */
$base = '';
$pageTitle = 'eCommerce Campaigns — OOVA Ads';
require __DIR__ . '/includes/header.php';

$stats = [
    ['+22%', 'Demand compared to the previous year'],
    ['90%', 'Conversions generated on Popunder'],
    ['71%', 'Of conversions from South-East Asia'],
    ['300 Mln', 'Impressions daily worldwide for eCommerce offers'],
];
$benefits = [
    ['Biggest choice of offers', 'From gadgets to luxury goods — run the widest range of eCommerce offers on one platform.'],
    ['Appealing ad formats', 'Push, Interactive, Popunder and more — creatives that make shoppers click and buy.'],
    ['Interest audiences', 'Reach ready-to-buy users with granular interest, GEO and device targeting.'],
    ['Smart optimization', 'AI bidding and CPA Goal maximize ROAS and scale winning products automatically.'],
];
?>
<section class="section solhero">
    <div class="container solhero__grid">
        <div class="solhero__text">
            <span class="eyebrow">E-commerce</span>
            <h1>New audience for your <span class="tx-green">eCommerce offers</span></h1>
            <p class="lead">eCommerce vertical has the biggest choice of offers you can run: from gadgets to luxury goods. And OOVA Ads helps you get the most out of them — with appealing ad formats, smart optimization features, interest audiences, and more.</p>
            <div class="solhero__actions">
                <a href="https://panel.oovaads.com/login" class="btn btn--primary">Start now →</a>
                <a href="index.php#formats" class="btn btn--ghost">Explore ad formats</a>
            </div>
        </div>
        <div class="solhero__media">
            <img src="img/ecommerce-hero.svg" alt="eCommerce shopping audience on OOVA Ads">
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
            <span class="eyebrow">Why eCommerce chooses OOVA</span>
            <h2>Reach ready-to-buy shoppers and grow sales</h2>
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
        <h2>Grow your eCommerce sales with OOVA Ads</h2>
        <p>Appealing formats, interest audiences and smart optimization — reach new shoppers worldwide.</p>
        <div style="display:flex; gap:14px; justify-content:center; flex-wrap:wrap;">
            <a href="https://panel.oovaads.com/login" class="btn btn--light">Start now →</a>
            <a href="contact.php" class="btn btn--white-outline">Talk to us</a>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
