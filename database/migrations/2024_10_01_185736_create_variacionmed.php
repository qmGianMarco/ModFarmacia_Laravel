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
        Schema::create('variacionmed', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad');
            $table->string('tipo');
            $table->string('motivo');
            $table->string('fecha');
            $table->string('lotemed_id');
            $table->foreignId('usuario_id')->constrained('usuario', 'id');
            $table->foreign('lotemed_id')->references('cod_lote')->on('lotemed');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variacionmed');
    }
};
