<!DOCTYPE html>

<html>

<head>

@php

$setting =
\App\Models\Setting::first();

@endphp

<title>
@yield('title')
</title>

@if($setting && $setting->icon)

<link
rel="icon"
type="image/png"
href="{{ Storage::url($setting->icon) }}">

@endif

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