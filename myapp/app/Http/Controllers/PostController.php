<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function deletepost (Post $post){
        $post->delete();
        return redirect ('/');
    }
    public function actuallyupdatepost (Request $request, Post $post){
        $incomingFields = $request->validate ([
            'title' => 'required',
            'body' => 'required',
        ]);
        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        $post->update($incomingFields);
        return redirect ('/');
    }
    public function showeditscreen (Post $post){
        return view ('edit-post', ['post'=> $post]);
    }
    public function createPost (Request $request){
        $incomingFields = $request->validate ([
            'title' => 'required',
            'body' => 'required',
        ]);
        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        $incomingFields['user_id'] = auth()->id();
        Post::create($incomingFields);
        return redirect ('/');
    }
}