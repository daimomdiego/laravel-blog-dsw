<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{

    public function create(Request $request){
    	$comment = new Comment;

    	$comment->comment = $request->comment;
    	$comment->post = $request->post;
        $comment->user = $request->user;

    	$comment->save();

    	return redirect()->back();
    }

    public function delete($id){
        $comment = Comment::find($id);
        $comment->delete();
        return redirect()->back();
    }

    public function update(Request $request, $id){
        $comment = Comment::find($id);

        $comment->comment = $request->comment;

        $comment->save();

        return redirect()->back();
    }
}
