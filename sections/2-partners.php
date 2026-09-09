<?php
/* SECTION 2 — Partners marquee  (PropellerAds ha-section-02) */
$partners = ['Plarium', 'Coinis', 'AdEx', 'Nexus', 'TrafficStars', 'Kayzen', 'Verve', 'PubMatic', 'Adsterra', 'Zeropark'];
?>
<section class="partners">
    <div class="container">
        <p class="partners__label">Trusted by leading brands, agencies & networks</p>
    </div>
    <div class="marquee">
        <div class="marquee__track">
            <?php for ($i = 0; $i < 2; $i++): foreach ($partners as $p): ?>
                <span class="marquee__item"><?= $p ?></span>
            <?php endforeach; endfor; ?>
        </div>
    </div>
</section>
