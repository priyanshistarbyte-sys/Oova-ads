<?php
/* ABOUT US — modelled on propellerads.com/company/about-us
   Lives in the project root so it shares header.php / footer.php and the same asset paths. */
$base = '';
$pageTitle = 'About OOVA Ads — Market-leading Performance Advertising';

require __DIR__ . '/includes/header.php';

$features = [
    ['🏅', 'Traffic Quality', 'We drive high-quality traffic using the latest AI developments and multi-tier partner evaluation.'],
    ['⚙️', 'Optimization', 'We help you spend less and grow CTR to maximize your ROMI on every campaign.'],
    ['🎯', 'Precision Targeting', 'Granular GEO, device, OS and interest targeting to reach exactly who matters.'],
    ['📊', 'Real-Time Data', 'Transparent, live reporting so you can optimize on the fly and scale what works.'],
];
$stats = [
    ['1B+', 'Audience coverage'],
    ['70K', 'Ad campaigns monthly'],
    ['60M', 'Tracked conversions monthly'],
    ['32K', 'Active advertisers'],
];
$careers = [
    'Get experience and knowledge — learn from the best industry pros, coming from 15 countries.',
    'Travel and explore the world to see how other cultures execute business in your field.',
    'Improve your qualifications with the OOVA Continuous Education program.',
];
?>

<!-- HERO -->
<section class="section about-hero">
    <div class="container">
        <h1 class="about-hero__title">What is <span class="tx-green">OOVA Ads</span>?</h1>
        <div class="about-split">
            <div class="about-split__media">
                <img src="img/about-hero.svg" alt="Building a campaign on the OOVA Ads dashboard">
            </div>
            <div class="about-split__text">
                <h2>Market-leading ad platform</h2>
                <p>OOVA Ads provides powerful performance marketing solutions on a global scale for brands, agencies, and affiliates. Founded to make growth accessible, the company is now one of the biggest traffic providers with 2B+ monthly audience reach and thousands of advertising campaigns launched daily, across every GEO.</p>
                <p>From social and web to messenger and programmatic inventory, we bring every acquisition channel into one account — powered by AI optimization and enterprise-grade anti-fraud.</p>
            </div>
        </div>
    </div>
</section>

<!-- BELIEF BAND -->
<section class="section section--tint about-belief">
    <div class="container about-belief__grid">
        <h2>At OOVA Ads, we believe that every brand, product or offer can find its audience and place on the market.</h2>
        <p>We see our role in making that possible. We focus on helping our clients choose what's right for their business, and provide them with affordable performance marketing solutions that bring real financial value — letting their business thrive and be known worldwide.</p>
    </div>
</section>

<!-- ADVANCED MARTECH -->
<section class="section about-martech">
    <div class="container about-split about-split--reverse">
        <div class="about-split__text">
            <span class="eyebrow">Technology</span>
            <h2>Advanced MarTech technologies</h2>
            <p class="lead">OOVA Ads' advertising platform is a complete marketing ecosystem. We combine massive reach with the tools and intelligence you need to turn traffic into results.</p>
        </div>
        <div class="about-feat">
            <?php foreach ($features as [$icon, $title, $desc]): ?>
                <div class="about-feat__item">
                    <span class="about-feat__icon"><?= $icon ?></span>
                    <div>
                        <h3><?= $title ?></h3>
                        <p><?= $desc ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- STATS -->
<section class="section section--dark about-stats">
    <div class="container">
        <div class="section-head section-head--center">
            <h2>What does that mean in real numbers?</h2>
        </div>
        <div class="about-stats__grid">
            <?php foreach ($stats as [$num, $label]): ?>
                <div class="statcard">
                    <b><?= $num ?></b>
                    <span><?= $label ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- COME & GROW WITH US -->
<section class="section grow" id="careers">
    <div class="container about-split">
        <div class="about-split__text">
            <h2>Come &amp; grow with us</h2>
            <p class="lead">We are always looking for ambitious and intelligent specialists.</p>
            <ul class="grow__list">
                <?php foreach ($careers as $c): ?><li><?= $c ?></li><?php endforeach; ?>
            </ul>
            <p class="grow__tag">WE LOVE WHERE WE WORK… AND YOU CAN TOO!</p>
            <a href="contact.php" id="contact" class="btn btn--primary">Contact us</a>
        </div>
        <div class="about-split__media">
            <img src="img/about-team.svg" alt="The OOVA Ads team collaborating">
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
