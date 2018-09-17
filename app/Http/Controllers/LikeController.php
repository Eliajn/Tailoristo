<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Like;

class LikeController extends Controller
{
    public function update(Request $request) {
    	$user_id = Auth::user()->id;
        $post_id = $request['postId'];

        $liked = Like::where('user_id', $user_id)
            ->where('post_id', $post_id)->first();

        if ($liked) {
            $liked->delete();
            
        } else {
            $like = new Like;
            $like->user_id = $user_id;
            $like->post_id = $post_id;
            $like->save();
        }
    }
}
