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
