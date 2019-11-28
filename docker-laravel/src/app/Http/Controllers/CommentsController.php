<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class CommentsController extends Controller
{
	public function store(Request $request)
	{
	    $params = $request->validate([
	    	'post_id' => 'required',
	        'commenter' => 'required|max:50',
	        'comment' => 'required|max:200',
	    ]);

	    \DB::table('comments')->insert($params);

	    $post_id = $request->input('post_id');

	    \DB::table('posts')-> where('id', $post_id) ->increment('comment_count');;

	    return redirect()->route('bbc.show', ['id' => $post_id]);
	}
}
