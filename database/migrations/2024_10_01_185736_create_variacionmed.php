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
            $table->foreignId('usuario_id')->constrained('usuario', 'id');
            $table->foreignId('lotemed_id')->constrained('lotemed', 'id');
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
