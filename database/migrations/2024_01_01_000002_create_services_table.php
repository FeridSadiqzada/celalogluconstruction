<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->json('title');
            $table->string('slug')->unique();
            $table->json('short_desc')->nullable();
            $table->json('description')->nullable();
            $table->decimal('price_decimal', 10, 2)->nullable();
            $table->boolean('is_featured')->default(false);
            $table->integer('order')->default(0);
            $table->timestamps();

            $table->index(['is_featured', 'order']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};