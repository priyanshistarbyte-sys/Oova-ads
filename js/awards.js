/* Awards carousel — responsive, auto-advancing with dots + arrows */
(function () {
    var root = document.getElementById('awardsCarousel');
    if (!root) return;
    var track = root.querySelector('.awards__track');
    var items = Array.prototype.slice.call(track.children);
    var prev  = root.querySelector('.awards__nav--prev');
    var next  = root.querySelector('.awards__nav--next');
    var dotsWrap = document.getElementById('awardsDots');

    var index = 0;
    var timer = null;

    function perView() {
        var w = window.innerWidth;
        if (w <= 420) return 1;
        if (w <= 620) return 2;
        if (w <= 900) return 3;
        return 4;
    }

    function maxIndex() { return Math.max(0, items.length - perView()); }

    function render() {
        var pv = perView();
        var step = 100 / pv;                 // % width of one item slot
        if (index > maxIndex()) index = maxIndex();
        track.style.transform = 'translateX(-' + (index * step) + '%)';
        buildDots();
    }

    function buildDots() {
        var pages = maxIndex() + 1;
        dotsWrap.innerHTML = '';
        for (var i = 0; i < pages; i++) {
            var d = document.createElement('button');
            d.className = 'awards__dot' + (i === index ? ' active' : '');
            d.setAttribute('aria-label', 'Go to slide ' + (i + 1));
            (function (i) { d.addEventListener('click', function () { index = i; render(); restart(); }); })(i);
            dotsWrap.appendChild(d);
        }
    }

    function go(dir) {
        var max = maxIndex();
        index += dir;
        if (index > max) index = 0;
        if (index < 0) index = max;
        render();
    }

    function restart() { if (timer) clearInterval(timer); timer = setInterval(function () { go(1); }, 3000); }

    if (next) next.addEventListener('click', function () { go(1); restart(); });
    if (prev) prev.addEventListener('click', function () { go(-1); restart(); });

    var rt;
    window.addEventListener('resize', function () { clearTimeout(rt); rt = setTimeout(render, 150); });

    root.addEventListener('mouseenter', function () { if (timer) clearInterval(timer); });
    root.addEventListener('mouseleave', restart);

    render();
    restart();
})();
