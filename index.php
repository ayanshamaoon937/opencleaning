<?php

$page = "home";
$title = "Open Cleaning | Residential & commercial cleaning in Perth";
require __DIR__ . "/includes/header.php";

// Page sections, in display order.
?>
<!-- Hero -->
<section class="hero">
    <div class="container hero-grid">
        <div class="hero-copy">
            <span class="eyebrow hero-enter">
                <span class="little-star">✳</span>
                OPEN CLEANING · PERTH
            </span>
            <h1 class="hero-enter">
                Reliable cleaning.
                <br />
                Detailed results.
                <br />
                <span>Professional service.</span>
            </h1>
            <p class="hero-enter">
                Residential and commercial cleaning you can trust.
                <br class="desktop" />
                Open Cleaning looks after the details, so your home or workplace
                <br class="desktop" />
                is clean, fresh and ready for what’s next.
            </p>
            <div class="hero-actions hero-enter">
                <a class="btn" href="contact.php#quote">
                    Get a free quote <?= icon("arrow") ?>
                </a>
                <a class="text-link outline-button" href="#services">
                    Explore services
                    <span>↗</span>
                </a>
            </div>
            <div class="hero-note hero-enter">
                <span class="round-icon"><?= icon("home") ?></span>
                <div>
                    <strong>Cleaning you can trust.</strong>
                    <span>For homes, businesses and spaces across Perth.</span>
                </div>
            </div>
        </div>
        <div class="hero-media hero-enter">
            <img
                class="hero-photo"
                src="assets/images/open-cleaning-hero.png"
                width="1800"
                height="1200"
                fetchpriority="high"
                alt="Professional cleaner preparing a bright Perth home kitchen and living area"
            />
            <span class="image-label"><?= icon("spark") ?> CLEAN. FRESH. READY.</span>
            <div class="fresh-badge">
                <span>OPEN CLEANING</span>
                <b>✳</b>
                <span>PERTH WA</span>
            </div>
            <div class="photo-card">
                <span class="round-icon"><?= icon("check") ?></span>
                <div>
                    <strong>Reliable, detailed, professional.</strong>
                    <span>Cleaning tailored to your space.</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Benefits -->
<div class="benefit-bar"><div class="container"><span><?= icon(
    "pin",
) ?> Perth-based</span><span><?= icon(
     "spark",
 ) ?> A detail-focused clean</span><span><?= icon(
     "clock",
 ) ?> Residential & commercial</span><span><?= icon(
     "home",
 ) ?> Reliable service</span></div></div>
<!-- Services -->
<section id="services">
    <div class="container">
        <div class="section-heading reveal">
            <div>
                <span class="eyebrow">OUR CLEANING SERVICES</span>
                <h2>
                    Every space deserves
                    <br />
                    a professional clean.
                </h2>
            </div>
            <p>
                Residential home-cleaning rates from the client’s current service guide.
                <br />
                Contact us for commercial cleaning or a tailored quote.
            </p>
        </div>
        <div class="service-grid">
            <?php
            $cards = [
                [
                    "Bathroom cleaning — $80",
                    "Professional bathroom cleaning, with a focus on the details that make the room feel fresh.",
                    "open-cleaning-bathroom.png",
                    "home",
                    "HOME CLEANING RATE",
                ],
                [
                    "Kitchen cleaning — $70",
                    "A reliable kitchen clean to help keep one of your home’s busiest spaces clean and ready to use.",
                    "open-cleaning-commercial.png",
                    "office",
                    "HOME CLEANING RATE",
                ],
                [
                    "Living room / bedroom — $60",
                    "Detailed cleaning for a living room or one bedroom. Additional rooms are available from $50 each.",
                    "open-cleaning-hero.png",
                    "spark",
                    "HOME CLEANING RATE",
                ],
            ];
            foreach (
                $cards
                as $c
            ): ?>
            <a class="service-card reveal" href="contact.php?service=<?= urlencode($c[0]) ?>#quote">
                <div class="service-image">
                    <img
                        loading="lazy"
                        src="assets/images/<?= $c[2] ?>"
                        width="600"
                        height="400"
                        alt="<?= e($c[0]) ?> interior inspiration"
                    />
                    <span class="service-icon"><?= icon($c[3]) ?></span>
                </div>
                <div class="service-content">
                    <span class="eyebrow"><?= $c[4] ?></span>
                    <h3><?= $c[0] ?></h3>
                    <p><?= $c[1] ?></p>
                    <span class="service-link">Request a quote <?= icon("arrow") ?></span>
                </div>
            </a>
            <?php endforeach;
            ?>
        </div>
        <div class="move-banner reveal">
            <span class="round-icon"><?= icon("home") ?></span>
            <div>
                <strong>Need commercial, deep or end-of-lease cleaning?</strong>
                <span>Message Open Cleaning with the details of your space for a tailored quote.</span>
            </div>
            <a class="text-link" href="contact.php?service=End-of-lease+cleaning#quote">
                Ask about end-of-lease cleaning <?= icon("arrow") ?>
            </a>
        </div>
    </div>
</section>
<!-- Why Us -->
<section class="why-section">
    <div class="container split">
        <div class="why-media reveal">
            <img
                loading="lazy"
                src="assets/images/open-cleaning-bathroom.png"
                width="900"
                height="1100"
                alt="Professional bathroom cleaning with close attention to detail"
            />
            <div class="image-caption">
                The little details.
                <br />
                <em>That lovely difference.</em>
            </div>
        </div>
        <div class="why-copy reveal">
            <span class="eyebrow">RELIABLE. DETAILED. PROFESSIONAL.</span>
            <h2>
                Cleaning service
                <br />
                you can rely on.
            </h2>
            <p>
                We bring a dependable, detail-focused approach to every home and commercial space
                we clean in Perth.
            </p>
            <?php foreach (
                [
                    [
                        "home",
                        "A service for your space",
                        "Tell us what you need, and we’ll discuss a cleaning service that suits your home or business.",
                    ],
                    [
                        "clock",
                        "Clear communication",
                        "We keep the process straightforward, from your first message through to your tailored quote.",
                    ],
                    [
                        "spark",
                        "Attention to detail",
                        "We take pride in a thorough finish and professional care for every space.",
                    ],
                ]
                as $v
            ): ?>
            <div class="value">
                <span class="round-icon"><?= icon($v[0]) ?></span>
                <div>
                    <h3><?= $v[1] ?></h3>
                    <p><?= $v[2] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
            <a class="text-link" href="about.php">About Open Cleaning <?= icon("arrow") ?></a>
        </div>
    </div>
</section>
<!-- How It Works -->
<section>
    <div class="container">
        <div class="center reveal">
            <span class="eyebrow">LESS TO DO. MORE TO LOOK FORWARD TO.</span>
            <h2>A fresher space, in three easy steps.</h2>
        </div>
        <div class="steps">
            <?php foreach (
                [
                    [
                        "Tell us about your space",
                        "Choose your service and share a few details. We’ll put together a personalised quote.",
                    ],
                    [
                        "Let’s find your perfect time",
                        "We’ll get in touch to confirm the details, your priorities and a time that suits.",
                    ],
                    [
                        "Come home to a good feeling",
                        "We take care of the cleaning. You get on with your day — and enjoy the fresh start.",
                    ],
                ]
                as $i => $step
            ): ?>
            <div class="step reveal">
                <span class="step-number">0<?= $i + 1 ?></span>
                <h3><?= $step[0] ?></h3>
                <p><?= $step[1] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Service Areas -->
<section class="area-section">
    <div class="container area-grid">
        <div class="reveal">
            <span class="eyebrow">SERVING PERTH</span>
            <h2>
                Perth cleaning
                <br />
                for your space.
            </h2>
            <p>
                Open Cleaning serves residential and commercial clients across Perth. Get in touch
                to discuss your suburb and cleaning requirements.
            </p>
            <a class="text-link" href="contact.php">Contact Open Cleaning <?= icon("arrow") ?></a>
        </div>
        <div class="suburbs reveal">
            <?php foreach (
                [
                    "Perth CBD",
                    "Subiaco",
                    "Fremantle",
                    "Scarborough",
                    "Joondalup",
                    "Cottesloe",
                    "Victoria Park",
                    "South Perth",
                    "Mount Lawley",
                ]
                as $s
            ): ?>
            <span><?= icon("pin") ?> <?= e($s) ?></span>
            <?php endforeach; ?>
            <p>And other Perth locations—contact us to check availability.</p>
        </div>
    </div>
</section>
<!-- Faq -->
<section>
    <div class="container faq-grid">
        <div class="reveal">
            <span class="eyebrow">FREQUENTLY ASKED QUESTIONS</span>
            <h2>
                Questions about
                <br />
                your clean?
            </h2>
            <p>Get in touch with the Open Cleaning team.</p>
            <a class="text-link" href="contact.php">We’re here to help <?= icon("arrow") ?></a>
        </div>
        <div class="faq-list reveal">
            <?php foreach (
                [
                    [
                        "What cleaning services do you provide?",
                        "Open Cleaning provides residential, commercial, deep and end-of-lease cleaning. Tell us about your space and we’ll discuss the right service for you.",
                    ],
                    [
                        "Do you clean both homes and businesses?",
                        "Yes. We offer reliable, detailed cleaning for residential and commercial spaces in Perth.",
                    ],
                    [
                        "Can I arrange a one-off deep clean?",
                        "Absolutely. Choose deep cleaning in the quote form and describe what your space needs, and we’ll get back to you.",
                    ],
                    [
                        "How much will my clean cost?",
                        "Every space is different. Your quote depends on the size, condition, service and frequency. Send us a few details for a personalised, no-obligation quote.",
                    ],
                ]
                as $q
            ): ?>
            <details>
                <summary>
                    <?= $q[0] ?>
                    <span>+</span>
                </summary>
                <p><?= $q[1] ?></p>
            </details>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require __DIR__ . "/includes/footer.php";
