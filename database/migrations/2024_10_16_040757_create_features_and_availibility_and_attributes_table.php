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
        Schema::create('sports', function (Blueprint $table) {
           $table->id();
           $table->string('name', 128)->unique();
        });

        Schema::create('attributes', function (Blueprint $table) {
            $table->id()->primary();
            $table->foreignId('shoes_id')->nullable()->references('id')->on('shoes')->cascadeOnDelete()->cascadeOnUpdate(); // Foreign Id
            $table->boolean('for_male');
            $table->boolean('for_female');
            $table->boolean('for_kids');
            $table->foreignId('sports_id')->nullable()->references('id')->on('sports')->cascadeOnDelete()->cascadeOnUpdate();
        });

        Schema::create('shoes_sizes', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('size', 128)->unique();
         });

        Schema::create('shoes_availabilitys', function (blueprint $table) {
            $table->id()->primary();
            $table->foreignId('shoes_id')->nullable()->references('id')->on('shoes')->cascadeOnDelete()->cascadeOnUpdate();; // Foreign Id
            $table->foreignId('shoes_sizes_id')->nullable()->references('id')->on('shoes_sizes')->cascadeOnDelete()->cascadeOnUpdate(); // Foreign Id
            $table->integer('quantity');
        });

        Schema::create('features', function (Blueprint $table) 
        {
            $table->id()->primary();
            $table->string('name')->unique();
        });

        Schema::create('shoes_features', function (Blueprint $table) {
            $table->id()->primary();
            $table->foreignId('shoes_id')->nullable()->references('id')->on('shoes')->cascadeOnDelete()->cascadeOnUpdate(); //foreign ID
            $table->foreignId('features_id')->nullable()->references('id')->on('features')->cascadeOnDelete()->cascadeOnUpdate(); //foreign
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sports');
        Schema::dropIfExists('shoes_sizes');
        Schema::dropIfExists('features');

        Schema::dropIfExists('shoes_availabilitys');
        Schema::dropIfExists('shoes_features');
        Schema::dropIfExists('attributes');


    }
    
};
