<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function likes() {
    return $this->hasMany('App\Like');
    }
    public function comments() {
        return $this->hasMany('App\Comment');
    }
    public function profile() {
        return $this->hasOne('App\Profile');
    }
    public function posts() {
        return $this->hasMany('App\Post');
    }
    public function replies() {
        return $this->hasMany('App\Replie');
    }
    public function images() {
        return $this->hasMany('App\Image');
    }
    public function views() {
        return $this->hasMany('App\View');
    }
    public function follows() {
        return $this->belongsToMany(User::class, 'followers', 'follower_id', 'followed_id');
    }
    public function followers() {
        return $this->belongsToMany(User::class, 'followers', 'followed_id', 'follower_id');
    }
    public function messageSent() {
        return $this->hasMany(Message::class, 'from');
    }
    public function messageReceived() {
        return $this->belongsToMany(Message::class, 'to');
    }
    

}
