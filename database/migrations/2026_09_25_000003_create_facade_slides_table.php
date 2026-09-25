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
        Schema::create('facade_slides', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('order')->default(1);
            $table->string('name'); // Façade Cladding, Architectural Panels, etc.
            $table->string('eyebrow')->nullable();
            $table->text('headline');
            $table->text('desc');
            $table->string('cta_text')->default('Request Façade Consultation');
            $table->string('cta_link')->default('#contact');
            $table->string('image')->default('/images/solution_facade.jpg');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facade_slides');
    }
};
