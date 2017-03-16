@extends('layouts.master')

@section('content')
    <div class="col-md-8">
        <h1>sign in </h1>

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
@endsection