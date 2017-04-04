@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1> {{ $post->title }}</h1>
        <h3>asdlfafjal</h3>
        @if($post->filename)
            <img src="{{ asset('/uploads/images/'.$post->filename) }}" alt="no image found" height="150px" width="150px">
        @endif
        <br>
        {{ $post->body }}

        <hr>
        @if(Auth::check() && Auth::id()==$post->user_id)
            <div class="pull-right">
                <button class="action">Action</button>
                <div class="action_btns" style="display:none;">
                    <a href="/posts/edit/{{ $post->id }}"><button class="btn btn-primary pull-right">Edit</button></a>
                    <a href="/delete/{{ $post->id }}"><button class="btn btn-danger">del</button></a>
                </div>
            </div>
        @endif
        <br>
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
        @else
            <div class="fb-comments" data-href="http://127.0.0.1:8000/posts/{post}" data-width="700px"></div>
        @endif

        <div>
            @include('layouts.errors')
        </div>

    </div>

    <script>
        $(document).ready(function(){
           $('.action').click(function(){
               $('.action_btns').toggle();
           });
        });
    </script>

@endsection