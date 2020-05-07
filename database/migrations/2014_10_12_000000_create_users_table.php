<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',200)->nullable;
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('identification_type', ['identification_card', 'passport'])->default('identification_card');
            $table->string('identification_number');
            $table->enum('role', ['vigilant', 'useruam'])->default('vigilant');
            $table->string('phone');
            $table->string('password');

            //$table->timestamp('email_verified_at')->useCurrent();
        
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
