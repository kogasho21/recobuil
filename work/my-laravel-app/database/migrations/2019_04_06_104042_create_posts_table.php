<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function(Blueprint $table){
            $table->increments('id');
            $table->string('title');
            //$table->integer('cat_id'); // ポストテーブルとカテゴリーテーブルの紐付けに利用します
            $table->text('content');
            $table->unsignedInteger('comment_count')->default(0);; // 投稿に何件のコメントがついたのかをカウントします
            $table->timestamps();
            // $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            // $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            //$table->foreign('cat_id')->references('id')->on('categories');//カテゴリーテーブルと外部で結合 別ファイルにて行うよう変更

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
