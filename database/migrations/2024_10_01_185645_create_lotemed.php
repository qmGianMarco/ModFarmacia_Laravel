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
            $table->id();
            $table->string('fecha_ingreso');
            $table->string('fecha_venc');
            $table->integer('cantidad');
            $table->decimal('precio_unitario', 8, 2);
            $table->foreignId('medicamento_id')->constrained('medicamento', 'id');
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
