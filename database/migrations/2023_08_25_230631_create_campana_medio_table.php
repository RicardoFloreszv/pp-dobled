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
        Schema::create('campana_medio', function (Blueprint $table) {
            $table->id('id_campana_medio');
            $table->unsignedBigInteger('id_campana');
            $table->unsignedBigInteger('id_medio');
            $table->date('adm_fecha_inicio');
            $table->date('adm_fecha_fin');
            $table->date('oper_fecha_inicio');
            $table->date('oper_fecha_fin');
            $table->foreign('id_campana')->references('id_campana')->on('campanas')->onDelete('cascade');
            $table->foreign('id_medio')->references('id_medio')->on('medio')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campana_medio');
    }
};
