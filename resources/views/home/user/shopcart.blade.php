@extends('frontbase')

@section('title','Shop Cart')

@section('content')

@php
$total = 0;
@endphp

<section class="cart-section">

    <div class="container">

        <div class="cart-layout">

            <div class="cart-menu-card">

                @include('home.user.user_menu')

            </div>

            <div class="cart-card">

                <h1>Shopping Cart</h1>

                <p class="cart-subtitle">
                    Review your selected medicines before checkout.
                </p>

                <div class="cart-items">

                    @foreach($data as $rs)

                    @php
                    $subtotal = ($rs->product->price ?? 0) * $rs->quantity;
                    $total += $subtotal;
                    @endphp

                    <div class="cart-item">

                        <div class="cart-product">

                            @if($rs->product && $rs->product->images->first())

                            <img
                                src="{{ Storage::url($rs->product->images->first()->image) }}"
                                class="cart-product-image"
                                alt="{{ $rs->product->title }}">

                            @endif

                            <div class="cart-item-info">

                                <h3>
                                    {{ $rs->product->title ?? '' }}
                                </h3>

                                <p>
                                    Price: ${{ $rs->product->price ?? 0 }}
                                </p>

                            </div>

                        </div>

                        <form
                            action="{{ route('shopcartupdate', ['id' => $rs->id]) }}"
                            method="POST"
                            class="cart-update-form">

                            @csrf

                            <input
                                type="number"
                                name="quantity"
                                value="{{ $rs->quantity }}"
                                min="1">

                            <button type="submit">
                                Update
                            </button>

                        </form>

                        <div class="cart-item-total">
                            ${{ $subtotal }}
                        </div>

                        <a
                            class="cart-delete"
                            href="{{ route('shopcartdelete', ['id' => $rs->id]) }}"
                            onclick="return confirm('Are you sure?')">

                            Delete

                        </a>

                    </div>

                    @endforeach

                </div>

                <div class="cart-summary">

                    <div>
                        <span>Grand Total</span>
                        <strong>${{ $total }}</strong>
                    </div>

                    <a href="/userpanel/order" class="checkout-btn">
                        Continue Checkout
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection