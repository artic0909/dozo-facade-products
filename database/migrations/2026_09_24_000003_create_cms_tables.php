<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Products Table
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category')->default('DOZO Windows');
            $table->string('theme')->default('light'); // 'light' or 'dark'
            $table->string('image')->nullable();
            $table->text('short_desc')->nullable();
            $table->string('material_grade')->default('Architectural T6 Aluminum');
            $table->string('finish_options')->default('PVDF Coating / Anodized');
            $table->string('acoustic_rating')->default('Up to 42 dB Isolation');
            $table->string('wind_load')->default('Engineered to 3.5 kPa');
            $table->boolean('is_featured')->default(true);
            $table->integer('order')->default(0);
            $table->timestamps();
        });

        // Projects Table
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('location');
            $table->string('type')->nullable();
            $table->string('scope')->nullable();
            $table->string('client')->nullable();
            $table->string('image')->nullable();
            $table->string('status')->default('Completed');
            $table->string('progress')->default('100%');
            $table->text('description')->nullable();
            $table->boolean('is_featured')->default(true);
            $table->integer('order')->default(0);
            $table->timestamps();
        });

        // Solutions Cards Table
        Schema::create('solutions', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique(); // 'windows', 'facade', 'products'
            $table->string('title');
            $table->string('eyebrow')->default('DOZO');
            $table->text('desc')->nullable();
            $table->string('cta_text')->default('Explore');
            $table->string('cta_link')->default('#featured-products');
            $table->json('images')->nullable();
            $table->json('badges')->nullable();
            $table->integer('order')->default(0);
            $table->timestamps();
        });

        // Site Settings Table (Key-Value)
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->text('value')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_settings');
        Schema::dropIfExists('solutions');
        Schema::dropIfExists('projects');
        Schema::dropIfExists('products');
    }
};
