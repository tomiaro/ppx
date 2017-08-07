<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xxxx</title>  
    <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,400italic">
    <link rel="stylesheet" href="{{URL::asset('css/user.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/Features-Boxed.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/Highlight-Clean.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/untitled.css')}}">
</head>

<body>
    @yield('content') 

    <script src="{{URL::asset('js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/cpc.js')}}"></script>
</body>

</html>