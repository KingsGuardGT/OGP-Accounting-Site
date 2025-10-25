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

## First deploy: set APP_KEY and clear caches
If you see "No application encryption key has been specified.", it means the server is missing a valid APP_KEY or is using a cached config without it.

Recommended minimal .env (adjust values):

```
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-domain.tld
APP_KEY=base64:...   # set by key:generate or copy from a secure source

LOG_CHANNEL=stack

SESSION_DRIVER=file
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
```

With SSH (preferred):

1) Create/update `.env` at the application root (same folder as `artisan`).
2) Generate/set key and refresh caches:
   - `php artisan config:clear`
   - `php artisan key:generate --ansi`
   - `php artisan config:cache`
   - `php artisan optimize`

Without SSH (File Manager only):

1) Upload/create `.env` at the application root and set a valid `APP_KEY` (either copy from a secure source or generate locally and paste).
2) Clear cached config by deleting the file `bootstrap/cache/config.php` (Laravel will rebuild it automatically on next request). You can also delete other cache files in `bootstrap/cache/`.

Permissions required:
- `storage/` and `bootstrap/cache/` must be writable by the web server (typically 775 for directories and 664 for files; 755/644 if 775/664 is not allowed).

## Common issues
- 500 error on `/`: ensure `public/` is the webroot or rewrite to it.
- Composer failing with `ext-fileinfo`: enable the `fileinfo` PHP extension.
- 404 on `/index.html`: Laravel uses `public/index.php`; use `/` with proper rewrites.