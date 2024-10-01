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
        Schema::create('lotemed', function (Blueprint $table) {
            $table->string('cod_lote')->primary();
            $table->string('fecha_ingreso');
            $table->string('fecha_venc');
            $table->integer('cantidad');
            $table->decimal('precio_unitario', 8, 2);
            $table->string('medicamento_id');
            $table->foreign('medicamento_id')->references('cod_siga')->on('medicamento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lotemed');
    }
};
