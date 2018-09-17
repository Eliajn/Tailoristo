<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use App\Image;
use App\Profile;
use Auth;

use Illuminate\Http\Request;

class FeedController extends Controller
{
    public function show() {
    	$id = \Auth::user()->id;
        $posts = Post::with('likes','comments', 'comments.replies', 'images', 'views')->get();
        $profiles = Profile::All();
        return view('home', ['posts' => $posts, 'profiles' => $profiles]);
    }

    public function comment(Request $request) {
        $id = \Auth::user()->id;
        $post_id = $request->post_id;
        $comment = $request->comment;

        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->user_id = $id;
        $comment->post_id = $post_id;
        $comment->save();
        
        $comment = Comment::where('post_id', $post_id)->get();

        return response([
            'comments' => $request->comment
        ], Response::HTTP_OK);
    }
}
