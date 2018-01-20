<?php

namespace App\Http\Controllers;
use App\Tag;
use App\Post;
use Illuminate\Http\Request;

class TagController extends Controller
{
    //
    public function index (Tag $tag)
    {
       $s = Post::selectRaw('*')->orderBy('created_at', 'desc')->first();
       $foot = Post::select('*')
        ->from('posts')        
        ->orderBy('created_at')->limit(3)
        ->get();
       $posts = $tag-> posts;
       return view('post.index', compact('posts', 'foot'));
    }

}
