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
