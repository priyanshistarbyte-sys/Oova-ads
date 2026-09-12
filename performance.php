<?php
/* FEATURES — Performance  (modelled on propellerads.com/features/performance) */
$base = '';
$pageTitle = 'Performance — OOVA Ads';
require __DIR__ . '/includes/header.php';

$cards = [
    ['🎯', 'Precise targeting', 'Reach the right audience with granular GEO, device, OS, interest and behavioral targeting.'],
    ['🎨', 'Ads customization', 'Tailor creatives and landing flows to each segment to lift CTR and conversion rate.'],
    ['🤖', 'Automated tools', 'AI bidding, CPA Goal and auto-rules optimize toward conversions in real time.'],
    ['🛡️', 'Quality traffic', 'Multi-layer anti-fraud means you pay for real, converting users — not bots.'],
];
?>
<section class="section feathero">
    <span class="feathero__deco feathero__deco--tl" aria-hidden="true">⚙️</span>
    <span class="feathero__deco feathero__deco--tr" aria-hidden="true">📊</span>
    <span class="feathero__deco feathero__deco--bl" aria-hidden="true">🖱️</span>
    <span class="feathero__deco feathero__deco--br" aria-hidden="true">💲</span>
    <div class="container">
        <div class="feathero__inner">
            <span class="eyebrow">Performance</span>
            <h1><span class="tx-green">Drop your conversion costs</span> with better targeting and ads customization</h1>
            <p>Ad performance is one of the key KPIs for marketers. That's why we develop manual and automated performance-boosting tools to show your ads to the right audience and make them more converting.</p>
            <a href="https://panel.oovaads.com/login" class="btn btn--primary">Get conversions →</a>
        </div>
    </div>
</section>

<section class="section section--tint">
    <div class="container">
        <div class="section-head section-head--center">
            <span class="eyebrow">How we boost performance</span>
            <h2>Everything working toward more conversions</h2>
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
        <h2>Drop your conversion costs with OOVA Ads</h2>
        <p>Better targeting, smarter customization and quality traffic — all working to lower your CPA.</p>
        <div style="display:flex; gap:14px; justify-content:center; flex-wrap:wrap;">
            <a href="https://panel.oovaads.com/login" class="btn btn--light">Get conversions →</a>
            <a href="contact.php" class="btn btn--white-outline">Talk to us</a>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
