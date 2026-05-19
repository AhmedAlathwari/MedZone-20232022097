<!DOCTYPE html>

<html>

<head>

<title>
@yield('title')
</title>

</head>

<body>

@include('home.header')

@include('home.sidebar')

@yield('slider')

@yield('content')

@include('home.footer')

</body>

</html>