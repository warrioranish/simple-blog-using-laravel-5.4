@extends('layouts.master')

@section('content')

    <div class="col-md-8">
        <h1>Contact Us</h1>

        <form method="POST" action="/contactus">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Full name"required>
            </div>

            <div class="form-group">
                <label for="name">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Johndoe@example.com" required>
            </div>

            <div class="form-group">
                <label for="message">Message:</label>
                <textarea name="message" id="" cols="30" rows="10" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Send</button>
            </div>

        </form>
    </div>

@endsection