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
        Schema::create('medicamento', function (Blueprint $table) {
            $table->string('cod_siga')->primary();
            $table->string('nombre');
            $table->string('principio_activo');
            $table->string('forma_farmaceutica');
            $table->string('concentracion');
            $table->integer('stock_min');
            $table->integer('cantidad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicamento');
    }
};
