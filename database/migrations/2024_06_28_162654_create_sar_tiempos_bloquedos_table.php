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
        Schema::create('sar_tiempos_bloquedos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("sar_recursos_id");
            $table->string("tipo_recurso", 45);
            $table->date("fechaInicio");
            $table->date("fechaFin");
            $table->dateTime("horaInicio");
            $table->dateTime("horaFin");
            $table->string("motivo", 150);
            $table->timestamps();

            $table->foreign("sar_recursos_id")
            ->references("id")
            ->on("sar_recursos")
            ->onUpdate('cascade')
            ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sar_tiempos_bloquedos');
    }
};
