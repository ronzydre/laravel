<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class ContactController extends Controller
{
    //
    public function create()
    {
        $popular = Post::where('created_at', '>=', Carbon::now()->subMonth())->orderByRaw('rand()', 'desc')->limit(5)->get();        
        $foot = Post::select('*')
        ->from('posts')        
        ->orderBy('created_at')->limit(3)
        ->get();
        return view('post.contact', compact('foot', 'popular'));
    }
    
}
