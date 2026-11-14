<footer class="site-footer">
    <div class="container footer-main">
        <?php require __DIR__ . '/brand.php'; ?>
        <nav aria-label="Footer navigation">
            <a href="./#services">Services</a>
            <a href="./#process">Our process</a>
            <a href="<?= escape($config['project_url']) ?>">Contact <span aria-hidden="true">↗</span></a>
        </nav>
    </div>
    <div class="container footer-bottom">
        <p>© <?= escape($config['copyright_year']) ?> <?= escape($config['name']) ?></p>
        <a href="<?= escape($config['project_url']) ?>">Website by <strong>Saber Tech</strong></a>
    </div>
</footer>
</body>
</html>
