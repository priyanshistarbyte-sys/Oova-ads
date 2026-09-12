<?php
/* FEATURES — Automation  (modelled on propellerads.com/features/automation) */
$base = '';
$pageTitle = 'Automation — OOVA Ads';
require __DIR__ . '/includes/header.php';

$stats = [
    ['+80%', 'More conversions'],
    ['-40%', 'Campaign cost'],
    ['+60%', 'Your precious time'],
];
$cards = [
    ['🤖', 'AI-powered algorithms', 'Smart optimization boosts conversions automatically — no manual guesswork needed.'],
    ['⚙️', 'Auto-rules', 'Set rules once and let campaigns pause, scale or adjust bids on their own.'],
    ['🎯', 'CPA Goal bidding', 'Target your cost per acquisition and let the system hit it while you focus on growth.'],
    ['⏱️', 'Save time & budget', 'Automation frees your team from repetitive work and cuts wasted spend.'],
];
?>
<section class="section feathero">
    <span class="feathero__deco feathero__deco--tl" aria-hidden="true">💡</span>
    <span class="feathero__deco feathero__deco--tr" aria-hidden="true">⚙️</span>
    <span class="feathero__deco feathero__deco--br" aria-hidden="true">⏱️</span>
    <div class="container">
        <div class="feathero__inner">
            <span class="eyebrow">Automation</span>
            <h1>Maximize your <span class="tx-green">advertising ROI</span> with campaign automation</h1>
            <p>Forget about manual optimization that is slow and usually less effective. Let our AI-powered algorithms boost conversions, save your time and budget!</p>
            <a href="https://panel.oovaads.com/login" class="btn btn--primary">Try now →</a>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="about-stats__grid about-stats__grid--3">
            <?php foreach ($stats as [$num, $label]): ?>
                <div class="statcard statcard--light"><b><?= $num ?></b><span><?= $label ?></span></div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section section--tint">
    <div class="container">
        <div class="section-head section-head--center">
            <span class="eyebrow">What automation does for you</span>
            <h2>Less manual work, more results</h2>
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
        <h2>Maximize your ROI with OOVA Ads automation</h2>
        <p>Let AI-powered algorithms boost conversions and save your time and budget.</p>
        <div style="display:flex; gap:14px; justify-content:center; flex-wrap:wrap;">
            <a href="https://panel.oovaads.com/login" class="btn btn--light">Try now →</a>
            <a href="contact.php" class="btn btn--white-outline">Talk to us</a>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
