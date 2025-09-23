<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    public function run(): void
    {
        $packages = [
            [
                'name' => [
                    'az' => 'Standart',
                    'en' => 'Standard',
                    'ru' => 'Стандарт',
                ],
                'slug' => 'standart',
                'price_decimal' => 340,
                'features' => [
                    'az' => [
                        'Divar boyası',
                        'Döşəmə örtüyü',
                        'Elektrik işləri',
                        'Santexnika',
                    ],
                    'en' => [
                        'Wall painting',
                        'Floor covering',
                        'Electrical work',
                        'Plumbing',
                    ],
                    'ru' => [
                        'Покраска стен',
                        'Напольное покрытие',
                        'Электрические работы',
                        'Сантехника',
                    ],
                ],
                'order' => 1,
            ],
            [
                'name' => [
                    'az' => 'Komfort',
                    'en' => 'Comfort',
                    'ru' => 'Комфорт',
                ],
                'slug' => 'komfort',
                'price_decimal' => 395,
                'features' => [
                    'az' => [
                        'Standart paketdəki hər şey',
                        'Tavan işləri',
                        'Qapı və pəncərə',
                        'Dekorativ elementlər',
                        'Işıqlandırma',
                    ],
                    'en' => [
                        'Everything in Standard package',
                        'Ceiling work',
                        'Doors and windows',
                        'Decorative elements',
                        'Lighting',
                    ],
                    'ru' => [
                        'Все из пакета Стандарт',
                        'Потолочные работы',
                        'Двери и окна',
                        'Декоративные элементы',
                        'Освещение',
                    ],
                ],
                'is_featured' => true,
                'order' => 2,
            ],
            [
                'name' => [
                    'az' => 'VIP',
                    'en' => 'VIP',
                    'ru' => 'VIP',
                ],
                'slug' => 'vip',
                'price_decimal' => 450,
                'features' => [
                    'az' => [
                        'Komfort paketdəki hər şey',
                        'Premium materiallar',
                        'Mətbəx dizaynı',
                        'Hamam təmiri',
                        'Klima sistemi',
                        'Zəmanət 2 il',
                    ],
                    'en' => [
                        'Everything in Comfort package',
                        'Premium materials',
                        'Kitchen design',
                        'Bathroom renovation',
                        'Air conditioning system',
                        '2 year warranty',
                    ],
                    'ru' => [
                        'Все из пакета Комфорт',
                        'Премиум материалы',
                        'Дизайн кухни',
                        'Ремонт ванной',
                        'Система кондиционирования',
                        'Гарантия 2 года',
                    ],
                ],
                'order' => 3,
            ],
            [
                'name' => [
                    'az' => 'Luxury',
                    'en' => 'Luxury',
                    'ru' => 'Люкс',
                ],
                'slug' => 'luxury',
                'price_decimal' => 640,
                'features' => [
                    'az' => [
                        'VIP paketdəki hər şey',
                        'Ekskluziv dizayn',
                        'İtaliyan materialları',
                        'Ağıllı ev sistemi',
                        'Peşəkar dekorasiya',
                        'Zəmanət 3 il',
                    ],
                    'en' => [
                        'Everything in VIP package',
                        'Exclusive design',
                        'Italian materials',
                        'Smart home system',
                        'Professional decoration',
                        '3 year warranty',
                    ],
                    'ru' => [
                        'Все из пакета VIP',
                        'Эксклюзивный дизайн',
                        'Итальянские материалы',
                        'Система умный дом',
                        'Профессиональная декорация',
                        'Гарантия 3 года',
                    ],
                ],
                'order' => 4,
            ],
        ];

        foreach ($packages as $package) {
            Package::create($package);
        }
    }
}