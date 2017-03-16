<div class="blog-post">
    <h2 class="blog-post-title">
        <a href="/posts/{{ $post->id }}">
            {{ $post->title }}
        </a>

    </h2>
    <img src="{{ asset('/uploads/images/'.$post->filename) }}" alt="no image found" width="150px" height="150px">
    <p class="blog-post-meta">
        {{ $post->user->name }} on
        {{ $post->created_at->toFormattedDateString() }}
    </p>


    <p>
        {{ $post->body }}
    </p>
</div><!-- /.blog-post -->