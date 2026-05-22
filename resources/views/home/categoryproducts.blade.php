@extends('frontbase')

@section('title', $category->title)

@section('content')

<div>

    <p>

        Home >

        Products >

        {{ $category->title }}

    </p>

    <h2>

        Category :

        {{ $category->title }}

    </h2>

</div>

<hr>

<div
style="
display:flex;
gap:30px;
flex-wrap:wrap;
justify-content:center;
margin-top:20px;
">

@if($products->count() > 0)

@foreach($products as $rs)

<div
style="
width:270px;
border:1px solid #ddd;
padding:15px;
border-radius:12px;
text-align:center;
">

@if($rs->images->first())

<img
src="{{ Storage::url($rs->images->first()->image) }}"
style="
width:100%;
height:360px;
object-fit:cover;
border-radius:10px;
"
alt="{{ $rs->title }}">

@else

<div
style="
height:360px;
display:flex;
align-items:center;
justify-content:center;
background:#f5f5f5;
border-radius:10px;
">

No Image

</div>

@endif

<h3>

<a href="{{ route(
'product',
[
'id'=>$rs->id
]
) }}">

{{ $rs->title }}

</a>

</h3>

<div>

${{ $rs->price }}

<s>

${{ $rs->price * 1.15 }}

</s>

</div>

</div>

@endforeach

@else

<h3>

No Products Found In This Category


</h3>

@endif

</div>

@endsection