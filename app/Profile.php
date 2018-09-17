<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Follower;
use Auth;
class Profile extends Model
{
    public function user() {
    	return $this->belongsTo('App\User');
    }
    public function photo() {
    	return $this->hasOne('App\Photo');
    }
 

    public function follow($followed) {
        $followw = Follower::where('followed_id', $followed)
            ->where('follower_id', Auth::user()->id)->first();
        if($followw) {
            return true;
        }
        return false;
    }
}
