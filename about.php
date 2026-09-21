<?php

$page = "about";
$title = "About Open Cleaning | Perth";
require __DIR__ . "/includes/header.php";

// Page sections, in display order.
?>
<!-- Hero -->
<section class="page-hero">
    <div class="container reveal">
        <span class="eyebrow">ABOUT OPEN CLEANING</span>
        <h1>
            Professional cleaning
            <br />
            for Perth homes
            <span>and businesses.</span>
        </h1>
        <p>
            Open Cleaning provides residential and commercial cleaning
            <br />
            with reliable, detailed and professional service.
        </p>
    </div>
</section>
<!-- Our Story -->
<section>
    <div class="container split">
        <div class="why-media reveal">
            <img
                src="assets/images/open-cleaning-commercial.png"
                width="900"
                height="1000"
                alt="Professional commercial office cleaning in Perth"
            />
        </div>
        <div class="reveal">
            <span class="eyebrow">PROUDLY SERVING PERTH</span>
            <h2>
                The right clean makes
                <br />
                a real difference.
            </h2>
            <p>
                Open Cleaning is a Perth cleaning service for residential and commercial spaces.
                We believe a clean environment makes life and work feel more manageable.
            </p>
            <p>
                Whether you need a regular clean, a deep clean, commercial cleaning or help at the
                end of a lease, we’ll take the time to understand your requirements.
            </p>
            <p>
                Our approach is simple: reliable service, close attention to detail and professional
                care for your space.
            </p>
            <a class="btn" href="contact.php">Talk to our team <?= icon("arrow") ?></a>
        </div>
    </div>
</section>
<!-- Values -->
<section class="area-section">
    <div class="container">
        <span class="eyebrow">OUR APPROACH</span>
        <h2>Service built on the details.</h2>
        <div class="steps">
            <?php foreach (
                [
                    [
                        "Reliable service",
                        "We aim to be a cleaning team you can depend on for your home or business.",
                    ],
                    [
                        "Professional standards",
                        "We treat every space with care and focus on delivering a clean, polished result.",
                    ],
                    [
                        "Detailed cleaning",
                        "From routine upkeep to deeper cleaning, we give the important details the attention they need.",
                    ],
                ]
                as $i => $v
            ): ?>
            <div class="step reveal">
                <span class="step-number">0<?= $i + 1 ?></span>
                <h3><?= $v[0] ?></h3>
                <p><?= $v[1] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require __DIR__ . "/includes/footer.php";
