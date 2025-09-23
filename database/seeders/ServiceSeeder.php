<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'title' => [
                    'az' => 'Dizayn və Layihələndirmə',
                    'en' => 'Design and Planning',
                    'ru' => 'Дизайн и планирование',
                ],
                'slug' => 'dizayn-layihelendirme',
                'short_desc' => [
                    'az' => 'Peşəkar dizayn və 3D vizualizasiya xidmətləri',
                    'en' => 'Professional design and 3D visualization services',
                    'ru' => 'Профессиональные услуги дизайна и 3D визуализации',
                ],
                'description' => [
                    'az' => 'Məkanınızı arzularınıza uyğun şəkildə dizayn edirik. 3D modelləşdirmə və vizualizasiya ilə layihənizi əvvəlcədən görə bilərsiniz.',
                    'en' => 'We design your space according to your dreams. With 3D modeling and visualization, you can see your project in advance.',
                    'ru' => 'Мы проектируем ваше пространство согласно вашим мечтам. С 3D моделированием и визуализацией вы можете увидеть свой проект заранее.',
                ],
                'price_decimal' => 50,
                'is_featured' => true,
                'order' => 1,
            ],
            [
                'title' => [
                    'az' => 'Elektrik İşləri',
                    'en' => 'Electrical Work',
                    'ru' => 'Электрические работы',
                ],
                'slug' => 'elektrik-isleri',
                'short_desc' => [
                    'az' => 'Təhlükəsiz və keyfiyyətli elektrik quraşdırılması',
                    'en' => 'Safe and quality electrical installation',
                    'ru' => 'Безопасная и качественная электрическая установка',
                ],
                'description' => [
                    'az' => 'Bütün elektrik işlərini təhlükəsizlik standartlarına uyğun şəkildə həyata keçiririk. LED işıqlandırma, smart ev sistemləri və s.',
                    'en' => 'We carry out all electrical work in accordance with safety standards. LED lighting, smart home systems, etc.',
                    'ru' => 'Мы выполняем все электрические работы в соответствии со стандартами безопасности. LED освещение, системы умный дом и т.д.',
                ],
                'price_decimal' => 25,
                'order' => 2,
            ],
            [
                'title' => [
                    'az' => 'Santexnika Xidmətləri',
                    'en' => 'Plumbing Services',
                    'ru' => 'Сантехнические услуги',
                ],
                'slug' => 'santexnika-xidmetleri',
                'short_desc' => [
                    'az' => 'Su və kanalizasiya sistemlərinin quraşdırılması',
                    'en' => 'Installation of water and sewage systems',
                    'ru' => 'Установка водопроводных и канализационных систем',
                ],
                'description' => [
                    'az' => 'Hamam, mətbəx və digər sahələrdə santexnika işlərini peşəkar şəkildə həyata keçiririk.',
                    'en' => 'We professionally carry out plumbing work in bathrooms, kitchens and other areas.',
                    'ru' => 'Мы профессионально выполняем сантехнические работы в ванных комнатах, кухнях и других помещениях.',
                ],
                'price_decimal' => 30,
                'order' => 3,
            ],
            [
                'title' => [
                    'az' => 'Boya və Dekorasiya',
                    'en' => 'Painting and Decoration',
                    'ru' => 'Покраска и декорация',
                ],
                'slug' => 'boya-dekorasiya',
                'short_desc' => [
                    'az' => 'Peşəkar boya və dekorativ işlər',
                    'en' => 'Professional painting and decorative work',
                    'ru' => 'Профессиональная покраска и декоративные работы',
                ],
                'description' => [
                    'az' => 'Yüksək keyfiyyətli boyalar və dekorativ materiallarla məkanınızı gözəlləşdiririk.',
                    'en' => 'We beautify your space with high quality paints and decorative materials.',
                    'ru' => 'Мы украшаем ваше пространство высококачественными красками и декоративными материалами.',
                ],
                'price_decimal' => 20,
                'is_featured' => true,
                'order' => 4,
            ],
            [
                'title' => [
                    'az' => 'Döşəmə İşləri',
                    'en' => 'Flooring Work',
                    'ru' => 'Напольные работы',
                ],
                'slug' => 'doseme-isleri',
                'short_desc' => [
                    'az' => 'Parket, laminat və digər döşəmə növləri',
                    'en' => 'Parquet, laminate and other flooring types',
                    'ru' => 'Паркет, ламинат и другие виды напольных покрытий',
                ],
                'description' => [
                    'az' => 'Müxtəlif döşəmə materiallarının peşəkar quraşdırılması və təmiri.',
                    'en' => 'Professional installation and repair of various flooring materials.',
                    'ru' => 'Профессиональная установка и ремонт различных напольных материалов.',
                ],
                'price_decimal' => 35,
                'order' => 5,
            ],
            [
                'title' => [
                    'az' => 'Mətbəx Dizaynı',
                    'en' => 'Kitchen Design',
                    'ru' => 'Дизайн кухни',
                ],
                'slug' => 'metbex-dizayni',
                'short_desc' => [
                    'az' => 'Modern və funksional mətbəx həlləri',
                    'en' => 'Modern and functional kitchen solutions',
                    'ru' => 'Современные и функциональные кухонные решения',
                ],
                'description' => [
                    'az' => 'Mətbəxinizi ən son texnologiyalar və dizayn trendləri ilə təchiz edirik.',
                    'en' => 'We equip your kitchen with the latest technologies and design trends.',
                    'ru' => 'Мы оснащаем вашу кухню новейшими технологиями и дизайнерскими трендами.',
                ],
                'price_decimal' => 80,
                'is_featured' => true,
                'order' => 6,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}