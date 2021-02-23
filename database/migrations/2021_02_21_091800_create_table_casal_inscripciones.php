<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCasalInscripciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casal_inscripciones', function (Blueprint $table) {
            $table->id();
            $table->integer('id_alumno');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('adresa');
            $table->string('poblacion');
            $table->string('codigo_postal');
            $table->string('provincia');
            $table->string('telefono_1');
            $table->string('telefono_2')->nullable(true);
            $table->date('data_nacimiento');
            $table->string('n_cat_salut');
            $table->string('n_cuenta_bancaria')->nullable(true);
            $table->string('nombre_titular')->nullable(true);
            $table->string('nif_titular');
            $table->string('email');
            $table->boolean('validado')->default(0);
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
        Schema::dropIfExists('casal_inscripciones');
    }
}
