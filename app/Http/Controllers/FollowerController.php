<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Follower;
use Auth;

class FollowerController extends Controller
{
        public function update(Request $request) {
        var_dump($request);
    	$user_id = Auth::user()->id;
        $profile_id = $request['followed'];
        
        $followed = Follower::where('follower_id', $user_id)
            ->where('followed_id', $profile_id)->first();

        if ($followed) {
            $followed->delete();
          
            
        } else {
            $follow = new Follower;
            $follow->follower_id = $user_id;
            $follow->followed_id = $profile_id;
            $follow->save();
            
        }
    }
}
