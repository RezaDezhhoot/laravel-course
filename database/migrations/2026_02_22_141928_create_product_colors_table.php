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
        Schema::create('product_colors', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('color')->nullable();
            $table->foreignId('product_id')->constrained('products');
            $table->decimal('price',20 , 2);
            $table->unsignedTinyInteger('dicount')->default(0)->nullable();
            $table->timestamp('dicount_starts_at')->nullable();
            $table->timestamp('dicount_ends_at')->nullable();
            $table->string('status')->index();
            $table->unsignedSmallInteger('quantity')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_colors');
    }
};
