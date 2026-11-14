<?php
declare(strict_types=1);

$config = require dirname(__DIR__) . '/src/config.php';
require_once dirname(__DIR__) . '/src/helpers.php';
require dirname(__DIR__) . '/src/templates/header.php';
?>
<main id="main">
    <section class="hero" id="intro">
        <div class="hero-copy">
            <p class="eyebrow"><span class="orange-line"></span> RESIDENTIAL &amp; COMMERCIAL</p>
            <h1>BUILT WITH<br><span class="accent-text">PURPOSE.</span></h1>
            <p class="hero-description"><?= escape($config['description']) ?></p>
            <div class="hero-actions">
                <a class="button" href="<?= escape($config['project_url']) ?>">START A PROJECT <span aria-hidden="true">↗</span></a>
                <a class="text-link" href="#services">Our services <span aria-hidden="true">↘</span></a>
            </div>
        </div>
        <div class="hero-visual">
            <figure class="hero-image"><img src="assets/hero.jpg" alt="Contemporary home with timber cladding and expansive windows" fetchpriority="high" decoding="async"></figure>
        </div>
    </section>

    <section class="services section-pad container" id="services">
        <div class="section-heading"><h2>OUR SERVICES.</h2></div>
        <div class="service-grid">
            <?php foreach ($config['services'] as $service): ?>
            <article class="service-card">
                <figure class="service-image"><img src="assets/<?= escape($service['image']) ?>" alt="<?= escape($service['alt']) ?>" loading="lazy" decoding="async"></figure>
                <h3><a href="<?= escape($config['project_url']) ?>"><?= escape($service['title']) ?> <span aria-hidden="true">↗</span></a></h3>
                <p><?= escape($service['description']) ?></p>
            </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="process section-pad" id="process">
        <div class="container">
            <div class="section-heading"><h2>A CLEAR PROCESS.</h2></div>
            <div class="process-grid">
                <?php foreach ($config['process'] as $index => $step): ?>
                <div class="process-step">
                    <p class="step-number"><?= escape(sprintf('%02d', $index + 1)) ?></p>
                    <h3><?= escape($step['title']) ?></h3>
                    <p><?= escape($step['description']) ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="contact-band" id="contact">
        <div class="container contact-inner">
            <h2>START YOUR<br>NEXT PROJECT.</h2>
            <div class="button-wrap"><a class="button button-light" href="<?= escape($config['project_url']) ?>">LET’S TALK <span aria-hidden="true">↗</span></a></div>
        </div>
    </section>
</main>
<?php require dirname(__DIR__) . '/src/templates/footer.php'; ?>
