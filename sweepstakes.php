<?php
/* SOLUTIONS / INDUSTRY — Lead Generation / Sweepstakes  (modelled on propellerads.com/solutions/sweepstakes) */
$base = '';
$pageTitle = 'Lead Generation Campaigns — OOVA Ads';
require __DIR__ . '/includes/header.php';

$stats = [
    ['x2', 'Volumes increase in LATAM after 2021'],
    ['+25%', 'CTR growth on Interstitial templates'],
    ['85%', 'Traffic generated with Push Notifications'],
    ['+15%', 'Conversions on Onclick with CPA Goal'],
];
$benefits = [
    ['Stable conversion flow', 'Build a reliable, repeatable conversion flow for your Lead Gen campaigns.'],
    ['Simplified user acquisition', 'High-quality audiences and easy setup let you focus on scaling, not busywork.'],
    ['Industry-standard optimization', 'CPA Goal, auto-rules and AI bidding increase your ROI campaign after campaign.'],
    ['High-quality audiences', 'Reach opt-in users with real intent across 195 GEOs and every ad format.'],
];
?>
<section class="section solhero">
    <div class="container solhero__grid">
        <div class="solhero__text">
            <span class="eyebrow">Lead Generation</span>
            <h1>Streamline conversion flow of your <span class="tx-green">Lead Gen ad campaigns</span></h1>
            <p class="lead">For performance marketers who run Lead Gen campaigns, OOVA Ads helps build stable conversion flow and simplify user acquisition. Increase your ROI with industry-standard optimization solutions and high-quality audiences.</p>
            <div class="solhero__actions">
                <a href="https://panel.oovaads.com/login" class="btn btn--primary">Start now →</a>
                <a href="index.php#formats" class="btn btn--ghost">Explore ad formats</a>
            </div>
        </div>
        <div class="solhero__media">
            <img src="img/sweepstakes-hero.svg" alt="Lead generation and sweepstakes conversions on OOVA Ads">
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
            <span class="eyebrow">Why Lead Gen chooses OOVA</span>
            <h2>Stable flow, simpler UA, higher ROI</h2>
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
        <h2>Streamline your Lead Gen flow with OOVA Ads</h2>
        <p>Stable conversion flow, high-quality audiences and industry-standard optimization to grow your ROI.</p>
        <div style="display:flex; gap:14px; justify-content:center; flex-wrap:wrap;">
            <a href="https://panel.oovaads.com/login" class="btn btn--light">Start now →</a>
            <a href="contact.php" class="btn btn--white-outline">Talk to us</a>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
