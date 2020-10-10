<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\User;
use App\Post;
use App\Like;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class Likecontroller extends Controller
{
    public function index(){
            $user_id = auth()->user()->id;
            $user = User::find($user_id);
        
         $post = Post::orderBy('created_at', 'desc')
         ->select('posts.user_id')
         ->get();
         return view('pages.statuspageshow', ['post' => $post]);
          
      }
      public function postLikePost(Request $request)
         {
             $post_id = $request['postId'];
             $is_like = $request['isLike'] === 'true';
             $update = false;
             $post = Post::find($post_id);
             if (!$post) {
                 return null;
             }
             $user = Auth::user();
             $like = $user->likes()->where('post_id', $post_id)->first();
             if ($like) {
                 $already_like = $like->like;
                 $update = true;
                 if ($already_like == $is_like) {
                     $like->delete();
                     return null;
                 }
             } else {
                 $like = new Like();
             }
             $like->like = $is_like;
             $like->user_id = $user->id;
             $like->post_id = $post->id;
             if ($update) {
                 $like->update();
             } else {
                 $like->save();
             }
             return null;
         }
}
