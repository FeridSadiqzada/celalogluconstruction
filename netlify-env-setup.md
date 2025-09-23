# Netlify Environment Variables

Netlify dashboard-da bu environment variable-ları təyin edin:

## Required Variables:
- `APP_NAME` = "Cəlaloğlu İnşaat MMC"
- `APP_ENV` = "production"
- `APP_KEY` = (Laravel key generate edin)
- `APP_DEBUG` = "false"
- `APP_URL` = "https://your-site.netlify.app"
- `APP_LOCALE` = "az"
- `APP_FALLBACK_LOCALE` = "en"

## Database (SQLite üçün):
- `DB_CONNECTION` = "sqlite"
- `DB_DATABASE` = "/tmp/database.sqlite"

## Session:
- `SESSION_DRIVER` = "file"
- `CACHE_STORE` = "file"

## Build Commands:
- Build command: `composer install --no-dev && npm run build`
- Publish directory: `public`