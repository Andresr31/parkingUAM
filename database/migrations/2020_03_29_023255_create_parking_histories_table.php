<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParkingHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parking_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vehicle_id');
            $table->unsignedBigInteger('parking_spot_id');
            $table->unsignedBigInteger('user_id');
            $table->date('date_start');
            $table->date('date_end');
            $table->date('status');
            $table->timestamps();
        

            $table->foreign('vehicle_id')->references('id')->on('vehicles');
            $table->foreign('parking_spot_id')->references('id')->on('parking_spots');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parking_histories');
    }
}
