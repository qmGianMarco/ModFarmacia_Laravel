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
        Schema::create('receta', function (Blueprint $table) {
            $table->string('cod_receta')->primary();
            $table->string('fecha');
            $table->decimal('monto', 8, 2);
            $table->string('periodo_academico');
            $table->string('alumno_id');
            $table->string('medico_id');
            $table->foreign('alumno_id')->references('dni')->on('alumno');
            $table->foreign('medico_id')->references('dni')->on('medico');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receta');
    }
};
