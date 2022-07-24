<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Laravel-class</title>
    <meta name="theme-color" content="#100f0f">
    <meta name="twitter:description" content="write desc">
    <meta property="og:title" content="laravel-class">
    <meta name="description" content="write description">
    <meta name="Author" content="Himanshu Nishad">
    <meta name="Keywords" content="learn php laravel">
    <meta name="Description" content="tips for laravel ">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="manifest" href="{{('manifest.json')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&amp;display=swap">
    <link rel="stylesheet" href="{{asset('fonts/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.min.css')}}">
</head>

<body class="fw-light">
       
    @include('layouts.nav')
    <main class="main mt-2">
        <div class="container">
            <div class="row g-0">
                @yield('content')
            </div>
        </div>
    </main>
   <!--End main section-->
   <script src="{{asset('js/jquery.min.js')}}"></script>
   <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>

</html>