<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCatIdPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->integer('cat_id')->unsigned();
            $table->foreign('cat_id')
            ->references('id')->on('categories')
            ->onDelete('cascade');
        });
    }

    public function down()
    {
        //Schema::table('articles', function (Blueprint $table) {
            //$table->dropForeign('articles_user_id_foreign');
        //});
    }
}
