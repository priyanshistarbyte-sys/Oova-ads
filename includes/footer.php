<?php
/* Footer — modelled on propellerads.com footer columns */
$footCols = [
    'Platform' => ['Traffic quality', 'Traffic volume', 'Advertising automation', 'Campaign management', 'Brand protection'],
    'Solutions' => ['For affiliates', 'For agencies', 'For media buyers', 'For direct advertisers'],
    'Ad Formats' => ['Push ads', 'In-Page Push ads', 'Popunder ads', 'Interactive ads', 'Social Traffic ads'],
    'Company' => ['About us','Help center', 'Contact us'],
];
?>
<footer class="footer">
    <div class="container">
        <div class="footer__top">
            <div class="footer__brand">
                <img src="<?= $base ?? '' ?>img/oova-light.png" alt="OOVA Ads">
                <p>Multisource online advertising platform for performance marketing. Reach 2B+ users across every channel — from one account.</p>
                <address class="footer__contact">
                    <!-- <span><strong>OOVA LLC</strong></span> -->
                    <span>Paramus, NJ 07652, USA</span>
                    <a href="tel:+18898892334">+1 (889) 889-2334</a>
                </address>
                <div class="footer__social" style="margin-top:20px;">
                    <a href="#" aria-label="X">𝕏</a>
                    <a href="#" aria-label="LinkedIn">in</a>
                    <a href="#" aria-label="Facebook">f</a>
                    <a href="#" aria-label="Telegram">✈</a>
                </div>
            </div>
            <?php foreach ($footCols as $head => $links): ?>
                <div class="footer__col">
                    <h4><?= $head ?></h4>
                    <?php foreach ($links as $l): ?><a href="<?= $l === 'Contact us' ? 'contact.php' : '#' ?>"><?= $l ?></a><?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="footer__strip">
            <div class="footer__strip-group">
                <h4>We accept</h4>
                <div class="footer__pays">
                    <span class="pay-pill">Wire Transfer</span>
                    <span class="pay-pill">USDT</span>
                    <span class="pay-pill">PayPal</span>
                </div>
            </div>
            <div class="footer__strip-group">
                <h4>Compliance &amp; Anti-Fraud</h4>
                <div class="footer__compliance">
                    <span><i class="footer__compliance-icon" aria-hidden="true">◇</i>Fraud filters</span>
                    <span><i class="footer__compliance-icon" aria-hidden="true">◎</i>Bot protection</span>
                    <span><i class="footer__compliance-icon" aria-hidden="true">✓</i>Clean traffic guarantee</span>
                </div>
            </div>
        </div>

        <div class="footer__bottom">
            <span>© <?= date('Y') ?> OOVA LLC. All rights reserved.</span>
            <div style="display:flex; gap:22px;">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms</a>
                <a href="#">Cookies</a>
                <a href="#">Opt-Out</a>
            </div>
        </div>
    </div>
</footer>

<script src="js/main.js"></script>
<script src="js/chat.js"></script>
<script src="js/awards.js"></script>
<script src="js/verticals.js"></script>
</body>
</html>
