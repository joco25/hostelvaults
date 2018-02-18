<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->index()->unsigned();
            $table->string('hffree')->nullable();
            $table->string('hfgeneral')->nullable();
            $table->string('hfservices')->nullable();
            $table->string('hffoodndrink')->nullable();
            $table->integer('user_id')->index()->unsigned();
            $table->string('name');
            $table->text('description');
            $table->integer('cost');
            $table->string('school');
            $table->string('location');
            $table->string('policies')->nullable();
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
        Schema::dropIfExists('properties');
    }
}
