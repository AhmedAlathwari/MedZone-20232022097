@extends('frontbase')

@section('title','Checkout')

@section('content')

@php
$total = 0;
@endphp

<section class="checkout-section">

    <div class="container">

        <div class="checkout-layout">

            <div class="cart-menu-card">

                @include('home.user.user_menu')

            </div>

            <div class="checkout-card">

                <h1>Checkout</h1>

                <p class="checkout-subtitle">
                    Complete your information to place the order.
                </p>

                <form
                    action="{{ route('userpanel.orderstore') }}"
                    method="POST"
                    class="checkout-form">

                    @csrf

                    <div class="checkout-fields">

                        <div>
                            <label>Name</label>
                            <input type="text" name="name">
                        </div>

                        <div>
                            <label>Surname</label>
                            <input type="text" name="surname">
                        </div>

                        <div>
                            <label>Email</label>
                            <input type="email" name="email">
                        </div>

                        <div>
                            <label>Phone</label>
                            <input type="text" name="phone">
                        </div>

                        <div class="full-field">
                            <label>Address</label>
                            <input type="text" name="address">
                        </div>

                    </div>

                    <button type="submit" class="complete-order-btn">
                        Complete Order
                    </button>

                </form>

            </div>

            <div class="checkout-summary-card">

                <h2>Order Summary</h2>

                @foreach($data as $rs)

                @php
                $subtotal = ($rs->product->price ?? 0) * $rs->quantity;
                $total += $subtotal;
                @endphp

                <div class="checkout-summary-item">

                    <div>
                        <strong>{{ $rs->product->title ?? '' }}</strong>
                        <p>Quantity: {{ $rs->quantity }}</p>
                    </div>

                    <span>
                        ${{ $subtotal }}
                    </span>

                </div>

                @endforeach

                <div class="checkout-total">

                    <span>Grand Total</span>

                    <strong>
                        ${{ $total }}
                    </strong>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection