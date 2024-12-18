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


        Schema::create('shoes', function (Blueprint $table) {
            $table->id()->primary();
            $table->foreignId('brands_id')->nullable()->references('id')->on('brands')->cascadeOnDelete()->cascadeOnUpdate(); // Foreign Id
            $table->string('description', 10248)->nullable();
            $table->string('name', 128)->unique();
            $table->double('price');
        });

        Schema::create('shoes_images', function (Blueprint $table) {
           $table->id()->primary();
           $table->foreignId('shoes_id')->nullable()->references('id')->on('shoes')->cascadeOnDelete()->cascadeOnUpdate();
           $table->string('path');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');

        Schema::dropIfExists('shoes');


    }
};
