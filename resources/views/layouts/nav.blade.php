<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="/">Home</a>
            <a class="nav-link" href="/posts/create">Create</a>
            @if(Auth::check())
                    <a class="nav-link ml-auto" href="#">{{ Auth::user()->name }}</a>
                    <a class="nav-link" href="/logout">logout</a>
            @else
                <!-- Button trigger modal -->
                <p class="nav-link ml-auto" data-toggle="modal" data-target="#exampleModalLong">Login</p>


                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Sign In</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="col-md-8">

                                    <form method="POST" action="/login">

                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="email">Email Address:</label>
                                            <input type="email" class="form-control" id="email" name="email" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="password">password:</label>
                                            <input type="password" class="form-control" id="password" name="password" required>
                                        </div>

                                        <div class="form-group">
                                            <button class="btn btn-primary">login</button>
                                        </div>
                                    </form>

                                    <div>
                                        @include('layouts.errors')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="nav-link"href="/register">Register</a>
            @endif


        </nav>

    </div>
</div>