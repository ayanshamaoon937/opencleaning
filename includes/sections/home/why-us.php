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
