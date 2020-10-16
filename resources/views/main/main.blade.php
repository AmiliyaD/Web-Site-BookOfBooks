<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
<link rel="stylesheet" href="{{ asset('css/link.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    <title>@yield('title')</title>
</head>
<body>
  
<div class="container">
    {{-- header --}}
 
        @include('blocks.header')


{{-- main --}}
@yield('main-block')
<footer class="autors">

    @include('blocks.footer')
</footer>

</div>
</body>
</html>