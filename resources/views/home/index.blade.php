@extends('frontbase')

@section('title','MedZone Home')

@section('slider')

@include('home.slider')

@endsection

@section('content')

<h1>Welcome To MedZone</h1>

<p>Online Pharmacy Store</p>

<h2>Featured Products</h2>

<div
style="
display:flex;
gap:20px;
flex-wrap:wrap;
justify-content:center;
margin-top:20px;
">

@foreach($productlist1 as $rs)

<div
style="
width:270px;
border:1px solid #ddd;
padding:15px;
border-radius:10px;
text-align:center;
">

@if($rs->images->first())

<img
src="{{ Storage::url($rs->images->first()->image) }}"
style="
width:270px;
height:360px;
object-fit:cover;
border-radius:10px;
"
alt="{{ $rs->title }}">

@else

<div
style="
width:270px;
height:360px;
background:#f5f5f5;
display:flex;
align-items:center;
justify-content:center;
border-radius:10px;
">

No Image

</div>

@endif

<h3>
{{ $rs->title }}
</h3>

@php
    $average = $rs->comments->avg('rate');
@endphp

<div>
    Reviews: {{ $rs->comments->count() }}
    |
    Average Rate: {{ number_format($average, 1) }}
</div>

<div>
@if($average >= 1) ★ @else ☆ @endif
@if($average >= 2) ★ @else ☆ @endif
@if($average >= 3) ★ @else ☆ @endif
@if($average >= 4) ★ @else ☆ @endif
@if($average >= 5) ★ @else ☆ @endif
</div>

<div>

<span>
${{ $rs->price }}
</span>

&nbsp;

<span
style="
text-decoration:line-through;
color:gray;
">

${{ $rs->price * 1.15 }}

</span>

</div>

<form action="{{ route('userpanel.addcart') }}" method="POST">

    @csrf

    <input
        type="hidden"
        name="product_id"
        value="{{ $rs->id }}">

    <input
        type="hidden"
        name="quantity"
        value="1">

    <button type="submit">
        Add To Cart
    </button>

</form>

</div>

@endforeach

</div>

@endsection