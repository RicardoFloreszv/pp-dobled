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
        Schema::create('tipo_medio_categoria_medio', function (Blueprint $table) {
            $table->bigInteger('id_tipo_medio');
            $table->bigInteger('id_categoria_medio');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_medio_categoria_medio');
    }
};
