<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title> {{env('APP_NAME')}} </title>
</head>
<body class="h-full">

@include('partials.nav')

<div class="min-h-full">
    @yield('main')
</div>
</body>
</html>
