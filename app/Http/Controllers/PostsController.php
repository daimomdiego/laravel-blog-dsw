<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\User;

class PostsController extends Controller
{
    public function index(Request $request){
    	$posts = Post::all();
        $comments = Comment::all();
        $user = User::find($request->user);
        
    	return view('posts', compact(['posts', 'comments', 'user']));
    }

    public function create(Request $request){
    	$post = new Post;

    	$post->title = $request->title;
    	$post->text = $request->text;
    	$post->image = $request->image;

    	$post->save();

    	return redirect()->back();
    }

    public function delete($id){
        $post = Post::find($id);
        $post->delete();
        return redirect()->back();
    }

    public function update(Request $request, $id){
        $post = Post::find($id);

        $post->title = $request->title;
        $post->texto = $request->texto;
        $post->image = $request->image;

        $post->save();

        return redirect()->back();
    }

    public function renderCreateView(){
        return view('create_post');
    }
}
