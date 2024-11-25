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

        Schema::create('shoe_collections', function (Blueprint $table) {
            $table->id();
            $table->string('collection', 128)->unique();
        });


        Schema::create('brands', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('brand', 128)->unique();
            $table->foreignId('shoe_collections_id')->nullable()->references('id')->on('shoe_collections')->cascadeOnDelete()->cascadeOnUpdate();
        });

        //  TODO: Add review, and maybe sale number?
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brands');

        Schema::dropIfExists('shoe_collections');

    }
};