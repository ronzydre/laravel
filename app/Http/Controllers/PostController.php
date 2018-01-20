<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
class PostController extends Controller
{
    //
    public function __construct()
    {
        $this-> middleware('auth')->except(['index', 'show']);
    }
    public function index()
    {
        $s = Post::selectRaw('*')->orderBy('created_at', 'desc')->first();
        $popular = Post::where('created_at', '>=', Carbon::now()->subMonth())->orderByRaw('rand()', 'desc')->limit(5)->get();        
        if($_GET)
        {
        $posts = Post::latest()->limit(10)
        ->filter(request(['month', 'year']))
        ->get();
        }
        else{
        $posts = Post::latest()->take(10)->skip(1)
        ->filter(request(['month', 'year']))
        ->get();
        }
        
        
        // $posts = Post::latest();
        // if($month= request('month'))
        // {
        //     $posts->whereMonth('created_at', Carbon::parse($month)->month);
        // }
        // if($year= request('year'))
        // {
        //     $posts->whereYear('created_at', $year);
        // }

        // $posts= $posts->get();

        $foot = Post::select('*')
        ->from('posts')        
        ->orderBy('created_at', 'desc')->limit(3)
        ->get();
        return view('post.index', compact('posts', 's','popular', 'foot'));
    }

    public function create()
    {

        return view('post.create');
    }

    public function store(Request $request)
    {
        $this -> validate(request(),
            [
            'title' => 'required',
            'body' => 'required',
            'tags' => 'required',
            'image'=> 'required',
            'image_to' => 'required'
            ]
        );
    //  $cre = auth()->user()->publish(
    //     new Post(request(['title', 'body']))
    // );
    if($request->hasFile('image'))
    {
    $getImageName = $request->file('image')->getClientOriginalName();
    $request ->file('image')->move(public_path('/uploads'), $getImageName);
    }
      if($request->hasFile('image_to'))
    {
    $getImageName = $request->file('image_to')->getClientOriginalName();
    $request ->file('image_to')->move(public_path('/uploads'), $getImageName);
    }
    
      $ast_tag =  Post::create([
        'title'=> request('title'), 
        'body'=>request('body'), 
        'image'=> $request->file('image')->getClientOriginalName(),
        'image_to'=> $request->file('image_to')->getClientOriginalName(),
        'user_id'=> auth()->id()]
        );

        $post = $ast_tag;
        session()->flash('message', 'Your Post Has Been Published');
        $tag  = \App\Tag::where('name', request('tags'))->first();

        $post->tags()->attach($tag);

        return back();
    }
     public function show(Post $post)
    {
        // $archives = Post::archives();             
        $popular = Post::where('created_at', '>=', Carbon::now()->subMonth())->orderByRaw('rand()', 'desc')->limit(5)->get();        
                
        $foot = Post::select('*')
        ->from('posts')        
        ->orderBy('created_at', 'desc')->limit(3)
        ->get();        
        return view('post.show', compact('post','popular', 'foot'));
    }
    public function contact()
    {
        return view('post.contact');
    }
}