<?php
$pageTitle = 'Contact OOVA Ads — Performance Marketing Support';
$base = '';
require __DIR__ . '/includes/header.php';
?>
<main class="contact-page">
    <section class="contact-hero">
        <div class="container">
            <h1>Contact us</h1>
            <p>Tell us what you are building. Our team will help you find the right way to grow with OOVA Ads.</p>
        </div>
    </section>

    <section class="contact-form-section">
        <div class="container">
            <form class="contact-form" action="#" method="post">
                <div class="contact-form__fields">
                    <label>
                        <span>Your name</span>
                        <input type="text" name="name" autocomplete="name" required>
                    </label>
                    <label>
                        <span>Email</span>
                        <input type="email" name="email" autocomplete="email" required>
                    </label>
                    <label>
                        <span>What is your goal with OOVA Ads?</span>
                        <select name="goal" required>
                            <option value="" selected disabled>Select a goal</option>
                            <option value="advertise">Advertise my business</option>
                            <option value="agency">Manage campaigns for clients</option>
                            <option value="monetize">Monetize my traffic</option>
                            <option value="support">Get account support</option>
                        </select>
                    </label>
                    <label>
                        <span>Subject</span>
                        <input type="text" name="subject" required>
                    </label>
                    <label class="contact-form__message">
                        <span>Your message</span>
                        <textarea name="message" rows="6" required></textarea>
                    </label>
                </div>
                <div class="contact-form__bottom">
                    <p>For account or payment support, include your account email and a short description of your request.</p>
                    <button type="submit" class="btn btn--primary">Send to us</button>
                </div>
            </form>
        </div>
    </section>

    <section class="contact-details">
        <div class="container">
            <div class="contact-cards">
                <article class="contact-card">
                    <span class="contact-card__icon" aria-hidden="true">?</span>
                    <h2>Support desk</h2>
                    <p>Need help with your account or campaign? Send us a message and our team will guide you.</p>
                    <a href="mailto:support@oova-ads.com">support@oova-ads.com</a>
                </article>
                <article class="contact-card">
                    <span class="contact-card__icon" aria-hidden="true">$</span>
                    <h2>Payment support</h2>
                    <p>Payment support is available for wire transfers, USDT, and PayPal.</p>
                    <span class="contact-card__label">Wire &middot; USDT &middot; PayPal</span>
                </article>
                <article class="contact-card contact-card--wide">
                    <span class="contact-card__icon" aria-hidden="true">+</span>
                    <div>
                        <h2>Compliance &amp; Anti-Fraud</h2>
                        <p>Fraud filters, bot protection, and clean traffic guarantees help keep every campaign trustworthy.</p>
                    </div>
                </article>
            </div>

            <div class="company-panel">
                <div class="company-panel__head">
                    <!-- <span class="company-panel__rings" aria-hidden="true">
                        <svg width="52" height="34" viewBox="0 0 52 34" fill="none">
                            <circle cx="17" cy="17" r="13" stroke="#7FD1B9" stroke-width="4"/>
                            <circle cx="30" cy="17" r="13" stroke="#fff" stroke-width="4"/>
                        </svg>
                    </span> -->
                    <!-- <span class="eyebrow">Company details</span> -->
                    <h2>OOVA LLC</h2>
                    <p>A registered US legal entity — here's where to reach us officially.</p>
                </div>
                <div class="company-panel__grid">
                    <div class="company-tile">
                        <span class="company-tile__icon" aria-hidden="true">▦</span>
                        <span class="company-tile__label">Legal company</span>
                        <span class="company-tile__value">OOVA LLC</span>
                    </div>
                    <div class="company-tile">
                        <span class="company-tile__icon" aria-hidden="true">⌖</span>
                        <span class="company-tile__label">Address</span>
                        <span class="company-tile__value">Paramus, NJ 07652, USA</span>
                    </div>
                    <div class="company-tile">
                        <span class="company-tile__icon" aria-hidden="true">☎</span>
                        <span class="company-tile__label">Phone</span>
                        <a class="company-tile__value" href="tel:+18898892334">+1 (889) 889-2334</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
