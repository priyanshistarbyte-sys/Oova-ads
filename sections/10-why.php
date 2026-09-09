<?php
/* SECTION 10 — Why we're leading  (PropellerAds ha-section-10) */
$why = [
    ['🛡️', 'Fraud Protection', 'Enterprise-grade safety with multi-layer filtration. We eliminate 98% of non-human activity pre-bid so you acquire verified users only.', 'See anti-fraud standards'],
    ['🌐', 'Global Inventory', 'Access 2B+ users across 195 countries from social, web, messenger and programmatic sources in one account.', 'Explore inventory'],
    ['🎯', 'Targeting Precision', 'Reach exactly who matters with granular GEO, device, OS, interest and behavioral targeting.', 'See targeting options'],
    ['📊', 'Real-Time Data', 'Track every metric live and optimize on the fly with transparent, real-time reporting.', 'View analytics'],
    ['🤖', 'AI-Bidding', 'Let OVA AI optimize bids toward your KPIs using 15 years of bidding intelligence.', 'Meet OVA AI'],
    ['💬', 'Expert Support', 'Dedicated account managers and 24/7 support to help you scale profitably.', 'Talk to us'],
];
?>
<section class="section" id="why">
    <div class="container">
        <div class="section-head section-head--center">
            <span class="eyebrow">Why OOVA</span>
            <h2>Here's why we are the leading platform</h2>
        </div>
        <div class="why__grid">
            <?php foreach ($why as [$icon, $title, $desc, $cta]): ?>
                <div class="why-card">
                    <div class="why-card__icon"><?= $icon ?></div>
                    <h3><?= $title ?></h3>
                    <p><?= $desc ?></p>
                    <a href="#"><?= $cta ?> →</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
