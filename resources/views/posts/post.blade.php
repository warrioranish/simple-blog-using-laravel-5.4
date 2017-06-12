<div class="blog-post">
    <h2 class="blog-post-title">
        <a href="javascript:void(0)" class="content_title" id="title_{{ $post->id }}">
          {{ $post->title }}
        </a>
    </h2>
    <hr>
    <p class="blog-post-meta">
        {{ $post->user->name }} on
        {{ $post->created_at->toFormattedDateString() }}
    </p>
    <div id="content_{{ $post->id }}" style="display: none;">
        <img class="grayscale_image" src="{{ asset('/uploads/images/'.$post->filename) }}" style="webkit-filter: grayscale(1); filter:grayscale(1)" alt="no image found" width="150px" height="150px">
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

