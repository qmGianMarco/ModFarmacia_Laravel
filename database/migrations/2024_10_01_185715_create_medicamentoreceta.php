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
        Schema::create('medicamento_receta', function (Blueprint $table) {
            $table->foreignId('medicamento_id')->constrained('medicamento', 'id');
            $table->foreignId('receta_id')->constrained('receta', 'id');
            $table->integer('cantidad');
            $table->decimal('precio_total', 8, 2);
            $table->primary(['medicamento_id', 'receta_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicamento_receta');
    }
};
