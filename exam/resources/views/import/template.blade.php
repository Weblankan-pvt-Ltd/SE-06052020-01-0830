<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>

<body>

    @yield('main-body')

</body>
<script language="JavaScript" type="text/javascript" src="{{url('/js/jquery.min.js')}}"></script>
<script language="JavaScript" type="text/javascript" src="{{url('/js/script.js')}}"></script>

</html>