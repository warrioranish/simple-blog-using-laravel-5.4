<div class="offset-sm-2 col-sm-2  blog-sidebar">
    <div class="sidebar-module">
        <h4>Archives</h4>
        <ol class="list-unstyled">
            @foreach($archives as $stats)
                <li>
                    <a href="/?month={{$stats['month']}}&year={{$stats['year']}}">
                        {{ $stats['month'].' '.$stats['year'] }}
                    </a>
                </li>
            @endforeach

        </ol>
    </div>
</div><!-- /.blog-sidebar -->