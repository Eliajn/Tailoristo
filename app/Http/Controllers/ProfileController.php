<?php

namespace App\Http\Controllers;
use App\Profile;
use App\Photo;
use Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show() {
    	$id = \Auth::user()->id;
        $profile = Profile::with('photo')->where('user_id', $id)->get();
        if($profile->isEmpty()){
            return view('/profile/editprofile', ['profile', $profile]);
        }
        // dd($profile);
        return view('/profile/profile', ['profile'=> $profile->first()]);
    }

    public function store(Request $request) {

        $this->validate($request, [
            'image' =>
                'required|image|mimes:jpeg,png,jpg|max:2048'
            ]);
        $id = \Auth::user()->id;
        $profile = new Profile;
        $profile->nickname = $request->nickname;
        $profile->biography = $request->biography;
        $profile->title = $request->title;
        $profile->user_id = $id;
        $profile->save();

        $profile_id = $profile->id;
        $image = $request->file('image');
        $new_name =rand() . '.' .$image->getClientOriginalExtension();
        $image->move(public_path('profilepic'),$new_name);
        $photo = new Photo;
        $photo->profile_id = $profile_id;
        $photo->user_id = $id;
        $photo->image = $new_name;
        $photo->save();

        return redirect('/profile/');

    }

}
