<?php
/* =====================================================================
   OOVA Ads — Homepage
   Design & section order modelled on propellerads.com
   Theme colors sampled from img/oova.png  (green #2E6E5E / dark #1B1B1B)

   The page is assembled section-by-section from /sections.
===================================================================== */

$pageTitle = 'OOVA Ads — Multisource Performance Advertising Platform';

require __DIR__ . '/includes/header.php';

/* Each section is a self-contained partial, in the same order as PropellerAds */
$sections = [
    '1-hero',          // Hero + AI launch card
    '2-partners',      // Partner logo marquee
    //'awards',          // Awards / recognition carousel
    'flow-diagram',    // Animated supply → platform → conversions diagram
    // '3-reach',         // Reach 2B users
    '4-verticals',     // Industry verticals
    '5-partnerships',  // Global partnerships (dark)
    '6-ai-steps',      // OVA AI 3-step launch
    '7-channels',      // 6 ad formats (tabs)
    '8-testimonials',  // Trusted by 50,000+
    '10-why',          // Why we are leading
    '11-cta',          // Final call to action
];

foreach ($sections as $s) {
    require __DIR__ . "/sections/{$s}.php";
}

require __DIR__ . '/includes/footer.php';
