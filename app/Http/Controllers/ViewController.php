<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\View;

class ViewController extends Controller
{
    public function store(Request $request) {
    	$userId = Auth::user()->id;
    	$postId = $request->id;

    	$view = DB::table('views')
                    ->where('user_id', '=', $userId)
                    ->Where('post_id', '=',$postId)
                    ->get();
    	if ($view) {
    		return;
    	}

    	$view = new View;
    	$view->post_id = $postId;
    	$view->user_id = $userId;
    	$view->save();
    	echo "ok";
    }
}
