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
        Schema::create('medio', function (Blueprint $table) {
            $table->id('id_medio');
            $table->bigInteger('id_proveedor');
            $table->string('identificador_proveedor',45);
            $table->bigInteger('id_ciudad_medio');
            $table->bigInteger('id_avenida_medio');
            $table->string('ubicacion',200);
            $table->bigInteger('id_tipo_medio');
            $table->float('base');
            $table->float('altura');
            $table->bigInteger('id_flujo_medio');
            $table->tinyInteger('luz');
            $table->float('tarifa');
            $table->string('coordenadas',50);
            $table->string('mapa',300);
            $table->string('imagen',200);
            $table->bigInteger('id_estatus_medio');
            $table->string('clasifiacion',60);
            $table->date('fecha_disponibilidad');
            $table->string('referencias',200);
            $table->bigInteger('id_tipo_vista_medio');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medio');

    }
};
