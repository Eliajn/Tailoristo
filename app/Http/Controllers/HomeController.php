<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Image;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $name = \Auth::user()->name;
        $user=\Auth::user();
        // dd($user->followers);
        // $user = User::where('id', $id)->get();
        return view('home', ['name'=> $name]);
    }



    public function show() {
            $id = \Auth::user()->id;
            $posts = Post::where('user_id', $id)->get();
            $posts = Post::all();
            
            return view('posts/my-posts',['posts'=>$posts]);
    }

    


}