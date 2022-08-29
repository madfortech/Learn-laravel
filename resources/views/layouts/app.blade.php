<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="theme-color" content="#100f0f">
    <meta property="og:type" content="article">
    <meta name="twitter:card" content="summary">
    <meta name="Description" content="tips for laravel ">
    <meta name="Keywords" content="learn php laravel">
    <meta name="Author" content="Himanshu Nishad">
    <meta name="description" content="write description">
    <meta property="og:title" content="laravel-class">
    <meta name="twitter:description" content="write desc">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="manifest" href="{{asset('manifest.json')}}">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&amp;display=swap">
    <!-- Fonts Awesome -->
    <link rel="stylesheet" href="{{asset('fonts/fontawesome-all.min.css')}}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/styles.min.css')}}">
</head>
<body  style="font-family: 'Open Sans', sans-serif;">
    
@include('layouts.nav')
<main class="main mt-2">
    <div class="container">
        @yield('content')
    </div>
</main>
    
    <script src="{('asset/js/jquery.min.js')}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
</body>
</html>
