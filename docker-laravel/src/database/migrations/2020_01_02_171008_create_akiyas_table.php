<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAkiyasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akiyas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('akiya_id')->unique();
            $table->string('location');
            $table->string('landarea');
            $table->string('drivewayarea');
            $table->string('buildingarea');
            $table->string('buildingstructure');
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
        Schema::dropIfExists('akiyas');
    }
}
