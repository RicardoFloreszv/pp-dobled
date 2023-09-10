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
        Schema::create('contactos', function (Blueprint $table) {
            $table->id('id_contacto');
            $table->string('nombre_contacto');
            $table->string('apellido_contacto');

            $table->unsignedBigInteger('id_tipoContacto');
            $table->foreign('id_tipoContacto')->references('id_tipoContacto')->on('tipo_contactos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contactos');
    }
};
