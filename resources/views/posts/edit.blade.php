@extends('layouts.master')

@section('content')

    <div class="col-sm-8 blog-main">
        <h1>Edit a Post</h1>

        <hr>

        <form method="POST" action="/posts/update/{{ $id->id }}">

            {{ csrf_field() }}
            {{ method_field('PATCH') }}
                
            <div class="form-group">
                <label for="title">title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $id->title }}">
            </div>

            <div class="form-group">
                <label for="body">body</label>
                <textarea name="body" id="body" class="form-control">{{ $id->body }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Publish</button>

            @include('layouts.errors')
        </form>

    </div>

@endsection