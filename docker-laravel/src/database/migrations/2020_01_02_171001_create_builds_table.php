<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuildsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('builds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('builder_id')->unsigned();//建築者
            // $table->foreign('builder_id')
            // ->references('id')->on('builders')
            // ->onDelete('cascade');
            $table->string('photo1');//写真1
            $table->string('photo2');//写真2
            $table->string('photo3');//写真3
            $table->string('office');//事業所名
            $table->string('place');//場所
            $table->date('completionDate');//竣工日
            $table->string('floorarea');//延べ床面積
            $table->string('money');//金額
            $table->string('siteArea');//敷地面積
            $table->string('buildingArea');//建物面積
            $table->string('buildingStructure');//建物構造
            $table->string('type');//タイプ
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
        Schema::dropIfExists('builds');
    }
}
