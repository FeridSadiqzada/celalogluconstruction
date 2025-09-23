<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        Setting::create([
            'site_name' => [
                'az' => 'Cəlaloğlu İnşaat MMC',
                'en' => 'Celaloglu Construction LLC',
                'ru' => 'Джелалоглу Строительство ООО',
            ],
            'phones' => [
                '+994 51 862 62 32',
                '+994 70 862 62 32',
            ],
            'address' => [
                'az' => '31 Khate Ave, Luxen Plaza, Bakı, Azərbaycan',
                'en' => '31 Khate Ave, Luxen Plaza, Baku, Azerbaijan',
                'ru' => '31 Khate Ave, Luxen Plaza, Баку, Азербайджан',
            ],
            'email' => 'info@celaloglu.az',
            'social_links' => [
                'facebook' => 'https://facebook.com/celaloglu',
                'instagram' => 'https://instagram.com/celaloglu',
                'whatsapp' => 'https://wa.me/994518626232',
            ],
            'hero_headline' => [
                'az' => 'Keyfiyyətli Təmir və İnşaat Xidmətləri',
                'en' => 'Quality Repair and Construction Services',
                'ru' => 'Качественные услуги ремонта и строительства',
            ],
            'hero_subtitle' => [
                'az' => 'Peşəkar komandamız ilə evinizi və ofisinizi arzularınıza uyğun şəkildə təmir edirik',
                'en' => 'We renovate your home and office according to your dreams with our professional team',
                'ru' => 'Мы ремонтируем ваш дом и офис согласно вашим мечтам с нашей профессиональной командой',
            ],
            'hero_cta_label' => [
                'az' => 'Təmir Paketlərinə Bax',
                'en' => 'View Renovation Packages',
                'ru' => 'Посмотреть пакеты ремонта',
            ],
            'seo_meta' => [
                'az' => [
                    'title' => 'Cəlaloğlu İnşaat MMC - Keyfiyyətli Təmir və İnşaat Xidmətləri',
                    'description' => 'Bakıda peşəkar təmir və inşaat xidmətləri. Mənzil, ofis və lüks layihələr üçün keyfiyyətli həllər.',
                ],
                'en' => [
                    'title' => 'Celaloglu Construction LLC - Quality Repair and Construction Services',
                    'description' => 'Professional repair and construction services in Baku. Quality solutions for apartments, offices and luxury projects.',
                ],
                'ru' => [
                    'title' => 'Джелалоглу Строительство ООО - Качественные услуги ремонта и строительства',
                    'description' => 'Профессиональные услуги ремонта и строительства в Баку. Качественные решения для квартир, офисов и люкс проектов.',
                ],
            ],
            'map_embed_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3039.4!2d49.8671!3d40.3777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDIyJzM5LjciTiA0OcKwNTInMDEuNiJF!5e0!3m2!1sen!2saz!4v1234567890',
        ]);
    }
}