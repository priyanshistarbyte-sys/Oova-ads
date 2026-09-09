<?php
/* SECTION 4 — Verticals  (accordion layout — one industry open at a time) */
$verticals = [
    ['🛒', 'eCommerce',       'Boost sales and expand reach beyond saturated channels.', ['Strong performance in LATAM, SEA, MENA, Eastern Europe', 'Multi-source testing to find the right marketing mix per GEO', 'Expanded reach beyond saturated channels']],
    ['📲', 'Mobile Apps',     'Drive quality installs and re-engagement at scale.', ['App installs & re-engagement across Android & iOS', 'CPI optimization with SKAN and MMP-ready S2S', 'Scale across top mobile-first markets: SEA, LATAM, MENA']],
    ['🎰', 'iGaming',         'Reach engaged players and grow deposits worldwide.', ['High-LTV users from any region of the world', 'Event-based AI optimization in real time', 'Brand awareness at scale — premium inventory']],
    ['🔧', 'Utilities',       'Promote software and mobile utilities profitably.', ['15 years of expertise in VPN, antivirus & cleaner funnels', 'Massive Pop traffic volumes with the lowest CPM for testing', 'AI-generated ad creatives for fast scale']],
    ['📈', 'Lead Generation', 'Capture qualified leads across every channel.', ['High-quality leads for finance, insurance, real estate, B2B', 'Push subscribers — opt-in audiences with purchase intent', 'Precision GEO targeting for country-specific advertising']],
    ['💳', 'Finance',         'Scale finance offers with high-intent users.', ['Premium finance inventory with strict brand safety', 'High-intent users across web, social & messenger', 'Higher conversion rates with real-time AI bidding']],
];
?>
<section class="section section--tint" id="solutions">
    <div class="container">
        <div class="section-head section-head--center">
            <span class="eyebrow">Verticals</span>
            <h2><span class="tx-green">Engaged audience</span> for industry-focused campaigns</h2>
            <p class="lead">We provide reach, deposits, installs, sales, and leads to boost multi-touch online advertising.</p>
        </div>

        <div class="vacc">
            <?php foreach ($verticals as $i => [$icon, $title, $desc, $points]): ?>
                <details class="vitem" name="verticals"<?= $i === 0 ? ' open' : '' ?>>
                    <summary class="vsum">
                        <span class="vsum__icon"><?= $icon ?></span>
                        <span class="vsum__text">
                            <span class="vsum__name"><?= $title ?></span>
                            <span class="vsum__desc"><?= $desc ?></span>
                        </span>
                        <span class="vsum__plus" aria-hidden="true"></span>
                    </summary>
                    <div class="vbody">
                        <ul class="vbody__list">
                            <?php foreach ($points as $pt): ?><li><?= $pt ?></li><?php endforeach; ?>
                        </ul>
                        <a href="https://panel.oovaads.com/login" class="vbody__cta">Start with <?= $title ?> →</a>
                    </div>
                </details>
            <?php endforeach; ?>
        </div>
    </div>
</section>
