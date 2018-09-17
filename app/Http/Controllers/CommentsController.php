<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\User;
use Auth;

class CommentsController extends Controller
{
    public function store(Request $request) {
    	// var_dump($request->input());
    	$id = \Auth::user()->id;
	    $comment = new Comment;
	    $comment->user_id = $id;
	    $comment->post_id = $request->input('postId');
	    $comment->comment = $request->input('comment');
	    $comment->save();
    }
}
