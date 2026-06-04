@extends('frontbase')

@section('title','MedZone Home')

@section('slider')

@include('home.slider')

@endsection

@section('content')

<section class="products-section" id="products">

    <div class="container">

        <div class="section-heading">

            <h1>
                Featured Medicines
            </h1>

            <p>
                Popular and trusted healthcare products chosen for your needs.
            </p>

        </div>

        <div class="products-grid">

            @foreach($productlist1 as $rs)

            <div class="product-card">

                @if($rs->images->first())

                <a href="{{ route('product',['id'=>$rs->id]) }}">

                    <img
                        src="{{ Storage::url($rs->images->first()->image) }}"
                        class="product-image"
                        alt="{{ $rs->title }}">

                </a>

                @else

                <a href="{{ route('product',['id'=>$rs->id]) }}">

                    <div class="product-no-image">
                        No Image
                    </div>

                </a>

                @endif

                <div class="product-content">

                    <div class="product-category">
                        Medicine
                    </div>

                    <h3 class="product-title">

                        <a href="{{ route('product',['id'=>$rs->id]) }}">
                            {{ $rs->title }}
                        </a>

                    </h3>

                    @php
                    $average = $rs->comments->avg('rate');
                    @endphp

                    <div class="product-rating">

                        @if($average >= 1) ★ @else ☆ @endif
                        @if($average >= 2) ★ @else ☆ @endif
                        @if($average >= 3) ★ @else ☆ @endif
                        @if($average >= 4) ★ @else ☆ @endif
                        @if($average >= 5) ★ @else ☆ @endif

                        <span>
                            {{ $rs->comments->count() }} Reviews
                        </span>

                    </div>

                    <div class="product-price">

                        <span class="price-current">
                            ${{ $rs->price }}
                        </span>

                        <span class="price-old">
                            ${{ number_format($rs->price * 1.15, 2) }}
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

                        <button
                            type="submit"
                            class="add-cart-btn">

                            Add To Cart

                        </button>

                    </form>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>
<section class="why-section">

    <div class="container">

        <div class="section-heading">

            <h1>
                Why Choose MedZone?
            </h1>

            <p>
                We provide a safe and reliable online pharmacy shopping experience.
            </p>

        </div>

        <div class="why-grid">

            <div class="why-card">
                <div class="why-icon">🛡️</div>
                <h3>Verified Quality</h3>
                <p>Every product is checked and trusted before delivery.</p>
            </div>

            <div class="why-card">
                <div class="why-icon">🚚</div>
                <h3>Safe Delivery</h3>
                <p>Fast and secure delivery for your pharmacy products.</p>
            </div>

            <div class="why-card">
                <div class="why-icon">💬</div>
                <h3>24/7 Support</h3>
                <p>Our support team is ready to help you anytime.</p>
            </div>

        </div>

    </div>

</section>

<section class="help-section">

    <div class="container">

        <h2>
            Need Help Finding the Right Medicine?
        </h2>

        <p>
            Our licensed pharmacists are available 24/7
            to answer your questions and provide expert guidance.
        </p>

        <a href="/contact" class="help-btn">
            Talk to a Pharmacist
        </a>

    </div>

</section>

@endsection