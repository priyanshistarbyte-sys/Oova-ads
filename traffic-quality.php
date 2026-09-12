<?php
/* FEATURES — Traffic Quality  (modelled on propellerads.com/features/traffic-quality) */
$base = '';
$pageTitle = 'Traffic Quality — OOVA Ads';
require __DIR__ . '/includes/header.php';

$cards = [
    ['🛡️', 'Advanced anti-bot', 'The most advanced anti-bot technology on the market filters invalid activity in real time.'],
    ['🔍', 'Multi-tier filtration', 'Every impression passes multiple checks, eliminating 98% of non-human activity pre-bid.'],
    ['✅', 'Verified audiences', 'You reach real, engaged users — protecting both your brand and your budget.'],
    ['📊', 'Transparent reporting', 'See exactly where your traffic comes from with clear, real-time quality metrics.'],
];
?>
<section class="section feathero">
    <span class="feathero__deco feathero__deco--tl" aria-hidden="true">🔄</span>
    <span class="feathero__deco feathero__deco--br" aria-hidden="true">📣</span>
    <div class="container">
        <div class="feathero__inner">
            <span class="eyebrow">Traffic Quality</span>
            <h1>97% of our partners name <span class="tx-green">traffic quality</span> as OOVA Ads' #1 advantage</h1>
            <p>To prove them right, we use the most advanced anti-bot technology on the market, protecting your brand and budget from invalid activity.</p>
            <a href="https://panel.oovaads.com/login" class="btn btn--primary">Find quality audience →</a>
        </div>
    </div>
</section>

<section class="section section--tint">
    <div class="container">
        <div class="section-head section-head--center">
            <span class="eyebrow">How we keep traffic clean</span>
            <h2>Real users, protected budgets</h2>
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
        <h2>Find quality audiences with OOVA Ads</h2>
        <p>Advanced anti-bot technology and multi-tier filtration mean you pay only for real, converting users.</p>
        <div style="display:flex; gap:14px; justify-content:center; flex-wrap:wrap;">
            <a href="https://panel.oovaads.com/login" class="btn btn--light">Find quality audience →</a>
            <a href="contact.php" class="btn btn--white-outline">Talk to us</a>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
