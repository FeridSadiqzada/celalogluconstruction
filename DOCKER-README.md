# 🐳 Docker Deployment Guide

Bu layihə Docker ilə VPS-də deploy edilmək üçün tam hazırlanıb.

## 🚀 Sürətli Deploy

### 1. Serverə qoşulun və layihəni klonlayın

```bash
git clone https://github.com/FeridSadiqzada/celalogluconstruction.git
cd celalogluconstruction
```

### 2. Docker deployment işə salın

```bash
chmod +x docker-deploy.sh
./docker-deploy.sh
```

Bu script avtomatik olaraq:
- ✅ Docker konteynerləri qurur
- ✅ Verilənlər bazasını yaradır
- ✅ Laravel-i konfiqurasiya edir
- ✅ Admin istifadəçisi yaradır
- ✅ Bütün cache-ləri qurur

### 3. SSL sertifikat quraşdırın

```bash
# Production SSL (Let's Encrypt)
chmod +x setup-ssl.sh
./setup-ssl.sh yourdomain.com

# Və ya development üçün self-signed
./setup-ssl.sh yourdomain.com --self-signed
```

## 📋 Manual Setup

### Tələblər
- Docker 20.10+
- Docker Compose 2.0+
- Git

### Addımlar

1. **Environment faylını konfiqurasiya edin:**
```bash
cp .env.docker .env
nano .env  # Domain və parolları yeniləyin
```

2. **Konteynerləri işə salın:**
```bash
docker-compose up -d
```

3. **Laravel setup:**
```bash
docker-compose exec app php artisan key:generate
docker-compose exec app php artisan migrate --seed
docker-compose exec app php artisan storage:link
docker-compose exec app php artisan filament:user
```

## 🔧 İdarəetmə Komandaları

```bash
# Konteyner statusu
docker-compose ps

# Logları izləyin
docker-compose logs -f

# Konteynerə daxil olun
docker-compose exec app sh

# Konteynerləri yenidən başladın
docker-compose restart

# Konteynerləri dayandırın
docker-compose down

# Konteynerləri və volume-ları silin
docker-compose down -v
```

## 📊 Monitoring

```bash
# Server statusunu yoxlayın
./monitor.sh

# Laravel logları
docker-compose logs app

# Nginx logları
docker-compose exec app tail -f /var/log/nginx/access.log
```

## 🔒 Təhlükəsizlik

### SSL Sertifikat Yeniləmə
```bash
# Manual yeniləmə
certbot renew

# Avtomatik yeniləmə (crontab)
0 12 * * * /usr/bin/certbot renew --quiet --deploy-hook 'docker-compose restart app'
```

### Backup
```bash
# Database backup
docker-compose exec db mysqldump -u celaloglu_user -p celaloglu_insaat > backup.sql

# Avtomatik backup (backup service işləyir)
# Backup faylları ./backups/ qovluğunda saxlanır
```

## 🌐 Domen Konfiqurasiyası

1. **DNS A record əlavə edin:**
   - `yourdomain.com` → Server IP
   - `www.yourdomain.com` → Server IP

2. **Environment faylında domain yeniləyin:**
```env
APP_URL=https://yourdomain.com
```

3. **SSL sertifikat alın:**
```bash
./setup-ssl.sh yourdomain.com
```

## 📈 Performance Optimizasiyası

### OPcache aktiv
- PHP OPcache production-da aktiv
- Kod dəyişikliklərindən sonra cache təmizləyin

### Redis Cache
- Session və cache üçün Redis istifadə olunur
- Queue işləri Redis ilə idarə olunur

### Nginx Optimizasiyası
- Gzip compression aktiv
- Static fayllar 1 il cache olunur
- Security headers əlavə edilib

## 🐛 Troubleshooting

### Ümumi Problemlər

**Konteyner başlamır:**
```bash
docker-compose logs app
```

**Database bağlantı xətası:**
```bash
docker-compose exec app php artisan migrate:status
```

**Permission xətaları:**
```bash
docker-compose exec app chown -R www-data:www-data storage bootstrap/cache
```

**SSL xətaları:**
```bash
# Sertifikat yoxlayın
openssl x509 -in docker/ssl/fullchain.pem -text -noout
```

### Log Faylları
- Laravel: `docker-compose logs app`
- Nginx: `docker-compose exec app tail -f /var/log/nginx/error.log`
- MySQL: `docker-compose logs db`
- Redis: `docker-compose logs redis`

## 🔄 Update Prosesi

```bash
# Kodu yeniləyin
git pull origin main

# Konteynerləri yenidən qur
docker-compose build --no-cache
docker-compose up -d

# Laravel cache təmizləyin
docker-compose exec app php artisan config:clear
docker-compose exec app php artisan config:cache
```

## 📞 Dəstək

Problemlər olduqda:
1. Logları yoxlayın
2. Container statusunu yoxlayın
3. GitHub Issues-də sual yaradın

---

**🎉 Uğurlu deployment!** Saytınız indi https://yourdomain.com ünvanında əlçatandır.