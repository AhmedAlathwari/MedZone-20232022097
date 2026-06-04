@extends('frontbase')

@section('title',$data->title)

@section('content')

<section class="product-detail-section">

    <div class="container product-detail-grid">

        <div class="product-gallery">

            @if($data->images->first())

            <img
                src="{{ Storage::url($data->images->first()->image) }}"
                class="product-main-image"
                alt="{{ $data->title }}">

            @else

            <div class="product-main-no-image">
                No Image
            </div>

            @endif

            <div class="product-thumbs">

                @foreach($images as $rs)

                <img
                    src="{{ Storage::url($rs->image) }}"
                    class="product-thumb"
                    alt="{{ $rs->title }}">

                @endforeach

            </div>

        </div>

        <div class="product-info">

            <div class="product-badge">
                Medicine
            </div>

            <h1>
                {{ $data->title }}
            </h1>

            @php
            $average = $data->comments->avg('rate');
            @endphp

            <div class="product-detail-rating">

                @if($average >= 1) ★ @else ☆ @endif
                @if($average >= 2) ★ @else ☆ @endif
                @if($average >= 3) ★ @else ☆ @endif
                @if($average >= 4) ★ @else ☆ @endif
                @if($average >= 5) ★ @else ☆ @endif

                <span>
                    {{ $data->comments->count() }} Reviews |
                    Average Rate: {{ number_format($average, 1) }}
                </span>

            </div>

            <div class="product-detail-price">

                <span class="detail-price-current">
                    ${{ $data->price }}
                </span>

                <span class="detail-price-old">
                    ${{ number_format($data->price * 1.20, 2) }}
                </span>

            </div>

            <div class="product-description">

                {!! $data->detail !!}

            </div>

            <form
                action="{{ route('userpanel.addcart') }}"
                method="POST"
                class="product-cart-form">

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

</section>

<section class="review-section">

    <div class="container review-grid">

        <div class="review-form-card">

            <h3>Write Your Review</h3>

            @if(Auth::check())

            <form action="{{ route('storecomment') }}" method="POST">

                @csrf

                <input
                    type="hidden"
                    name="product_id"
                    value="{{ $data->id }}">

                <label>Subject</label>
                <input
                    type="text"
                    name="subject"
                    required>

                <label>Review</label>
                <textarea
                    name="review"
                    required></textarea>

                <label>Rate</label>
                <select name="rate" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>

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

        </div>

        <div class="reviews-list-card">

            <h3>Product Reviews</h3>

            @if($comments->count() > 0)

            @foreach($comments as $rs)

            <div class="single-review">

                <strong>{{ $rs->user->name }}</strong>

                <p class="review-rate">
                    Rate: {{ $rs->rate }}
                </p>

                <h4>{{ $rs->subject }}</h4>

                <p>{{ $rs->review }}</p>

                <small>{{ $rs->created_at }}</small>

            </div>

            @endforeach

            @else

            <p>No reviews yet.</p>

            @endif

        </div>

    </div>

</section>

@endsection