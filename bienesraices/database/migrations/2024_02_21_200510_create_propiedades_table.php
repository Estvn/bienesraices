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
        Schema::create('propiedades', function (Blueprint $table) {
            $table->id('codigoPropiedad');
            $table->string('color', 30);
            $table->double('metros');
            $table->string('tipoPropiedad', 50);
            $table->double('costoxmtr', 12, 2);
            $table->integer('codigoDuenio');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propiedades');
    }
};
