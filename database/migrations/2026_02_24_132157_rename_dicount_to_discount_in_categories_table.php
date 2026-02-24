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
        Schema::table('categories', function (Blueprint $table) {
            $table->renameColumn('dicount', 'discount');
            $table->renameColumn('dicount_starts_at', 'discount_starts_at');
            $table->renameColumn('dicount_ends_at', 'discount_ends_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->renameColumn('discount', 'dicount');
            $table->renameColumn('discount_starts_at', 'dicount_starts_at');
            $table->renameColumn('discount_ends_at', 'dicount_ends_at');
        });
    }
};
