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
    <script>
        $(document).ready(function(){
            $('.content_title').click(function(){
                var id = $(this).attr('id').replace('title_','');
                $('#content_'+id).fadeToggle(1500);
            });
            $('.grayscale_image').mouseenter(function(){
                $(this).css({"webkit-filter": "grayscale(0)", "filter":"grayscale(0)"});
            });
            $('.grayscale_image').mouseleave(function(){
                $(this).css({"webkit-filter": "grayscale(1)", "filter":"grayscale(1)"});
            });
        });
    </script>
@endsection