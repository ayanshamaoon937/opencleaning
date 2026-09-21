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
