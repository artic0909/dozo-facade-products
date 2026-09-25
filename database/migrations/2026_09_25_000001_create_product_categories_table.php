<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // 1. Create product_categories table
        Schema::create('product_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // 2. Add slug and category_id to products table
        Schema::table('products', function (Blueprint $table) {
            $table->string('slug')->nullable()->after('name');
            $table->foreignId('category_id')->nullable()->after('slug')->constrained('product_categories')->nullOnDelete();
        });

        // 3. Seed default product categories
        $defaultCategories = [
            ['name' => 'Sliding Windows', 'slug' => 'sliding-windows', 'description' => 'Multi-track and slimline sliding window systems', 'order' => 1],
            ['name' => 'Casement Windows', 'slug' => 'casement-windows', 'description' => 'Outward and inward opening casement window systems', 'order' => 2],
            ['name' => 'Unitized Façade', 'slug' => 'unitized-facade', 'description' => 'Pre-engineered unitized curtain wall & structural glazing', 'order' => 3],
            ['name' => 'Perforated & Louvers', 'slug' => 'perforated-louvers', 'description' => 'Architectural sunshades, louvers, and perforated metal panels', 'order' => 4],
            ['name' => 'Architectural Doors', 'slug' => 'architectural-doors', 'description' => 'Heavy-duty pivot, sliding, and folding door systems', 'order' => 5],
            ['name' => 'Curtain Wall Systems', 'slug' => 'curtain-wall-systems', 'description' => 'Stick and semi-unitized high performance curtain walls', 'order' => 6],
        ];

        foreach ($defaultCategories as $catData) {
            $catId = DB::table('product_categories')->insertGetId([
                'name' => $catData['name'],
                'slug' => $catData['slug'],
                'description' => $catData['description'],
                'order' => $catData['order'],
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Link existing products with matching category name
            DB::table('products')
                ->where('category', $catData['name'])
                ->update(['category_id' => $catId]);
        }

        // 4. Generate slugs for any existing products that don't have a slug
        $products = DB::table('products')->get();
        foreach ($products as $p) {
            $slug = Str::slug($p->name);
            // Check if slug exists
            $count = DB::table('products')->where('slug', $slug)->where('id', '!=', $p->id)->count();
            if ($count > 0) {
                $slug = $slug . '-' . $p->id;
            }
            DB::table('products')->where('id', $p->id)->update([
                'slug' => $slug,
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropColumn(['category_id', 'slug']);
        });

        Schema::dropIfExists('product_categories');
    }
};
