<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>App Name - @yield('title')</title>
    <meta name="theme-color" content="#100f0f">
    <meta property="og:type" content="article">
    <meta name="twitter:card" content="summary">
    <meta name="Description" content="tips for laravel ">
    <meta name="Keywords" content="learn php laravel">
    <meta name="Author" content="Himanshu Nishad">
    <meta property="og:title" content="laravel-class">
    <meta name="twitter:description" content="write desc">
    <meta name="description" content="write description here">
    
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&amp;display=swap">
    

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-gray-400">
    @include('layouts.nav')
<main>
    <div>
        @yield('content')
    </div>
</main>
    

<!-- <script src="{{ mix('js/app.js') }}" defer></script> -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</body>
</html>
