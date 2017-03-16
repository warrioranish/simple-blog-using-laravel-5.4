@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1> {{ $post->title }}</h1>

        <img src="{{ asset('/uploads/images/'.$post->filename) }}" alt="no image found" height="150px" width="150px">
        <br>
        {{ $post->body }}

        <hr>

        <div class="comments">
            <ul class="list-group">
                @foreach($post->comments as $comment)
                    <li class="list-group-item">
                        <strong>
                            {{ $comment->user->name }}
                            {{ $comment->created_at->diffForHumans() }}:&nbsp
                        </strong>

                        {{ $comment->body }}

                    </li>
                @endforeach
            </ul>
        </div>
        <br>
        @if(Auth::check() && Auth::id()==$post->user_id)
            <a href="/posts/edit/{{ $post->id }}"><button class="btn btn-primary pull-right">Edit</button></a>
            <a href="/delete/{{ $post->id }}"><button class="btn btn-danger">del</button></a>
        @endif
        @if(Auth::check())
            <div class="card">
                <div class="card-block">
                    <form method="POST" action="/posts/{{ $post->id }}/comments">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <textarea name="body" placeholder="Your comment here" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add Comment</button>
                        </div>
                    </form>
                </div>
            </div>
        @endif

        <div>
            @include('layouts.errors')
        </div>

    </div>



@endsection