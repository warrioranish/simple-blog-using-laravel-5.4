<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('assets/images/batman.png')}}">

    <title>I'm Batman</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
{{--facebook comment--}}
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

@include('layouts.nav')

<div class="blog-header">
    <div class="container">
        @if(Auth::check())
            <h1 class="blog-title">{{ Auth::user()->name }}</h1>
        @endif
        <p class="lead blog-description">An example blog </p>
    </div>
</div>

<div class="container">

    <div class="row">

        @yield('content')

        @include('layouts.sidebar')

    </div><!-- /.row -->

</div><!-- /.container -->

@include('layouts.footer')
</body>
</html>
