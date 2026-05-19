<!DOCTYPE html>

<html>

<head>

<title>
@yield('title')
</title>

</head>

<body>

@include('admin.header')

@include('admin.sidebar')

<div>

@yield('content')

</div>

@include('admin.footer')

</body>

</html>