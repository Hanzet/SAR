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
        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('areas_id')->nullable();
            $table->string('codigo', 50);
            $table->string('nombreArea', 200);
            $table->string('logo', 100);
            $table->string('ubicacion', 100);
            $table->enum('tipoArea' , ['ADM','FAC', 'PRO']);
            $table->char('estado', 1)->default('1');

            $table->foreign('areas_id')
            ->references('id')
            ->on('areas')
            ->onUpdate('cascade')
            ->onDelete('restrict');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('areas');
    }
};
