<?php
/* SOLUTIONS / INDUSTRY — Mobile Utilities  (modelled on propellerads.com/solutions/mobile-utilities) */
$base = '';
$pageTitle = 'Mobile Utilities Campaigns — OOVA Ads';
require __DIR__ . '/includes/header.php';

$benefits = [
    ['High-tech tools', 'Everything you need to launch and optimize VPN, antivirus and cleaner campaigns from one account.'],
    ['Creative templates', 'Ready-made, high-converting creatives and engaging ad formats — no design team required.'],
    ['Quality user acquisition', 'Multi-layer anti-fraud delivers real installs, not bots, across 195 GEOs.'],
    ['Every ad format', 'Push, In-Page Push, Popunder, Interactive and more — perfect for utility offers.'],
];
$stats = [
    ['x3', 'Higher install rate'],
    ['195', 'GEOs covered'],
    ['98%', 'Non-human activity filtered'],
    ['24/7', 'Expert support'],
];
?>
<section class="section solhero">
    <div class="container solhero__grid">
        <div class="solhero__text">
            <span class="eyebrow">Mobile Utilities</span>
            <h1>Make your <span class="tx-green">Mobile Utilities</span> campaign skyrocket</h1>
            <p class="lead">Cleaners, anti-viruses, VPNs and other applications… OOVA Ads can help you boost user acquisition of your Utilities campaigns — we have high-tech tools, creative templates, engaging ad formats, and more.</p>
            <div class="solhero__actions">
                <a href="https://panel.oovaads.com/login" class="btn btn--primary">Start now →</a>
                <a href="index.php#formats" class="btn btn--ghost">Explore ad formats</a>
            </div>
        </div>
        <div class="solhero__media">
            <img src="img/mobile-utilities-hero.svg" alt="Mobile utilities security campaign on OOVA Ads">
        </div>
    </div>
</section>

<section class="section section--tint">
    <div class="container">
        <div class="section-head section-head--center">
            <span class="eyebrow">Why utilities choose OOVA</span>
            <h2>Boost installs for VPNs, antiviruses &amp; cleaners</h2>
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
        <div class="section-head section-head--center"><h2>Utilities performance in numbers</h2></div>
        <div class="about-stats__grid">
            <?php foreach ($stats as [$num, $label]): ?>
                <div class="statcard"><b><?= $num ?></b><span><?= $label ?></span></div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section cta">
    <div class="container">
        <h2>Scale your utilities campaign with OOVA Ads</h2>
        <p>High-tech tools, ready creatives and quality traffic — launch your VPN, antivirus or cleaner campaign in minutes.</p>
        <div style="display:flex; gap:14px; justify-content:center; flex-wrap:wrap;">
            <a href="https://panel.oovaads.com/login" class="btn btn--light">Start now →</a>
            <a href="contact.php" class="btn btn--white-outline">Talk to us</a>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
