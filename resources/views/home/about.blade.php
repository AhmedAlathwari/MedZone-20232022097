@extends('frontbase')

@section(
'title',
'About Us - '
.
$setting->title
)

@section('content')

<div
style="
margin-top:40px;
padding:20px;
">

<h1>

About Us

</h1>

<hr>

<div>

{!! $setting->about_us !!}

</div>

</div>

@endsection