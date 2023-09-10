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
        Schema::create('proveedor', function (Blueprint $table) {
            $table->id('id_proveedor');
            $table->string('nombre_proveedor', 45);
            $table->string('telefono', 13);
            $table->string('email');
            $table->string('razon_social');
            $table->string('rfc', 13);
            $table->string('banco');
            $table->string('numero_cuenta');
            $table->string('numero_clabea');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedor');
    }
};
