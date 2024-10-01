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
            $table->string('medicamento_id');
            $table->string('receta_id');
            $table->foreign('medicamento_id')->references('cod_siga')->on('medicamento');
            $table->foreign('receta_id')->references('cod_receta')->on('receta');
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
