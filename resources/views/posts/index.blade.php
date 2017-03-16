@extends('layouts.master')

@section('content')


    <div class="col-sm-8 blog-main">

        @foreach($posts as $post)
            @include('posts.post')
        @endforeach



        <nav class="blog-pagination">
            {{ $posts->links('layouts.pagination') }}
        </nav>

    </div><!-- /.blog-main -->
@endsection