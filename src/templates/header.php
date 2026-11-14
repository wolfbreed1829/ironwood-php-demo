<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#20251f">
    <meta name="description" content="<?= escape($config['description']) ?>">
    <meta property="og:title" content="<?= escape($config['title']) ?>">
    <meta property="og:description" content="<?= escape($config['description']) ?>">
    <meta property="og:type" content="website">
    <title><?= escape($config['title']) ?></title>
    <link rel="icon" href="assets/favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="assets/fonts.css">
    <link rel="stylesheet" href="assets/site.css?v=<?= escape($config['asset_version']) ?>">
    <script src="assets/site.js?v=<?= escape($config['asset_version']) ?>" defer></script>
</head>
<body>
<a class="skip-link" href="#main">Skip to content</a>
<header class="site-header">
    <div class="container header-inner">
        <?php require __DIR__ . '/brand.php'; ?>
        <button class="menu-toggle" type="button" aria-label="Open navigation" aria-expanded="false" aria-controls="primary-nav"><span></span><span></span></button>
        <nav id="primary-nav" class="primary-nav" aria-label="Main navigation">
            <a href="./#services">Services</a>
            <a href="./#process">Our process</a>
            <a class="nav-cta" href="<?= escape($config['project_url']) ?>">START A PROJECT <span aria-hidden="true">↗</span></a>
        </nav>
    </div>
</header>
