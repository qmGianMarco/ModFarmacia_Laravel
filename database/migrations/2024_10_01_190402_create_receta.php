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
            $table->id();
            $table->string('fecha');
            $table->decimal('monto', 8, 2);
            $table->string('periodo_academico');
            $table->foreignId('alumno_id')->constrained('alumno', 'id')->onDelete('cascade');
            $table->foreignId('medico_id')->constrained('medico', 'id')->onDelete('cascade');
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
