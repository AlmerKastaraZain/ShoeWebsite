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
        //  TODO: Might add some stuff like review n other stuff...
        Schema::create('shoes', function (Blueprint $table) {
            $table->increments('id')->primary();
            $table->string('name', 128)->unique();
            $table->string('brand', 128);
            $table->string('collection', 128);
            $table->double('price');
            $table->integer('stock');
            $table->json('attributes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shoes');
    }
};
