<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->integer('cost');
            $table->string('school')->nullable();
            $table->string('location');
            $table->string('policies')->nullable();
            $table->integer('user_id')->index()->unique()->unsigned();
            $table->integer('category_id')->index()->unsigned();

            $table->string('rffurnished')->nullable();
            $table->string('hfprivatebath')->nullable();
            $table->string('hfwashingmachine')->nullable();
            $table->string('hfinternet')->nullable();
            $table->string('hftv')->nullable();
            $table->string('hfpets')->nullable();
            $table->string('hfsmoking')->nullable();


            $table->string('ppets')->nullable();
            $table->string('pcleanliness')->nullable();
            $table->string('psnoring')->nullable();
            $table->string('pgender')->nullable();
            $table->string('pchildren')->nullable();
            $table->string('pparty')->nullable();
            $table->string('page')->nullable();
            $table->string('psmoking')->nullable();
            
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
        Schema::dropIfExists('rooms');
    }
}
