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
        Schema::create('historial_busqueda_medio', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_historial_busqueda');
            $table->unsignedBigInteger('id_medio');
            $table->timestamps();

            $table->foreign('id_historial_busqueda')->references('id_historial_busqueda')->on('historial_busquedas')->onDelete('cascade');
            $table->foreign('id_medio')->references('id_medio')->on('medio')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historial_busqueda_medio');
    }
};
