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
        Schema::create('asings', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->string('estado');
            $table->dateTime('fecha_de_prestamo');
            $table->dateTime('fecha_de_entrega');
            $table->string('serial');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('cargo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asings');
    }
};
