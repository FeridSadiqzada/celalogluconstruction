# Cəlaloğlu İnşaat MMC - Website

Cəlaloğlu İnşaat MMC üçün Laravel 11 əsaslı peşəkar inşaat şirkəti veb saytı.

## Xüsusiyyətlər

- **Laravel 11** və **PHP 8.3** əsaslı
- **Filament v3** admin paneli
- **Çoxdilli dəstək** (Azərbaycan, İngilis, Rus)
- **Responsive dizayn** (Tailwind CSS)
- **SEO optimizasiyası**
- **Media idarəetməsi** (Spatie Media Library)
- **Əlaqə formu** və müraciət idarəetməsi
- **Blog sistemi**
- **Layihə portfeli**
- **Xidmət paketləri**
- **Tərəfdaş idarəetməsi**

## Quraşdırma

### 1. Layihəni klonlayın

```bash
git clone <repository-url>
cd celaloglu-insaat
```

### 2. Asılılıqları quraşdırın

```bash
composer install
npm install
```

### 3. Environment faylını konfiqurasiya edin

```bash
cp .env.example .env
php artisan key:generate
```

`.env` faylında verilənlər bazası və mail konfiqurasiyalarını yeniləyin:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=celaloglu_insaat
DB_USERNAME=root
DB_PASSWORD=

MAIL_MAILER=smtp
MAIL_HOST=your-smtp-host
MAIL_PORT=587
MAIL_USERNAME=your-email
MAIL_PASSWORD=your-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="info@celaloglu.az"
MAIL_FROM_NAME="Cəlaloğlu İnşaat MMC"
```

### 4. Verilənlər bazasını quraşdırın

```bash
php artisan migrate --seed
```

### 5. Storage linkini yaradın

```bash
php artisan storage:link
```

### 6. Assets-ləri build edin

```bash
npm run build
```

### 7. Admin istifadəçisi yaradın

```bash
php artisan filament:user
```

## Docker ilə İşə Salma

```bash
# Docker konteynerləri işə salın
docker-compose up -d

# Konteyner daxilində komandalar icra edin
docker-compose exec app php artisan migrate --seed
docker-compose exec app php artisan storage:link
docker-compose exec app php artisan filament:user
```

Sayt `http://localhost:8000` ünvanında əlçatan olacaq.

## Admin Panel

Admin panelinə `/admin` ünvanından daxil ola bilərsiniz.

### Admin Panel Xüsusiyyətləri:

- **Parametrlər**: Sayt parametrləri, əlaqə məlumatları, sosial linklər
- **Xidmətlər**: Xidmət növləri və qiymətləri
- **Paketlər**: Təmir paketləri (Standart, Komfort, VIP, Luxury)
- **Layihələr**: Portfolio layihələri (şəkil qalereya ilə)
- **Tərəfdaşlar**: Tərəfdaş şirkətlər və loqoları
- **Blog**: Məqalələr və xəbərlər
- **Səhifələr**: Statik səhifələr
- **Menyular**: Naviqasiya menyuları
- **Müraciətlər**: Müştəri müraciətləri
- **Banerlər**: Ana səhifə banerləri

## Səhifələr

### Açıq Səhifələr:
- `/` - Ana səhifə
- `/xidmetler` - Xidmətlər siyahısı
- `/xidmetler/{slug}` - Xidmət detalları
- `/layiheler` - Layihələr portfeli
- `/layiheler/{slug}` - Layihə detalları
- `/terefdaslar` - Tərəfdaşlar
- `/haqqimizda` - Haqqımızda
- `/elaqe` - Əlaqə səhifəsi
- `/blog` - Blog siyahısı
- `/blog/{slug}` - Blog məqaləsi

### Sistem Səhifələri:
- `/sitemap.xml` - Sayt xəritəsi
- `/feed` - RSS feed
- `/admin` - Admin panel

## Texniki Detallar

### İstifadə olunan paketlər:
- `filament/filament` - Admin panel
- `spatie/laravel-medialibrary` - Media idarəetməsi
- `spatie/laravel-translatable` - Çoxdilli dəstək
- `spatie/laravel-sitemap` - Sitemap generatoru
- `spatie/laravel-permission` - İcazə sistemi
- `laravel/sanctum` - API autentifikasiyası

### Frontend:
- **Tailwind CSS** - Stil framework
- **Alpine.js** - JavaScript framework
- **Inter Font** - Şrift
- **Responsive dizayn** - Mobil uyğunluq

### Rəng Palitrası:
- Primary Blue: `#2196F3`
- Dark Gray: `#4B5563`
- Light Gray BG: `#F7F7F9`
- Accent: `#00BCD4`

## Performans

- **Image optimization** - Avtomatik şəkil optimallaşdırması
- **Caching** - View, route və konfiqurasiya cache
- **Gzip compression** - Nginx tərəfindən
- **CDN hazır** - Static fayllar üçün

## Təhlükəsizlik

- **CSRF qorunması** - Bütün formlarda
- **Rate limiting** - Əlaqə formunda
- **Honeypot** - Spam qorunması
- **Input validation** - Bütün istifadəçi məlumatları
- **XSS qorunması** - Blade template engine

## SEO

- **Meta tags** - Hər səhifə üçün
- **OpenGraph** - Sosial media paylaşımı
- **Sitemap** - Avtomatik generasiya
- **RSS feed** - Blog üçün
- **Structured data** - Schema.org

## Dəstək

Texniki dəstək üçün əlaqə saxlayın:
- Email: info@celaloglu.az
- Telefon: +994 51 862 62 32

## Lisenziya

Bu layihə MIT lisenziyası altında paylanır.