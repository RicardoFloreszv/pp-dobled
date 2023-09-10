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
        Schema::create('incidencia', function (Blueprint $table) {
            $table->id('id_incidencia');
            $table->bigInteger('id_tipo_incidencia');
            $table->bigInteger('id_campana_medio');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('detalle_incidencia',300);
            $table->bigInteger('id_usuario_responsable');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incidencia');
    }
};
