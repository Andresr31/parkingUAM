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
            $table->enum('identification_type', ['identification_card', 'passport'])->default('identification_card');
            $table->string('identification_number')->nullable;
            $table->enum('role', ['vigilant', 'useruam'])->default('vigilant');
            $table->string('phone')->nullable;
            $table->string('password')->nullable;
            $table->timestamp('email_verified_at')->nullable;
            
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
