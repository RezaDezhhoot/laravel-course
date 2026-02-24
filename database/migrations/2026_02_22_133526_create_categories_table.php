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
        Schema::create('categories' , function(Blueprint $table) {
            $table->id();
            $table->string('slug')->unique()->nullable();
            $table->string('title')->nullable();
            $table->string('type')->index()->nullable();
            $table->unsignedTinyInteger('dicount')->default(0)->nullable();
            $table->timestamp('dicount_starts_at')->nullable();
            $table->timestamp('dicount_ends_at')->nullable();
            $table->text('body')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
