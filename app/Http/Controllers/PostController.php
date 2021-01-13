<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index ()
    {
        $posts = Post::orderBy('created_at','desc')->with(['user','likes'])->paginate(4);
        return view('posts.index',[
            'posts'=>$posts
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show',[
            'post'=>$post
        ]);
    }

    public function store(Request $request)
    {
        if(!auth()->user())
        {
            return redirect()->route('login');
        }else
        {
        $this->validate($request,[
            'body'=>'required'
        ]);

        $request->user()->posts()->create([

            'body'=>$request->body
        ]);

        return back();
    }
    }

    public function delete(Post $post)
    {
        $this->authorize('delete',$post);
        $post->delete();

        return back();
    }
}
