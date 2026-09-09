/* OOVA Ads — interactions */
document.addEventListener('DOMContentLoaded', function () {

    /* Mobile nav toggle */
    var burger = document.getElementById('burger');
    var nav = document.getElementById('mainNav');
    if (burger && nav) {
        burger.addEventListener('click', function () {
            nav.classList.toggle('open');
            burger.classList.toggle('is-open');
        });
    }

    /* Mobile: tap a top-level nav link to expand/collapse its submenu */
    document.querySelectorAll('.nav__item > .nav__link').forEach(function (link) {
        link.addEventListener('click', function (e) {
            if (window.innerWidth > 960) return;              // desktop = hover, do nothing
            var item = link.parentElement;
            var dd = item.querySelector('.nav__dropdown');
            if (!dd) return;                                   // no submenu (e.g. Pricing) → let it navigate
            e.preventDefault();
            var wasOpen = item.classList.contains('open');
            item.parentElement.querySelectorAll('.nav__item.open').forEach(function (o) { o.classList.remove('open'); });
            if (!wasOpen) item.classList.add('open');
        });
    });

    /* Ad-format tabs (Section 7) */
    var tabs = document.querySelectorAll('.chan-tab');
    var panels = document.querySelectorAll('.chan-panel');
    tabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            var id = tab.getAttribute('data-tab');
            tabs.forEach(function (t) { t.classList.remove('active'); });
            panels.forEach(function (p) { p.classList.remove('active'); });
            tab.classList.add('active');
            var panel = document.querySelector('.chan-panel[data-panel="' + id + '"]');
            if (panel) panel.classList.add('active');
        });
    });

    /* AI input demo */
    var aiBtn = document.querySelector('.ai-input button');
    var aiInput = document.querySelector('.ai-input input');
    if (aiBtn && aiInput) {
        aiBtn.addEventListener('click', function () {
            if (aiInput.value.trim()) {
                aiBtn.textContent = '✓';
                setTimeout(function () { aiBtn.textContent = '→'; aiInput.value = ''; }, 1200);
            }
        });
    }

    /* Reveal on scroll */
    if ('IntersectionObserver' in window) {
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (e) {
                if (e.isIntersecting) { e.target.style.opacity = 1; e.target.style.transform = 'none'; io.unobserve(e.target); }
            });
        }, { threshold: 0.12 });
        document.querySelectorAll('.vcard, .step, .testi, .post, .why-card, .pcol').forEach(function (el) {
            el.style.opacity = 0;
            el.style.transform = 'translateY(24px)';
            el.style.transition = 'opacity .5s ease, transform .5s ease';
            io.observe(el);
        });
    }
});
