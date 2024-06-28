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
        Schema::create('sar_recursos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("sar_tipos_recursos_id");
            $table->unsignedBigInteger("sar_estados_recursos_id");
            $table->unsignedBigInteger("areas_id");
            $table->string("codigo", 50);
            $table->string("nombreRecurso", 100);
            $table->string("notas", 85);
            $table->string("equipamiento_adicional", 85);
            $table->string("costo_uso");
            $table->string("aplicaCredito", 2);
            $table->timestamps();

            $table->foreign("sar_tipos_recursos_id")
            ->references("id")
            ->on("sar_tipos_recursos")
            ->onUpdate('cascade')
            ->onDelete('restrict');

            $table->foreign("sar_estados_recursos_id")
            ->references("id")
            ->on("sar_estados_recursos")
            ->onUpdate('cascade')
            ->onDelete('restrict');

            $table->foreign("areas_id")
            ->references("id")
            ->on("areas")
            ->onUpdate('cascade')
            ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sar_recursos');
    }
};
