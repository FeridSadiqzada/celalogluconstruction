<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->json('title');
            $table->string('slug')->unique();
            $table->enum('category', ['apartment', 'office', 'luxury', 'other'])->default('other');
            $table->json('short_desc')->nullable();
            $table->json('description')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->integer('order')->default(0);
            $table->timestamps();

            $table->index(['category', 'is_featured', 'order']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};