<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Post;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
	public function index()
	{
		$posts = \DB::table('posts') ->select('posts.id as post_id', 'posts.title as title','posts.content','posts.cat_id','posts.created_at','posts.comment_count','categories.name as cat_name' ) -> leftjoin('categories', 'posts.cat_id', '=', 'categories.id') -> orderBy('posts.id', 'desc') -> get();
		return view('bbc.index')->with('posts',$posts);
	}

	public function show($id)
	{
		// $post  = \DB::table('posts') ->select('posts.id as post_id', 'posts.title as title','posts.content','posts.image','posts.created_at','categories.name as cat_name' ) ->  where('posts.id', $id) -> leftjoin('categories', 'posts.cat_id', '=', 'categories.id') ->get() ->first();
		$post  = \DB::table('posts') ->select('posts.id as post_id', 'posts.title as title','posts.content','posts.created_at','categories.name as cat_name' ) ->  where('posts.id', $id) -> leftjoin('categories', 'posts.cat_id', '=', 'categories.id') ->get() ->first();

		$comments = \DB::table('posts') ->select('comments.commenter', 'comments.comment') -> leftjoin('comments', 'posts.id', '=', 'comments.post_id')  ->  where('posts.id', $id) -> get();
		return view('bbc.single')->with(['post' => $post, 'comments' => $comments, 'id' => $id]);
	}
	public function store(Request $request)
	{
	    $params = $request->validate([
	        'title' => 'required|max:50',
	        'content' => 'required|max:200',
	        'cat_id' => 'required',
	        // 'image' => 'required|file|image|max:4000',
	    ]);

	    // $file = $params['image'];

		// $image = \Image::make(file_get_contents($file->getRealPath()));
		// $image
	 //      ->save(public_path().'/images/'.$file->hashName());

	    // $ext = $file->getClientOriginalExtension();

	    //圧縮率はデフォルト
	    // if($ext == 'jpg' or $ext == 'jpeg') {
	    // 	imagejpeg(imagecreatefromjpeg($file),public_path().'/images/'.'compre'.$file->hashName());
	    // } elseif($ext == 'png') {
	    // 	imagepng(imagecreatefrompng($file),public_path().'/images/'.'comore'.$file->hashName());
	    // }
	    // $params['image'] = '/images/'.$file->hashName();


	    \DB::table('posts')->insert($params);

	    return redirect()->route('bbc.index');
	}

	public function create()
	{
	    return view('bbc.create');
	}
}
