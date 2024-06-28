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
        Schema::create('sar_tipos_recursos', function (Blueprint $table) {
            $table->id();
            $table->string("codigo");
            $table->string ("tipo");
            $table->string("descripcion", 250);
            $table->integer("maxTiempo");
            $table->string("estado", 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sar_tipos_recursos');
    }
};
