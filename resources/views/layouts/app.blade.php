<html>
    <head>
        <title>App Name - @yield('title')</title>
        
        

         <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">

         <!-- <link href="{{('css/customstyle.css')}}" rel="stylesheet"> -->

         <script src="{{asset('js/bootstrap.js')}}"></script>
    </head>
    <body>
        
       

        <div>
            @yield('content')
        </div>
    </body>
</html>