<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRenter1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('renter1s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('place');
            $table->string('proj_place');
            $table->string('center');
            $table->string('phone');
            $table->date('date');
            $table->string('id_nation');
            $table->string('type_pay');
            $table->string('proj_time');
            $table->string('type_zr3');
            $table->string('proj_place1');
            $table->string('home');
            $table->string('state');
            $table->string('last_land');
            $table->string('last_proj');
            $table->string('new_pos');
            $table->string('message');
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
        Schema::dropIfExists('renter1s');
    }
}
