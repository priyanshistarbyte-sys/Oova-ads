<?php
/* SOLUTIONS — For Media Buyers  (modelled on propellerads.com/solutions/media-buyers) */
$base = '';
$pageTitle = 'For Media Buyers — OOVA Ads';
require __DIR__ . '/includes/header.php';

$benefits = [
    ['Huge scale', 'Up to 120,370 ad impressions a second worldwide — enough volume to test and scale fast.'],
    ['Quality push & pop', 'Top-performing push and popunder traffic built for high-volume user acquisition.'],
    ['Mix of ad formats', 'Push, In-Page Push, Popunder, Interactive and more — combine formats in one workflow.'],
    ['Global reach, fast', 'Launch across 195 GEOs in minutes and reach fresh audiences worldwide.'],
];
$stats = [
    ['120K+', 'Ad impressions / second'],
    ['195', 'GEOs covered'],
    ['6', 'Ad formats'],
    ['2B+', 'Daily active users'],
];
?>
<section class="section solhero">
    <div class="container solhero__grid">
        <div class="solhero__text">
            <span class="eyebrow">For Media Buyers</span>
            <h1>Scalable <span class="tx-green">user acquisition</span> for media buy teams</h1>
            <p class="lead">Expand your media buy portfolio with quality push and pop traffic. 120,370 ad impressions a second and a mix of ad formats let you scale user acquisition strategy worldwide fast to get new audience.</p>
            <div class="solhero__actions">
                <a href="https://panel.oovaads.com/login" class="btn btn--primary">Start now →</a>
                <a href="index.php#formats" class="btn btn--ghost">Explore ad formats</a>
            </div>
        </div>
        <div class="solhero__media">
            <img src="img/media-buyers-hero.svg" alt="Media buying team scaling user acquisition with OOVA Ads">
        </div>
    </div>
</section>

<section class="section section--tint">
    <div class="container">
        <div class="section-head section-head--center">
            <span class="eyebrow">Why media buyers choose OOVA</span>
            <h2>Volume, formats and speed to scale worldwide</h2>
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
        <div class="section-head section-head--center"><h2>Built for high-volume buying</h2></div>
        <div class="about-stats__grid">
            <?php foreach ($stats as [$num, $label]): ?>
                <div class="statcard"><b><?= $num ?></b><span><?= $label ?></span></div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section cta">
    <div class="container">
        <h2>Scale your media buying with OOVA Ads</h2>
        <p>Quality push and pop traffic at massive volume — launch your next user-acquisition campaign in minutes.</p>
        <div style="display:flex; gap:14px; justify-content:center; flex-wrap:wrap;">
            <a href="https://panel.oovaads.com/login" class="btn btn--light">Start now →</a>
            <a href="contact.php" class="btn btn--white-outline">Talk to us</a>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
