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
            $table->string('phone')->nullable(); 
            $table->string('password');
            $table->integer('property_id')->default(0)->nullable();
            $table->integer('room_id')->default(0)->nullable();
            $table->string('is_agent')->default('false')->nullable();
            $table->string('photoname')->default('')->nullable();
            $table->string('pets')->default('')->nullable();
            $table->string('cleanliness')->default('')->nullable();
            $table->string('snoring')->default('')->nullable();
            $table->string('gender')->default('')->nullable();
            $table->string('children')->default('')->nullable();
            $table->string('party')->default('')->nullable();
            $table->date('dob')->nullable();
            $table->string('smoking')->default('')->nullable();
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
        Schema::drop('users');
    }
}
