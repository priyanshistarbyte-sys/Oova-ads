/* OVA AI — interactive hero chat (guided demo flow) */
(function () {
    var body = document.getElementById('chatBody');
    if (!body) return;
    var form  = document.getElementById('chatForm');
    var input = document.getElementById('chatInput');
    var step  = 0;

    function scrollDown() { body.scrollTop = body.scrollHeight; }

    function addUser(text) {
        var m = document.createElement('div');
        m.className = 'msg msg--user';
        var b = document.createElement('div');
        b.className = 'bubble bubble--user';
        b.textContent = text;
        m.appendChild(b);
        body.appendChild(m);
        scrollDown();
    }

    function addBot(opts) {
        var m = document.createElement('div');
        m.className = 'msg msg--bot';

        var ava = document.createElement('span');
        ava.className = 'msg__ava';

        var col = document.createElement('div');

        var bubble = document.createElement('div');
        bubble.className = 'bubble bubble--bot' + (opts.draft ? ' bubble--draft' : '');
        bubble.innerHTML = (opts.draft ? '<span class="check">✔</span>' : '') + opts.text;
        if (opts.sub) {
            var sub = document.createElement('span');
            sub.className = 'bubble__sub';
            sub.textContent = opts.sub;
            bubble.appendChild(sub);
        }
        if (opts.cta) {
            var cta = document.createElement('button');
            cta.type = 'button';
            cta.className = 'bubble__cta';
            cta.textContent = opts.cta + ' →';
            cta.addEventListener('click', function () {
                cta.disabled = true;
                cta.style.opacity = .6;
                botReply({ text: '🚀 Your campaign is launching! Track results in your dashboard.' });
            });
            bubble.appendChild(document.createElement('br'));
            bubble.appendChild(cta);
        }
        col.appendChild(bubble);

        if (opts.chips) {
            var wrap = document.createElement('div');
            wrap.className = 'chips';
            opts.chips.forEach(function (c) {
                var chip = document.createElement('button');
                chip.type = 'button';
                chip.className = 'chip';
                chip.textContent = c;
                chip.addEventListener('click', function () { handle(c); });
                wrap.appendChild(chip);
            });
            col.appendChild(wrap);
        }

        m.appendChild(ava);
        m.appendChild(col);
        body.appendChild(m);
        scrollDown();
    }

    function typing(cb, delay) {
        var t = document.createElement('div');
        t.className = 'msg msg--bot';
        t.innerHTML = '<span class="msg__ava"></span><div class="typing"><span></span><span></span><span></span></div>';
        body.appendChild(t);
        scrollDown();
        setTimeout(function () { t.remove(); cb(); }, delay || 1000);
    }

    /* render a bot turn behind a typing indicator */
    function botReply(opts, delay) { typing(function () { addBot(opts); }, delay); }

    function lockChips() {
        body.querySelectorAll('.chip').forEach(function (c) {
            c.disabled = true;
            c.style.opacity = .45;
            c.style.pointerEvents = 'none';
        });
    }

    function handle(text) {
        text = (text || '').trim();
        if (!text) return;
        lockChips();
        addUser(text);
        input.value = '';

        if (step === 0) {
            step = 1;
            botReply({ text: "Nice 👍 What's your weekly budget?", chips: ['$500 / week', '$2,000 / week', '$5,000 / week'] });
        } else if (step === 1) {
            step = 2;
            typing(function () {
                addBot({ text: 'Picked your audiences & targeting:', sub: '3 channels · 1 geo · 12 segments' });
                botReply({ text: 'Campaign draft ready — no manual setup.', draft: true, cta: 'Launch campaign' }, 1100);
            }, 1000);
        } else {
            botReply({ text: "On it! Tweak anything above, or hit Launch when you're ready." }, 900);
        }
    }

    form.addEventListener('submit', function (e) { e.preventDefault(); handle(input.value); });

    /* opening message */
    setTimeout(function () {
        addBot({ text: 'Hey 👋 What do you want to get?', chips: ['Installs', 'Leads', 'Sales', 'FTDs'] });
    }, 400);
})();
