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
        Schema::table('products', function (Blueprint $table) {
            $table->string('name')->nullable()->change();
            $table->string('slug')->nullable()->change();
            $table->string('type', 50)->nullable()->default('windows')->change();
            $table->string('category')->nullable()->default(null)->change();
            $table->string('theme')->nullable()->default('light')->change();
            $table->string('image')->nullable()->change();
            $table->text('short_desc')->nullable()->change();
            $table->string('material_grade')->nullable()->default(null)->change();
            $table->string('finish_options')->nullable()->default(null)->change();
            $table->string('acoustic_rating')->nullable()->default(null)->change();
            $table->string('wind_load')->nullable()->default(null)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('name')->nullable(false)->change();
        });
    }
};
