<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStateToParkingSpotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('parking_spots', function (Blueprint $table) {
            //
            $table->string('position')->unique()->change();
            $table->enum('state',['Disponible','Ocupado'])->default('Disponible');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('parking_spots', function (Blueprint $table) {
            //
            $table->dropColumn('state');
        });
    }
}
