<?php
/* Header / navigation — modelled on propellerads.com top bar */

/* $base lets pages in the project root (index.php, about.php) share this header. */
$base = $base ?? '';
$nav = [
    'Platform'  => ['Multisource platform' => '#', 'AI campaign launch' => '#', 'Anti-fraud shield' => '#', 'Real-time analytics' => '#'],
    'Formats'   => ['Push Ads' => '#', 'In-Page Push' => '#', 'Popunder' => '#', 'Interactive Ads' => '#', 'Social Traffic' => '#', 'DSP / oRTB' => '#'],
    'Solutions' => [],  // rendered as a grouped mega-menu (see below)
    'Company'   => ['About us' => $base . 'about.php', 'Careers' => $base . 'about.php#careers', 'Contact' => $base . 'contact.php'],
];

/* Solutions menu — two simple grouped lists */
$megaCustomers = [
    ['For affiliates', $base . 'affiliates.php'],
    ['For agencies', $base . 'agencies.php'],
    ['For media buyers', $base . 'media-buyers.php'],
    ['For direct advertisers', $base . 'direct-advertisers.php'],
];
$megaIndustries = [
    ['Mobile utilities', $base . 'mobile-utilities.php'],
    ['Software', $base . 'software.php'],
    ['E-commerce', $base . 'index.php#solutions'],
    ['Mobile apps', $base . 'index.php#solutions'],
    ['Lead generation', $base . 'index.php#solutions'],
    ['Finance', $base . 'index.php#solutions'],
    ['iGaming', $base . 'index.php#solutions'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?? 'OOVA Ads — Multisource Performance Advertising Platform' ?></title>
    <meta name="description" content="OOVA Ads is a multisource online advertising platform for performance marketing. Reach 2B+ users across social, web, messenger and programmatic inventory.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="img/favicon.svg" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="header">
    <div class="container header__inner">
        <a href="<?= $base ?>index.php" class="logo"><img src="<?= $base ?>img/oova.png" alt="OOVA Ads"></a>

        <nav class="nav" id="mainNav">
            <?php foreach ($nav as $label => $items): ?>
                <?php if ($label === 'Solutions'): ?>
                    <div class="nav__item nav__item--mega">
                        <a href="#" class="nav__link"><?= $label ?> <span class="caret">▼</span></a>
                        <div class="nav__dropdown nav__mega nav__mega--simple">
                            <div class="mega__cols">
                                <div class="mega__section">
                                    <h4 class="mega__title">Customers</h4>
                                    <div class="mega__grid">
                                        <?php foreach ($megaCustomers as [$t, $href]): ?>
                                            <a class="mega__simple-link" href="<?= $href ?>"><?= $t ?></a>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <div class="mega__section">
                                    <h4 class="mega__title">Industries</h4>
                                    <div class="mega__grid">
                                        <?php foreach ($megaIndustries as [$t, $href]): ?>
                                            <a class="mega__simple-link" href="<?= $href ?>"><?= $t ?></a>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="nav__item">
                        <a href="#" class="nav__link"><?= $label ?> <span class="caret">▼</span></a>
                        <div class="nav__dropdown">
                            <?php foreach ($items as $it => $href): ?>
                                <a href="<?= $href ?>"><?= $it ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>

            <!-- shown only inside the mobile menu -->
            <div class="nav__mobile-actions">
                <a href="#" class="btn btn--ghost">Log in</a>
                <a href="https://panel.oovaads.com/login" class="btn btn--primary">Start now</a>
            </div>
        </nav>

        <div class="header__actions">
            <span class="lang">EN ▾</span>
            <a href="#" class="header__login">Log in</a>
            <a href="https://panel.oovaads.com/login" class="btn btn--primary">Start now</a>
            <button class="burger" id="burger" aria-label="Menu"><span></span><span></span><span></span></button>
        </div>
    </div>
</header>
