<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->integer('phone_number')->length(9)->unsigned();
            $table->string('country_code');
            $table->string('authy_id')->nullable();
            $table->boolean('verified')->default(false);
            
            // $table->string('ciudad')->nullable();;
            // $table->string('calle')->nullable();;
            // $table->integer('postal')->length(10)->unsigned()->nullable();;
            
            // $table->string('foto')->default('default.jpg'); 
            // $table->enum('role',['cliente','funcionario','administrador'])->default('funcionario');

            $table->rememberToken();
            $table->timestamps();

            $table->softDeletes();
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
