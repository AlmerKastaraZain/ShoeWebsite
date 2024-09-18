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
            $table->increments('shoe_id')->primary();
            $table->foreignId('brand_id')->references('brand_id')->on('brand')->onDelete('cascade');
            $table->string('name', 128)->unique();
            $table->double('price');
            $table->integer('stock');
            $table->timestamps();
        });

        Schema::create('brands', function (Blueprint $blueprint) {
            $blueprint->increments('brand_id')->primary();
            $blueprint->string('brand', 128)->unique();
            $blueprint->string('collection', 128);
        });

        Schema::create('attributes', function (Blueprint $blueprint) {
            $blueprint->increments('id')->primary();
            $blueprint->foreignId('shoe_id')->references('shoe_id')->on('shoes')->onDelete('cascade');
            $blueprint->string('gender', 128)->nullable();
            $blueprint->string('kids', 128)->nullable();
            $blueprint->string('sport', 128)->nullable();
        });

        Schema::create('shoes_avilability', function (blueprint $blueprint) {
            $blueprint->increments('id')->primary();
            $blueprint->foreignId('shoe_id')->references('shoe_id')->on('shoes')->onDelete('cascade');
            $blueprint->string('shoe_size', 128);
            $blueprint->integer('quantity');
        });

        Schema::create('features', function (Blueprint $blueprint) {
            $blueprint->increments('id')->primary();
            $blueprint->foreignId('shoe_id')->references('shoe_id')->on('shoes')->onDelete('cascade');
            $blueprint->string('feature', 128);
        });

        //  TODO: Add review, and maybe sale number?
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shoes');
    }
};
