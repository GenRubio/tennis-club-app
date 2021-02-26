<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddActivoCalendarioEventos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('calendar_eventos') && ! Schema::hasColumn('calendar_eventos', 'active')) {
            Schema::table('calendar_eventos', function (Blueprint $table) {
                $table->boolean('active')->default(0);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('calendar_eventos') && Schema::hasColumn('calendar_eventos', 'active')) {
            Schema::table('calendar_eventos', function (Blueprint $table) {
                $table->dropColumn('active');
            });
        }
    }
}
