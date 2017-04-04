<div class="blog-post">
    <h2 class="blog-post-title">
        <p class="content_title" id="title_{{ $post->id }}">
          {{ $post->title }}
        </p>
    </h2>
    <hr>
    <p class="blog-post-meta">
        {{ $post->user->name }} on
        {{ $post->created_at->toFormattedDateString() }}
    </p>
    <div id="content_{{ $post->id }}" style="display: none;">
        <img src="{{ asset('/uploads/images/'.$post->filename) }}" alt="no image found" width="150px" height="150px">
        <p>
            {{ $post->body }}
        </p>
        <em>
            <a href="/posts/{{ $post->id }}">
                see more
            </a>
        </em>

    </div>
</div><!-- /.blog-post -->

