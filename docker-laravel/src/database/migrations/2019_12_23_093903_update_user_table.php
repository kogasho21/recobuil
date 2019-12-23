<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->date('birthday');
            $table->string('job');
            $table->string('like');
            $table->string('address');
            $table->string('address_no');
            $table->string('post_no');
            $table->string('introduction');
            $table->string('account');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('birthday');
            $table->dropColumn('job');
            $table->dropColumn('like');
            $table->dropColumn('address');
            $table->dropColumn('address_no');
            $table->dropColumn('post_no');
            $table->dropColumn('introduction');
            $table->dropColumn('account');
        });
    }
}
