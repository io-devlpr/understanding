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
            $table->string('password');
            $table->integer("back_end_id");
            $table->string("lang", 2);
            $table->rememberToken();
            $table->timestamps();
        });
    }

/*
 *  Create the table for every use registration
 *
    $table->increments('id');
    $table->foreign("user_id")
    ->references("id")->on("users")
    ->onDelete("cascade")
    ->onUpdate("restrict");
    $table->ipAddress("ip");
    $table->string("device");
    $table->string("location");
    $table->timestamps();
    */
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
