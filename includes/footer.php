</main>
        <?php if (($page ?? "") !== "contact"): ?>
        <?php require __DIR__ . "/sections/shared/call-to-action.php"; ?>
        <?php endif; ?>
        <footer>
            <div class="container footer-grid">
                <div>
                    <a class="brand brand-logo" href="index.php">
                        <img src="assets/open-cleaning-logo.png" width="182" height="89" alt="Open Cleaning Services" />
                    </a>
                    <p>
                        Residential & commercial cleaning.
                        <br />
                        Reliable, detailed and professional service
                        <br />
                        across Perth.
                    </p>
                </div>
                <div>
                    <h3>Explore</h3>
                    <a href="index.php">Home</a>
                    <a href="about.php">About Open Cleaning</a>
                    <a href="contact.php">Get in touch</a>
                    <a href="privacy.php">Privacy policy</a>
                </div>
                <div>
                    <h3>Our services</h3>
                    <?php foreach (
                        $services
                        as $service
                    ): ?>
                    <a href="contact.php?service=<?= urlencode($service) ?>#quote">
                        <?= e($service) ?>
                    </a>
                    <?php endforeach; ?>
                </div>
                <div>
                    <h3>Say hello</h3>
                    <a href="mailto:<?= e($config["email"]) ?>"><?= e($config["email"]) ?></a>
                    <?php if (
                        $config["phone"]
                    ): ?>
                    <a href="tel:<?= e(preg_replace("/[^+0-9]/", "", $config["phone"])) ?>"><?= e($config["phone"]) ?></a>
                    <?php endif; ?>
                    <p>
                        Perth, Western Australia
                        <br />
                        Residential & commercial cleaning
                    </p>
                </div>
            </div>
            <div class="container footer-bottom">
                <span>© <?= date("Y") ?> Open Cleaning. All rights reserved.</span>
                <span class="footer-credit">
                    Design &amp; developed by
                    <a href="http://ayanshamaoon.com/" target="_blank" rel="noopener noreferrer">Ayan Shamaoon</a>
                    <a class="footer-social fiverr" href="https://www.fiverr.com/s/Q27yPw2" target="_blank" rel="noopener noreferrer" aria-label="Ayan Shamaoon on Fiverr">
                        <span aria-hidden="true">fiverr<span>.</span></span>
                    </a>
                    <a class="footer-social linkedin" href="https://www.linkedin.com/in/ayan-shamaoon" target="_blank" rel="noopener noreferrer" aria-label="Ayan Shamaoon on LinkedIn">
                        <span aria-hidden="true">in</span>
                    </a>
                </span>
            </div>
        </footer>
        <script src="assets/vendor/gsap.min.js"></script>
        <script src="assets/vendor/ScrollTrigger.min.js"></script>
        <script src="<?= e(asset("js/main.js")) ?>"></script>
    </body>
</html>
