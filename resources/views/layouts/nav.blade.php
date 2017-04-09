<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link" href="/">Home</a>
            <a class="nav-link" href="#">Categories</a>
            <a class="nav-link" href="#">About Us</a>
            <a class="nav-link" href="#">Contact Us</a>
            @if(Auth::check())
                    <a class="nav-link" href="/posts/create">Create</a>
                    <a class="nav-link ml-auto" href="#">{{ Auth::user()->name }}</a>
                    <a class="nav-link" href="/logout">logout</a>
            @else
                <!-- Button trigger modal -->
                <a class="nav-link ml-auto" href="/login" data-toggle="modal" data-target="#exampleModalLong">Login</a>

                    @include('registration.login')
                <a class="nav-link"href="/register">Register</a>
            @endif


        </nav>

    </div>
</div>