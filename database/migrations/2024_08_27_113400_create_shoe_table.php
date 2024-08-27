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
        Schema::create('shoe_type', function (Blueprint $table) {
            $table->increments('id')->primary();
            $table->string('type', 64)->unique();
        });

        //  TODO: Might add some stuff like review n other stuff...
        Schema::create('shoe', function (Blueprint $table) {
            $table->increments('id')->primary();
            $table->string('name', 128)->unique();
            $table->double('price');
            $table->integer('stock');
            $table->foreign('id')->references('id')->on('shoe_type')->cascadeOnDelete();
            $table->json('attributes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shoe');
        Schema::dropIfExists('shoe_type');
    }
};
