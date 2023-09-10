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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('id_cliente');
            $table->string('rfc');
            $table->string('razon_social');
            $table->string('direccion_fiscal');
            $table->string('email');
            $table->string('codigo_postal');
            $table->unsignedBigInteger('id_corporativo');
            $table->foreign('id_corporativo')->references('id_corporativo')->on('corporativos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
