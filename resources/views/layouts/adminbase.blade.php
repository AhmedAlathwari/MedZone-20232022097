<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">

<title>@yield('title')</title>

<link rel="stylesheet"
href="{{ asset('assets/admin/plugins/fontawesome-free/css/all.min.css') }}">

<link rel="stylesheet"
href="{{ asset('assets/admin/dist/css/adminlte.min.css') }}">

@yield('head')

</head>

<body class="hold-transition sidebar-mini">

<div class="wrapper">

@include('admin.header')

@include('admin.sidebar')

<div class="content-wrapper">

<section class="content">

<div class="container-fluid">

@yield('content')

</div>

</section>

</div>

@include('admin.footer')

</div>

<script src="{{ asset('assets/admin/plugins/jquery/jquery.min.js') }}"></script>

<script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('assets/admin/dist/js/adminlte.min.js') }}"></script>

</body>

</html>