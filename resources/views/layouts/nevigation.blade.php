<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lists</title>

    <!--bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <style>
        #navbar{
            color: #FFFFFF;
            background-color: #757575 !important;
        }
        .p-2{
            color: #FFFFFF !important;
            text-decoration: none;
        }
        .p-2:hover{
            color: #D32F2F !important;
            text-decoration: none;
        }
    </style>

</head>
<body>

        <div id="navbar" class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
            <h5 class="my-0 mr-md-auto font-weight-normal">
                The Ant Corporation
            </h5>
            <nav class="my-2 my-md-0 mr-md-3">
                <a class="p-2 text-dark" href="{{ url('/list') }}">List</a>
                <a class="p-2 text-dark" href="{{ url('/recent') }}">Recent List</a>
            <a class="p-2 text-dark" href="{{ url('/about') }}">About Us</a>
            </nav>
        </div>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>