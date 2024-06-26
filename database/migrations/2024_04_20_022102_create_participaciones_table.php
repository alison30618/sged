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
        Schema::create('participaciones', function (Blueprint $table) {
            $table->id();
            $table->integer('evento_id');
            $table->integer('equipo_id');
            $table->string('resultado');
            $table->string('premios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participaciones');
    }
};
