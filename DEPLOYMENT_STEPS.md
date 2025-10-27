# Production remediation and deploy steps

This file documents exact commands and two ways to fix the live 500 (Missing APP_KEY and stale compiled views).

1) Quick SSH method (preferred; you or server admin must have SSH access)

  - SSH to your host and cd to the project root (where `artisan` lives):

```bash
ssh user@your.host.example
cd /path/to/your/project
```

  - If you don't have an APP_KEY in `.env`, either generate one on the server or add one from a secret. To generate one on the server:

```bash
php artisan key:generate --force
```

  - Then clear caches so Laravel picks up changes and re-compiles views:

```bash
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear
```

  - Optional: warm up caches (fast, but only if everything is stable):

```bash
php artisan config:cache
php artisan route:cache
```

2) Hostinger panel (no SSH) — set APP_KEY manually and trigger a PHP restart

  - Use Hostinger File Manager or SFTP to edit `.env` in your site root. Add a line (use your own key):

```
APP_KEY=base64:QsVB3fdedbQzWsoomteZqA4XLyuk2caKoVlzRF/B/aY=
```

  - After saving `.env`, use the Hostinger control panel to restart PHP (or redeploy) so the process reloads the `.env` and clears compiled caches. If you can ask Hostinger support to run artisan cache/view clears that will ensure stale compiled views are removed.

3) Automated GitHub Actions post-deploy (recommended for repeatability)

  - There is a workflow added at `.github/workflows/ssh-post-deploy.yml` that runs on push to `main` and will SSH to your host and clear caches. It requires the following repository Secrets to be added:

    - `DEPLOY_HOST` — host or IP
    - `DEPLOY_USER` — SSH username
    - `DEPLOY_SSH_KEY` — private SSH key (PEM format)
    - `DEPLOY_PATH` — absolute path to project root on the remote host
    - `DEPLOY_PORT` — (optional) SSH port, default 22

  - Optional: if you prefer to set `APP_KEY` from GitHub Secrets, add `SECRET_APP_KEY` and uncomment the small block in the workflow that appends it to `.env` if missing. Note: storing APP_KEY in GitHub Secrets is acceptable and encrypted, but understand security implications (it will exist in Actions logs only if you echo it — avoid echoing secrets).

4) Validation

  - After applying any of the above, visit `https://yoursite.example/site/history` and confirm HTTP 200.
  - To inspect logs on the server, check `storage/logs/laravel.log` for new errors and verify MissingAppKeyException entries stop appearing.

If you want, I can:

- Draft an alternate workflow that POSTs to your Hostinger webhook and then runs the SSH step only when the webhook succeeds.
- Add an optional step that writes an APP_KEY to the `.env` from a secret (I can prepare it but will not enable it without your confirmation).
