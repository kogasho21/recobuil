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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('unisex');
            $table->string('account')->unique();
            $table->date('birthday');
            $table->string('job');
            $table->string('address');
            $table->string('preference');
            $table->string('postal_code');
            $table->text('pr');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->date('birthday');
            $table->string('job');
            $table->integer('prefecture')->nullable();
            $table->integer('hope_prefecture')->nullable();
            $table->text('introduction');
            $table->string('acount')->nullable();
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
