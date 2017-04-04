@extends('layouts.master')

@section('content')

    <div class="col-sm-8 blog-main">
        <h1>Publish a Post</h1>

        <hr>

        <form method="POST" action="/posts" enctype="multipart/form-data">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <div class="form-group">
                <label for="body">body</label>
                <textarea name="body" id="body" class="form-control" required></textarea>
            </div>
            
            <div class="form-group">
                <label for="image">Upload image</label>
                <input type="file" name="image" required>
            </div>

            <button type="submit" class="btn btn-primary">Publish</button>

            @include('layouts.errors')
        </form>

    </div>


@endsection