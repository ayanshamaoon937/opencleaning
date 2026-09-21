<!-- Quote Form -->
<section id="quote">
    <div class="container contact-grid">
        <aside class="reveal">
            <span class="eyebrow">OPEN CLEANING · PERTH</span>
            <h2>
                Residential or commercial,
                <br />
                we’re ready to help.
            </h2>
            <p>
                Call, email or send the form with a few details about your space. We’ll discuss the
                right cleaning service, current pricing and availability with you.
            </p>
            <div class="value">
                <span class="round-icon"><?= icon("mail") ?></span>
                <div>
                    <h3>Email Open Cleaning</h3>
                    <a href="mailto:<?= e($config["email"]) ?>"><?= e($config["email"]) ?></a>
                </div>
            </div>
            <div class="value">
                <span class="round-icon"><?= icon("pin") ?></span>
                <div>
                    <h3>Perth service area</h3>
                    <p>Homes, offices and commercial spaces</p>
                </div>
            </div>
            <div class="value">
                <span class="round-icon"><?= icon("clock") ?></span>
                <div>
                    <h3>Call or message</h3>
                    <a href="tel:+61473783004">+61 473 783 004</a>
                </div>
            </div>
            <div class="contact-rates">
                <span class="eyebrow">HOME CLEANING GUIDE</span>
                <p>Current advertised rates from Open Cleaning:</p>
                <ul>
                    <li><span>Bathroom cleaning</span><strong>$80</strong></li>
                    <li><span>Kitchen cleaning</span><strong>$70</strong></li>
                    <li><span>Living room / one bedroom</span><strong>$60</strong></li>
                    <li><span>Additional room</span><strong>$50</strong></li>
                </ul>
                <small>For commercial, deep and end-of-lease cleaning, contact us for a tailored quote.</small>
            </div>
            <div class="contact-service-note">
                <span class="round-icon"><?= icon("spark") ?></span>
                <p><strong>What we clean</strong><br />Bathrooms, kitchens, living rooms, bedrooms, homes, offices and commercial spaces.</p>
            </div>
        </aside>
        <div class="form-card">
            <span class="eyebrow">REQUEST A CLEANING QUOTE</span>
            <h2>Tell us about your space</h2>
            <p>Fields marked * are required. We’ll reply using the details you provide.</p>
            <?php if (
                $flash
            ): ?>
            <div class="notice <?= e($flash["type"]) ?>" role="<?= $flash["type"] === "success" ? "status" : "alert" ?>">
                <?= e($flash["message"]) ?>
            </div>
            <?php endif; ?>
            <form action="send-mail.php" method="post" id="quoteForm">
                <input type="hidden" name="csrf" value="<?= e($_SESSION["csrf"]) ?>" />
                <div class="honey" aria-hidden="true">
                    <label>
                        Leave this empty
                        <input name="website" tabindex="-1" autocomplete="off" />
                    </label>
                </div>
                <div class="form-row">
                    <label>
                        Your name *
                        <input
                            name="name"
                            required
                            maxlength="100"
                            autocomplete="name"
                            placeholder="Alex Smith"
                            value="<?= e($old["name"] ?? "") ?>"
                        />
                    </label>
                    <label>
                        Email address *
                        <input
                            type="email"
                            name="email"
                            required
                            maxlength="254"
                            autocomplete="email"
                            placeholder="alex@example.com"
                            value="<?= e($old["email"] ?? "") ?>"
                        />
                    </label>
                </div>
                <div class="form-row">
                    <label>
                        Phone number *
                        <input
                            type="tel"
                            name="phone"
                            required
                            maxlength="30"
                            autocomplete="tel"
                            placeholder="Your best contact number"
                            value="<?= e($old["phone"] ?? "") ?>"
                        />
                    </label>
                    <label>
                        Suburb / postcode *
                        <input
                            name="suburb"
                            required
                            maxlength="100"
                            autocomplete="address-level2"
                            placeholder="e.g. Subiaco, 6008"
                            value="<?= e($old["suburb"] ?? "") ?>"
                        />
                    </label>
                </div>
                <div class="form-row">
                    <label>
                        Cleaning service *
                        <select name="service" required>
                            <option value="">Select a service</option>
                            <?php foreach (
                                $services
                                as $s
                            ): ?>
                            <option <?= $selected === $s ? "selected" : "" ?>><?= e($s) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </label>
                    <label>
                        Cleaning frequency
                        <select name="frequency">
                            <?php foreach (
                                ["One-off", "Weekly", "Fortnightly", "Monthly", "Not sure yet"]
                                as $s
                            ): ?>
                            <option <?= ($old["frequency"] ?? "") === $s ? "selected" : "" ?>><?= $s ?></option>
                            <?php endforeach; ?>
                        </select>
                    </label>
                </div>
                <label>
                    Your cleaning requirements *
                    <textarea
                        name="message"
                        required
                        minlength="10"
                        maxlength="5000"
                        rows="4"
                        placeholder="Tell us if it is a home or commercial space, the rooms or areas to clean, and your preferred timing…"
                    >
<?= e($old["message"] ?? "") ?></textarea
                    >
                </label>
                <label class="consent">
                    <input
                        type="checkbox"
                        name="consent"
                        value="1"
                        required
                        <?= !empty($old["consent"] ) ? "checked" : "" ?>
                    />
                    <span>
                        I agree to be contacted about my enquiry and have read the
                        <a href="privacy.php">privacy policy</a>
                        . *
                    </span>
                </label>
                <button class="btn" type="submit">
                    Request my quote <?= icon("arrow") ?>
                </button>
                <p class="form-note">
                    <?= icon("shield") ?> Your details are only used to help with your enquiry.
                </p>
            </form>
        </div>
    </div>
</section>
