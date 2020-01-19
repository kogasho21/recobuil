<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuildersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('builders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');//名前
            $table->string('office');//事業所名
            $table->string('address');//住所
            $table->string('mail_address');//メールアドレス
            $table->string('tell_no');//電話番号
            $table->string('unisex');//性別
            $table->date('birthday');//誕生日
            $table->string('homepage');//ホームページ
            $table->text('career');//経歴
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
        Schema::dropIfExists('builders');
    }
}
