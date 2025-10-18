# Deployment notes

## Required server settings
- PHP 8.1 with extensions: fileinfo, mbstring, openssl, pdo, tokenizer, xml, ctype
- Document root should point to `public/`
- If you cannot change document root:
  - Apache: `.htaccess` at repo root rewrites to `/public`
  - IIS: `web.config` at repo root rewrites to `/public`

## Build steps (production)
1. Composer
   - ENV: `COMPOSER_MEMORY_LIMIT=-1`
   - Run: `composer install --no-dev --optimize-autoloader`
2. Laravel
   - Ensure `.env` present with correct `APP_KEY`, `APP_URL`, DB creds
   - `php artisan key:generate` (first deploy)
   - `php artisan migrate --force` (if using DB)
   - `php artisan optimize`
3. Assets (if using Vite)
   - `npm ci && npm run build`

## Common issues
- 500 error on `/`: ensure `public/` is the webroot or rewrite to it.
- Composer failing with `ext-fileinfo`: enable the `fileinfo` PHP extension.
- 404 on `/index.html`: Laravel uses `public/index.php`; use `/` with proper rewrites.