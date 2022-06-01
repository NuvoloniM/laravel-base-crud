<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
    <title>@yield('title')</title>
</head>
<body>
    @include('includes.header')

    @yield('content')

    {{-- implemento js bootstrap --}}
    <script src=" {{ asset('js/app.js') }} "></script>
     {{-- JS delete message --}}
     @yield('delete-message')
</body>
</html>