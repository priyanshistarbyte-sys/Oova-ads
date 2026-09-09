<?php
/* SECTION 8 — Testimonials  (PropellerAds ha-section-08) */
$testimonials = [
    ['We\'re working on all ad formats, and I absolutely adore my account manager and her team. Professional, accurate, nice, and smart. A pleasure to work with.', 'Plarium', 'Game development company', 'P'],
    ['We\'ve been working together for 9 wonderful years! The platform is amazing — 24/7 support, an intuitive UI, and countless metrics that drive performance through the roof. Highly recommend for higher ROI!', 'Katarina', 'Senior Account Manager at Coinis', 'K'],
    ['OOVA Ads has a responsive team and strong optimization capabilities. A reliable traffic platform for long-term performance marketing. We tested multiple campaigns and scaling performs great.', 'Marcus', 'Head of Growth, Nexus Media', 'M'],
];
?>
<section class="section" id="reviews">
    <div class="container">
        <div class="section-head section-head--center">
            <span class="eyebrow">Testimonials</span>
            <h2>Trusted by 50,000+ brands, agencies, affiliates &amp; performance partners</h2>
        </div>
        <div class="testi__grid">
            <?php foreach ($testimonials as [$quote, $name, $role, $initial]): ?>
                <div class="testi">
                    <div class="testi__stars">★★★★★</div>
                    <p>“<?= $quote ?>”</p>
                    <div class="testi__who">
                        <div class="testi__ava"><?= $initial ?></div>
                        <div><b><?= $name ?></b><span><?= $role ?></span></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
