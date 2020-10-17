<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/link.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2 goHome">
                <p><a href="{{ route('main') }}"><- Домой</a></p>
            </div>
        </div>
        @yield('main-block')
    </div>
</body>
</html>