<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCasalIncripcionesMeses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casal_incripciones_meses', function (Blueprint $table) {
            $table->id();
            $table->integer('id_alumno');
            $table->date('data_inicio');
            $table->date('data_final');
            $table->string('mes');
            $table->boolean('activo');
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
        Schema::dropIfExists('casal_incripciones_meses');
    }
}
