# 🚀 Ultra Simple SQLite Deployment

Bu ən sadə deployment versiyasıdır - heç bir external database və ya Redis lazım deyil!

## ⚡ Sürətli Deploy

```bash
# 1. Repository klonla
git clone https://github.com/FeridSadiqzada/celalogluconstruction.git
cd celalogluconstruction

# 2. SQLite deployment işə sal
chmod +x sqlite-deploy.sh
./sqlite-deploy.sh
```

**Bu qədər! 🎉**

## 🔧 Xüsusiyyətlər

- ✅ **SQLite database** - heç bir MySQL/PostgreSQL lazım deyil
- ✅ **File-based cache** - Redis lazım deyil
- ✅ **File-based sessions** - external storage lazım deyil
- ✅ **Sync queue** - background job runner lazım deyil
- ✅ **Single container** - yalnız bir Docker container
- ✅ **Self-contained** - bütün məlumatlar container daxilində

## 📋 İdarəetmə

```bash
# Container statusu
docker-compose -f docker-compose.sqlite.yml ps

# Admin istifadəçisi yarat
docker-compose -f docker-compose.sqlite.yml exec app php artisan filament:user

# Logları bax
docker-compose -f docker-compose.sqlite.yml logs -f

# Container-ə daxil ol
docker-compose -f docker-compose.sqlite.yml exec app sh

# Dayandır
docker-compose -f docker-compose.sqlite.yml down

# Yenidən başlat
docker-compose -f docker-compose.sqlite.yml restart
```

## 🌐 Access

- **Website**: http://localhost
- **Admin Panel**: http://localhost/admin

## 📁 Data Location

Bütün məlumatlar bu qovluqlarda saxlanır:
- `./database/database.sqlite` - SQLite database
- `./storage/` - Uploaded files, logs, cache

## 🔄 Update

```bash
# Kodu yenilə
git pull origin main

# Container-i yenidən qur
docker-compose -f docker-compose.sqlite.yml up -d --build

# Migration işə sal (lazım olsa)
docker-compose -f docker-compose.sqlite.yml exec app php artisan migrate
```

## 🎯 Production üçün

Production-da istifadə etmək üçün:

1. **Domain konfiqurasiya et**:
```bash
# .env faylında
APP_URL=https://yourdomain.com
```

2. **SSL əlavə et**:
```bash
# Port 443 əlavə et
ports:
  - "80:80"
  - "443:443"
```

3. **Backup qur**:
```bash
# SQLite faylını backup et
cp database/database.sqlite backup/database_$(date +%Y%m%d).sqlite
```

## 🚀 Niyə bu versiya?

- **Sadəlik**: Heç bir external dependency yoxdur
- **Sürət**: Bir komanda ilə işə düşür
- **Etibarlılık**: Az hissə = az problem
- **Portability**: Hər yerdə işləyir
- **Maintenance**: Minimum idarəetmə lazımdır

**Kiçik və orta saytlar üçün mükəmməldir!** 🎉