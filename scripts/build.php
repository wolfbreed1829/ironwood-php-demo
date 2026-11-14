<?php
declare(strict_types=1);

// Render the same PHP entry point used by a normal PHP web server.
error_reporting(E_ALL);
set_error_handler(static function (int $severity, string $message, string $file, int $line): never {
    throw new ErrorException($message, 0, $severity, $file, $line);
});

$root = dirname(__DIR__);
$output = $root . '/_site';
if (!is_dir($output)) {
    mkdir($output, 0755, true);
}

ob_start();
require $root . '/public/index.php';
$page = ob_get_clean();
if (!is_string($page) || !str_contains($page, '</html>')) {
    throw new RuntimeException('PHP did not render a complete page.');
}
file_put_contents($output . '/index.html', $page);

$assets = $root . '/public/assets';
$files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($assets, FilesystemIterator::SKIP_DOTS));
foreach ($files as $file) {
    if (!$file->isFile()) {
        continue;
    }
    $relative = substr($file->getPathname(), strlen($assets) + 1);
    $target = $output . '/assets/' . $relative;
    if (!is_dir(dirname($target))) {
        mkdir(dirname($target), 0755, true);
    }
    copy($file->getPathname(), $target);
}

file_put_contents($output . '/.nojekyll', '');
echo 'Rendered PHP ' . PHP_VERSION . ' to _site/index.html' . PHP_EOL;
