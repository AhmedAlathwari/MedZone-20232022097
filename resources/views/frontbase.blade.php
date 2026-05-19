<!DOCTYPE html>

<html>

<head>

<title>
@yield('title')
</title>

<link rel="stylesheet"
href="{{ asset('assets/css/style.css') }}">

@yield('head')

</head>

<body>

@include('home.header')

@include('home.sidebar')

@yield('slider')

@yield('content')

@include('home.footer')

<script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>