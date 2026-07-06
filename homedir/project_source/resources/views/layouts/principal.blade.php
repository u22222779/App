<!DOCTYPE html>
<html>
    <head>
        <title>@yield('titulo','Titulo por defecto')</title>

        <meta charset="utf-8">        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="{{ asset('/assets/img/favicon.png') }}" type="image/x-icon">
        <link rel="stylesheet" href=" {{ asset('/assets/css/bootstrap.min.css') }} ">
        <link rel="stylesheet" href=" {{ asset('/assets/css/main.css') }} ">
        <!--<link rel="stylesheet" href=" {{ asset('/assets/fonts/social/main.css') }} ">-->
        <link rel="stylesheet" href=" {{ asset('/assets/font-awesome/css/font-awesome.min.css') }} ">
    </head>

    <body>   
    
        @section('header')
        @show
        
        @section('nav')
        @show
        <div class="" style="background-color:#fff; height: 10px;"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    @yield('content')
                </div>
            </div>
        </div>

        @section('footer')
        @show

    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery-1.11.0.min.js') }}" ></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" ></script>
    <script src="{{ asset('assets/js/facebook.js') }}" ></script>
    <script src="{{ asset('assets/js/main.js') }}" ></script>

    </body>
</html>