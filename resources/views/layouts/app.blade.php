<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intitial-scale=1.0">
    <title>Phone shop</title>
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
</head>
<body>
    <div class="container d-flex h-100 justify-content-center align-items-center">
        <div class="container m-1">
            <div class="row">
                <div class="col-xs-12 col-sm-6 offset-sm-3 col-md-6 offset-md-3">

                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link btn-primary" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-primary" href="telefoons">Add Phone</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        @yield('content')
    </div>
    <script src="{{ asset('js/app.js')}} " defer></script>
</body>
</html>
