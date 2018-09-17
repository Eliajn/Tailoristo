<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user() {
    	return $this->belongsTo('App\User');
    }
    public function likes() {
    	return $this->hasMany('App\Like');
    }
    public function comments() {
    	return $this->hasMany('App\Comment');
    }
    public function views() {
    	return $this->hasMany('App\View');
    }
    public function images() {
    	return $this->hasMany('App\Image');
    }
    public function feeds() {
        return $this->images()->first();
    }
    
    public function like($user_id) {
        $hasLike = Like::where('user_id', $user_id)
            ->where('post_id', $this->id)->first();
        if($hasLike) {
            return true;
        }
        return false;
    }
}
