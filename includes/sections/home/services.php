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
