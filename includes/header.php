<?php require_once __DIR__ . "/bootstrap.php"; ?>
<!doctype html>
<html lang="en-AU">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="theme-color" content="#0077b8" />
        <title><?= e($title ?? "Open Cleaning | Residential & commercial cleaning in Perth") ?></title>
        <meta
            name="description"
            content="Open Cleaning provides reliable, detailed and professional residential and commercial cleaning in Perth."
        />
        <link rel="icon" href="<?= e(asset("assets/favicon.png")) ?>" type="image/png" sizes="64x64" />
        <link rel="apple-touch-icon" href="<?= e(asset("assets/apple-touch-icon.png")) ?>" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Open Cleaning" />
        <meta property="og:title" content="Open Cleaning | Residential &amp; commercial cleaning in Perth" />
        <meta property="og:description" content="Reliable, detailed and professional residential and commercial cleaning in Perth." />
        <meta property="og:image" content="assets/open-cleaning-logo.png" />
        <meta property="og:image:alt" content="Open Cleaning Services logo" />
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="Open Cleaning | Perth" />
        <meta name="twitter:description" content="Reliable, detailed and professional cleaning you can trust." />
        <meta name="twitter:image" content="assets/open-cleaning-logo.png" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&family=Nunito:wght@500;600;700;800&display=swap"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="<?= e(asset("css/style.css")) ?>" />
    </head>
    <body>
        <a class="skip" href="#main">Skip to content</a>
        <div class="topbar">
            <span><?= icon("pin") ?> Perth, Western Australia</span>
            <a href="tel:+61473783004">+61 473 783 004</a>
        </div>
        <header class="header">
            <div class="container nav-wrap">
                <a class="brand brand-logo" href="index.php" aria-label="Open Cleaning home">
                    <img src="assets/open-cleaning-logo.png" width="182" height="89" alt="Open Cleaning Services" />
                </a>
                <button
                    class="menu-toggle"
                    aria-controls="navigation"
                    aria-expanded="false"
                    aria-label="Open navigation"
                >
                    ☰
                </button>
                <nav id="navigation" aria-label="Main navigation">
                    <a <?= ($page ?? "") === "home" ? 'aria-current="page"' : "" ?> href="index.php">Home</a>
                    <a href="index.php#services">Services</a>
                    <a <?= ($page ?? "") === "about" ? 'aria-current="page"' : "" ?> href="about.php">About</a>
                    <a <?= ($page ?? "") === "contact" ? 'aria-current="page"' : "" ?> href="contact.php">Contact</a>
                </nav>
                <a class="btn small nav-quote" href="contact.php#quote">
                    Get a quote <?= icon("arrow") ?>
                </a>
            </div>
        </header>
        <main id="main">
