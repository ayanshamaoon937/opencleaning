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
