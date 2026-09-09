<?php
/* SECTION — Awards / recognition carousel (PropellerAds auto-scrolling badges strip) */
$awards = [
    ['🏆', 'Top Traffic Source', '2026'],
    ['🥇', 'Top Ad Network', '2026'],
    ['⭐', 'Top User Acquisition Agency', '2026'],
    ['🎖️', 'iGaming Awards Winner', '2025'],
    ['🚀', 'Best Self-Serve Platform', '2025'],
    ['💎', 'Performance Marketing Award', '2024'],
    ['📊', 'Best Programmatic DSP', '2024'],
];
?>
<section class="section awards" id="awards">
    <div class="container">
        <div class="section-head section-head--center">
            <span class="eyebrow">Recognition</span>
            <h2>Award-winning performance platform</h2>
        </div>

        <div class="awards__carousel" id="awardsCarousel">
            <button class="awards__nav awards__nav--prev" aria-label="Previous">‹</button>
            <div class="awards__viewport">
                <ul class="awards__track">
                    <?php foreach ($awards as [$emblem, $title, $year]): ?>
                        <li class="award">
                            <div class="award__badge">
                                <span class="award__emblem"><?= $emblem ?></span>
                                <span class="award__year"><?= $year ?></span>
                            </div>
                            <div class="award__title"><?= $title ?></div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <button class="awards__nav awards__nav--next" aria-label="Next">›</button>
        </div>
        <div class="awards__dots" id="awardsDots" aria-hidden="true"></div>
    </div>
</section>
