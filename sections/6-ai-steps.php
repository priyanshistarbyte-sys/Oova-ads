<?php
/* SECTION 6 — AI-powered launch  (PropellerAds "AI-powered launch with NIKO")
   Two columns: numbered steps on the left, OVA AI "Campaign Setup" summary card on the right. */
$steps = [
    ['01', 'Tell OVA your goal', "Describe what you're after — FTDs, reach, installs, leads. OVA takes it from there."],
    ['02', 'Get your bidding right', 'Share your target market, and OVA does the rest — recommending the right bid strategy from real performance data and 15 years of bidding intelligence.'],
    ['03', 'Run faster tests', 'Launch, adjust, review — all in one chat. OVA speaks your language, converts your currency, and prepares your new campaign in minutes.'],
];
$summary = [
    ['Campaign Name', 'My campaign'],
    ['Campaign ID', '18573046'],
    ['Pricing Model', 'CPA Goal'],
    ['Target CPA', '$2.032'],
    ['Target Country', 'Canada 🇨🇦'],
    ['Status', 'Draft'],
];
?>
<section class="section ailaunch" id="ai">
    <div class="container ailaunch__grid">
        <!-- LEFT: heading + steps -->
        <div class="ailaunch__left">
            <span class="eyebrow">OVA AI</span>
            <h2>AI-powered launch with OVA</h2>
            <p class="ailaunch__intro">Skip the lengthy campaign setup and start testing new ideas in minutes. Focus on finding converting funnels and scaling your business while OVA handles the manual work.</p>

            <div class="ailaunch__steps">
                <?php foreach ($steps as [$num, $title, $desc]): ?>
                    <div class="astep">
                        <div class="astep__num"><?= $num ?></div>
                        <div class="astep__body">
                            <h3><?= $title ?></h3>
                            <p><?= $desc ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- RIGHT: campaign setup card -->
        <div class="ailaunch__right">
            <div class="setup">
                <div class="setup__title">✨ OVA AI — Campaign Setup</div>
                <p class="setup__intro">Your campaign has been created! 🎉 Here's a summary:</p>

                <table class="setup__table">
                    <thead>
                        <tr><th>Field</th><th>Value</th></tr>
                    </thead>
                    <tbody>
                        <?php foreach ($summary as [$field, $value]): ?>
                            <tr><td><?= $field ?></td><td><?= $value ?></td></tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <p class="setup__edit">🔗 <b>Edit in dashboard:</b> <a href="#">partners.oova-ads.com/campaigns/edit/18573046</a></p>

                <p class="setup__note-head">⚠️ Before you launch, please note:</p>
                <ol class="setup__notes">
                    <li><b>The campaign is in Draft</b> — you'll need to enable it manually in the OOVA Ads dashboard.</li>
                    <li><b>No budget limits are set</b> (daily or total) — the campaign could spend freely once live. Would you like me to set a <b>daily</b> or <b>total budget limit</b> right now?</li>
                </ol>

                <div class="setup__bubble setup__bubble--user">yes set it for testing</div>

                <p class="setup__ai">What daily and/or total budget would you like to set for testing? For example, a common starting point is <b>$50–$100/day</b>. What works for you?</p>

                <div class="setup__bubble setup__bubble--user">100</div>

                <p class="setup__done">Done! ✅ The daily budget has been set to <b>$100/day</b> for testing.</p>
            </div>
        </div>
    </div>
</section>
