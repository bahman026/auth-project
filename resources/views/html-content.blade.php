<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ mix('js/app.js') }}" crossorigin="anonymous"></script>
    <script src="{{ mix('js/auth.js') }}" crossorigin="anonymous"></script>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('css/base.css') }}" rel="stylesheet">
    <title>welcome</title>

</head>
<body>
@yield('content')
</body>
</html>
