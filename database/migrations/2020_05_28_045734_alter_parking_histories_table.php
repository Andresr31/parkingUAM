<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterParkingHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('parking_histories', function (Blueprint $table) {
            //
            $table->dropForeign(['vehicle_id']);

            $table->dropColumn('vehicle_id');
            $table->dropColumn('date_start');
            $table->dropColumn('date_end');
            $table->dropColumn('status');

            $table->string('plate');
            $table->boolean('paid')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('parking_histories', function (Blueprint $table) {
            $table->dropColumn('plate');
            $table->dropColumn('paid');

            $table->unsignedBigInteger('vehicle_id');
            $table->date('date_start');
            $table->date('date_end');
            $table->date('status');

            $table->foreign('vehicle_id')->references('id')->on('vehicles');
        });
    }
}
