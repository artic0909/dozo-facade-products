<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasColumn('products', 'type')) {
            Schema::table('products', function (Blueprint $table) {
                $table->string('type', 50)->default('windows')->after('slug');
            });
        }

        // Set initial types based on product names and categories
        DB::table('products')->whereIn('id', [1, 2, 5])->update(['type' => 'windows']);
        DB::table('products')->whereIn('id', [3, 4, 6])->update(['type' => 'products']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasColumn('products', 'type')) {
            Schema::table('products', function (Blueprint $table) {
                $table->dropColumn('type');
            });
        }
    }
};
