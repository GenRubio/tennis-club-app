<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAlquilerPistas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alquiler_pistas', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_pista');
            $table->string('titulo');
            $table->string('descripcion')->nullable(true);
            $table->string('url')->nullable(true);
            $table->float('precio');
            $table->boolean('activo')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alquiler_pistas');
    }
}
