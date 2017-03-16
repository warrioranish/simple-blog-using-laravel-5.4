<?php

namespace App\Http\Controllers;

use App\Post,
    App\Comment;

class CommentsController extends Controller
{
    public function store(Post $post) {

        $this->validate(request(), ['body' => 'required|min:5']);


        $post->addComment(request('body'), $post);

        return back();
    }
}
