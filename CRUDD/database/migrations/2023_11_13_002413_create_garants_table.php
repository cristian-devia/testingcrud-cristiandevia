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
        Schema::create('garants', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->dateTime('fechareporte');
            $table->dateTime('fechaatenciongarantia');
            $table->string('numeroordenn');
            $table->string('proveedor');
            $table->string('nombreelemento');
            $table->string('serial');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('garants');
    }
};
