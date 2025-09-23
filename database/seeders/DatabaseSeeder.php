<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            SettingSeeder::class,
            PackageSeeder::class,
            ServiceSeeder::class,
            ProjectSeeder::class,
            PartnerSeeder::class,
            PostSeeder::class,
            MenuSeeder::class,
            PageSeeder::class,
        ]);
    }
}