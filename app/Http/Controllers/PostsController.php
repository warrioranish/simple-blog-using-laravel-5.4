<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{

    public function __construct(){

        $this->middleware('auth')->except('index', 'show');

    }

    public function index() {
        $posts = Post::latest()
            ->filter(request(['month','year']))
            ->paginate(4);

        $archives = Post::archives();


        return view('posts.index', compact('posts', 'archives'));
    }

    public function show(Post $post) {


        return view('posts.show', compact('post'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(request $request) {

        $this->validate(request(), [
            'title'=> 'required',
            'body'=> 'required|min:10'
        ]);



        if ($request->hasfile('image')) {
            if ($request->file('image')->isvalid()){
                $file = $request->file('image');
                $filename = $file->getClientOriginalName();
                $destination_path = public_path().'/uploads/images';
                $file->move($destination_path, $filename);
            }
        }

        $post = new Post;
        $post->title = request('title');
        $post->body = request('body');
        $post->filename = $filename;

        auth()->user()->publish($post);

//        Post::create([
//            'title'=> request('title'),
//            'body'=> request('body'),
//            'user_id'=> auth()->id()
//        ]);

        return redirect('/');
    }

    public function edit(Post $id) {

        return view('posts.edit', compact('id'));

    }

    public function update(Request $r, Post $id) {

        $input = $r->all();

        $id->update($input);

        return redirect('/');

    }

    public function delete(Post $id) {

        $id->delete();

        return redirect('/');

    }


}
