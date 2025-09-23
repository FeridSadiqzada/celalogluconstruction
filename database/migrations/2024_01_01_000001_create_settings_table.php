<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->json('site_name')->nullable();
            $table->json('phones')->nullable();
            $table->json('address')->nullable();
            $table->string('email')->nullable();
            $table->json('social_links')->nullable();
            $table->json('hero_headline')->nullable();
            $table->json('hero_subtitle')->nullable();
            $table->json('hero_cta_label')->nullable();
            $table->json('seo_meta')->nullable();
            $table->text('map_embed_url')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};