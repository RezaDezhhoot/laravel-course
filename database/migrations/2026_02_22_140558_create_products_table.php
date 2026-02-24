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
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('slug')->unique()->nullable();
            $table->string('title')->nullable();
            $table->text('short_body')->nullable();
            $table->mediumText('body')->nullable();
            $table->text('details')->nullable();
            $table->text('image')->nullable();
            $table->json('gallry')->nullable();

            // $table->unsignedBigInteger('cateogry_id')->index();
            $table->foreignId('category_id');

            $table->foreign('category_id')->references('id')->on('categories');
            
            // $table->foreignId('cateogry_id')->constrained('categoeies');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
