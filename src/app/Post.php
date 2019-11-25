<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model{

	protected $fillable = [
        'title',
        'body',
    ];

	public function comments(){
		// 投稿はたくさんのコメントを持つ
		return $this->hasMany('comment', 'post_id');
	}

	public function category(){
		// 投稿は1つのカテゴリーに属する
		return $this->belongsTo('category','cat_id');
	}
}
