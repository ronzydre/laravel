<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Carbon\Carbon;


class CommentController extends Controller
{
    public function store(Post $post )
    {
        $this->validate(request(),['body' => 'required|min:2|max:500', 'name' => 'max:14']);
       $post-> addComment(request('body'), request('name'));
    return back();
    }
}
