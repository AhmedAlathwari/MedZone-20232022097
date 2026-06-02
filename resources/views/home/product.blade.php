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

@php
    $average = $data->comments->avg('rate');
@endphp

<div>
    Reviews: {{ $data->comments->count() }}

    |

    Average Rate:
    {{ number_format($average, 1) }}
</div>
<div>

@if($average >= 1)
★
@else
☆
@endif

@if($average >= 2)
★
@else
☆
@endif

@if($average >= 3)
★
@else
☆
@endif

@if($average >= 4)
★
@else
☆
@endif

@if($average >= 5)
★
@else
☆
@endif

</div>


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

<hr>

<form action="{{ route('userpanel.addcart') }}" method="POST">
    @csrf

    <input
        type="hidden"
        name="product_id"
        value="{{ $data->id }}">

    <label>Quantity</label>

    <input
        type="number"
        name="quantity"
        value="1"
        min="1">

    <button type="submit">
        Add To Cart
    </button>

</form>

</div>

</div>

<hr>

<h3>Write Your Review</h3>

@if(Auth::check())

<form action="{{ route('storecomment') }}" method="POST">

    @csrf

    <input
        type="hidden"
        name="product_id"
        value="{{ $data->id }}">

    <div>
        <label>Subject</label>
        <input
            type="text"
            name="subject"
            required>
    </div>

    <div>
        <label>Review</label>
        <textarea
            name="review"
            required></textarea>
    </div>

    <div>
        <label>Rate</label>
        <select name="rate" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
    </div>

    <button type="submit">
        Submit Review
    </button>

</form>

@else

<p>
    Please login to add your review.
    <a href="{{ route('login') }}">Login</a>
</p>

@endif

<hr>

<h3>Product Reviews</h3>

@foreach($comments as $rs)

<div>
    <strong>{{ $rs->user->name }}</strong>

    <p>
        Rate: {{ $rs->rate }}
    </p>

    <h4>{{ $rs->subject }}</h4>

    <p>{{ $rs->review }}</p>

    <small>{{ $rs->created_at }}</small>
</div>

<hr>

@endforeach






@endsection