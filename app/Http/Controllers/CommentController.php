<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Comment;

class CommentController extends Controller
{ 
	public function store(Request $request, $id)
	{ 
		$this->validate(request(), ['body'=>'required']);
		//associate a comment with post
		$comment = new \App\Comment(['body' =>request('body')]);

        $post = \App\Post::find($id);

		$post->comments()->save($comment); 

		return back();       
    }
}




		