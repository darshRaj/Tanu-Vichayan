<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use App\User;
use App\Post;
use App\Like;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('/pages.vichayan-dashboard')->withPosts($user->post_id);
    }

    public function create()
    {
        return view('posts.create');
    }


    public function store(Request $request)
    {
        
        $request->validate([
            'post' => 'required',
            'post_type' => 'required'
        ]);

        if($request->hasFile('post_photo'))
        {
            $file_with_extension = $request->file('post_photo')->getClientOriginalName();
            $filename = pathinfo($file_with_extension, PATHINFO_FILENAME);
            $file_extension = $request->file('post_photo')->getClientOriginalExtension();
            $filename_to_store = $filename . '_' . time() . '.' . $file_extension;
            $path = $request->file('post_photo')->storeAs('public/img', $filename_to_store);
        }
        else{
            $filename_to_store = 'preview.jpg';
        }
        
        $data = new Post();
        $data->post = $request->post;
        $data->post_type = $request->post_type;
        $data->post_photo = $filename_to_store;
        $data->user_id = auth()->user()->id;
        $data->save();

        Session::flash('success', 'Post updated successfully.');
        return redirect()->Back()->with('success','Posts created successfully.');
    }


public static function postshow()
   {     
      $post = DB::table('users') 
            ->join('posts', 'users.id', '=', 'posts.user_id') 
            ->select('users.id','users.firstname','users.lastname','posts.post','posts.post_type','posts.created_at')
            ->OrderBy('posts.created_at','desc') 
            ->get();            
            return $post;
            //return view('pages.statuspageshow',['post'=>$post]); 
            
   }
   /*public function tabledata()
   {
      $data = DB::table('users') 
                  ->join('statuses', 'users.id', '=', 'statuses.user_id') 
                  ->select('users.*', 'statuses.status_id','statuses.user_id','statuses.post','statuses.show_status') 
                  ->get(); 
               
                  return view('pages.table',['data'=>$data]);
   }*/
   

  


 /*  public static function index()
   {
         $user_id = auth()->user()->id;
         $user = User::find($user_id);
        
         $post = Status::orderBy('created_at', 'desc')->get();
         return view('pages.statuspageshow', ['post' => $post]);
    }

   public function postLikePost(Request $request)
       {
           $status_id = $request['status_id'];
           $is_like = $request['isLike'] === 'true';
           $update = false;
           $post = Status::find($status_id);
           if (!$post) {
               return null;
           }
           $user = Auth::user();
           $like = $user->likes()->where('status_id', $status_id)->first();
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
           $like->status_id = $post->status_id;
           if ($update) {
               $like->update();
           } else {
               $like->save();
           }
           return null;
       }*/
}
