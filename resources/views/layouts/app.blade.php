<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')">
        <meta name="token" content="{{ csrf_token() }}">
        <link rel="stylesheet" type="text/css" href="{{ asset(mix('dist/css/app.css')) }}">
        <script src="{{ asset(mix('dist/js/app.js')) }}"></script>
    </head>
    <body>
        @include('partials.app.nav')
        @yield('content')
        @include('partials.app.footer')
    </body>    
</html>