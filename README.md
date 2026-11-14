# Ironwood Construction — PHP

A clean, standalone PHP website. No framework, WordPress, database, or Composer installation required.

- [Live preview](https://wolfbreed1829.github.io/ironwood-php-demo/)
- [Download the PHP website](https://wolfbreed1829.github.io/ironwood-php-demo/ironwood-php.zip)

GitHub Pages serves a static preview rendered by the actual PHP application during deployment. The source and ZIP run as PHP on a PHP-capable host.

## Run locally

Requires PHP 8.1 or newer; deployment checks run on PHP 8.4.

```sh
php -S 127.0.0.1:8080 -t public
```

Open `http://127.0.0.1:8080`. For production, upload `public/` and `src/` together and set the web server’s document root to `public/`.

## Edit

- Content and the inquiry URL: `src/config.php`
- Homepage: `public/index.php`
- Header and footer: `src/templates/`
- Appearance and mobile navigation: `public/assets/site.css` and `site.js`

All inquiry links use `https://sabertechlogistics.com/contact/?plan=business#project-brief`.

Push to `main` to validate PHP syntax, render the page with PHP, package the download, and deploy the preview. Run `php scripts/build.php` and `python scripts/package.py` to build these outputs locally.

Ironwood is a demonstration brand. Architecture photos illustrate service categories; no completed project records, testimonials, or performance claims are included.
