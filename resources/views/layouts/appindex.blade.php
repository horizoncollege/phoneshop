<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intitial-scale=1.0">
    <title>Phone shop</title>
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
</head>
<body>
<div class="container d-flex h-auto justify-content-center align-items-center flex-column">
    @yield('content')
</div>
<script src="{{ asset('js/app.js')}} " defer></script>
</body>
</html>
