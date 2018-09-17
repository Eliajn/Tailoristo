<?php

namespace App\Http\Controllers;
use App\User;
use App\Post;
use App\Image;
use App\Like;
use Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function show() {
       $id = \Auth::user()->id;
       $posts = Post::with('likes','comments', 'comments.replies', 'images', 'views')->where('user_id', $id)->get();
       return view('/post/myposts', ['posts' => $posts]);
    }
    public function store(Request $request) {

    	if($request->hasFile('image')){
	        $this->validate($request,[
			'image' => 'required',
			'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
		    ]);
	        $id = \Auth::user()->id;
	        $post = new Post;
	        $post->caption = $request->input('caption');
	        $post->user_id = $id;
	        $post->save();
	        $post->id;
	        $files=$request->file('image');

            foreach($files as $image) {
                $name=rand() . '.' .$image->getClientOriginalExtension();
                $image->move(public_path('posts'),$name);
                $image = new Image;
                $image->user_id = $id;
                $image->post_id = $post->id;
                $image->image = $name;
                $image->save();
            }
        return redirect('/');
        }
    }

}




 // Route::post('/upload', function()
 // {
 //    $postData = $request->only('file');
 //    $file = $postData['file'];

 //    // Build the input for validation
 //    $fileArray = array('image' => $file);

 //    // Tell the validator that this file should be an image
 //    $rules = array(
 //      'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000' // max 10000kb
 //    );

 //    // Now pass the input and rules into the validator
 //    $validator = Validator::make($fileArray, $rules);

 //    // Check to see if validation fails or passes
 //    if ($validator->fails())
 //    {
 //          // Redirect or return json to frontend with a helpful message to inform the user
 //          // that the provided file was not an adequate type
 //          return response()->json(['error' => $validator->errors()->getMessages()], 400);
 //    } else
 //    {
 //        // Store the File Now
 //        // read image from temporary file
 //        Image::make($file)->resize(300, 200)->save('foo.jpg');
 //    };
 // });
