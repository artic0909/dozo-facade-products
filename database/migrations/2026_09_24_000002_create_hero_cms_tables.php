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
        Schema::create('hero_slides', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('order')->default(1);
            $table->string('name'); // Design, Engineer, Fabricate, Install, Support
            $table->string('eyebrow')->nullable();
            $table->text('headline');
            $table->text('desc');
            $table->string('cta_text')->default('Explore Our Solutions');
            $table->string('cta_link')->default('#solutions');
            $table->string('image')->default('/images/hero_building.jpg');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        Schema::create('hero_stats', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('order')->default(1);
            $table->string('number'); // 25+, 500+, Premium, Pan India
            $table->string('label'); // Years of Experience, Projects Delivered, etc.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero_slides');
        Schema::dropIfExists('hero_stats');
    }
};
