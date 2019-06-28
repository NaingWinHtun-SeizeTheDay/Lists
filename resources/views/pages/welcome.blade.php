<!doctype html>
<html>
    <head>
        <meta charset="utf-8">

        <title>Lists</title>

        <!--bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <!--css-->
        <link rel="stylesheet" href="css/welcome.css"/>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Lists
                </div>

                <div class="links">
                <a href="{{ url('/list') }}">Lists</a>
                <a href="{{ url('/recent') }}">Recent Lists</a>
                <a href="{{ url('/about') }}">About Us</a>
                </div>
            </div>

        </div>
    </body>
</html>
