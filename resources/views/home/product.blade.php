@extends('frontbase')

@section('title',$data->title)

@section('content')

<div
style="
display:flex;
gap:30px;
flex-wrap:wrap;
margin-top:30px;
">

<div>

@if($data->images->first())

<img
src="{{ Storage::url($data->images->first()->image) }}"
style="
width:400px;
height:400px;
object-fit:cover;
border-radius:10px;
"
alt="{{ $data->title }}">

@endif

<div
style="
display:flex;
gap:10px;
margin-top:15px;
flex-wrap:wrap;
">

@foreach($images as $rs)

<img
src="{{ Storage::url($rs->image) }}"
style="
width:80px;
height:80px;
object-fit:cover;
border-radius:8px;
"
alt="{{ $rs->title }}">

@endforeach

</div>

</div>

<div>

<h1>

{{ $data->title }}

</h1>

<h3>

${{ $data->price }}

<span
style="
text-decoration:line-through;
color:gray;
">

${{ $data->price * 1.20 }}

</span>

</h3>

<div>

{!! $data->detail !!}

</div>

</div>

</div>

@endsection