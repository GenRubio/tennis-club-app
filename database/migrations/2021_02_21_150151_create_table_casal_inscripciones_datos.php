<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCasalInscripcionesDatos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casal_inscripciones_datos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_alumno')->nullable(true);
            $table->integer('inscripcion_id')->nullable(true);
            $table->boolean('estada_matins')->default(0);
            $table->boolean('comedor')->default(0);
            $table->string('hora_permanencia');
            $table->boolean('jovenil')->default(0);
            $table->boolean('compra_raqueta')->default(0);
            $table->boolean('compra_pala')->default(0);
            $table->string('talla_camiseta')->nullable(true);
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
        Schema::dropIfExists('casal_inscripciones_datos');
    }
}
