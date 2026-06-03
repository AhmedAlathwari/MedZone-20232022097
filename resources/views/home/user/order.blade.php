@extends('frontbase')

@section('title','Checkout')

@section('content')

<div class="row">

    <div class="col-md-2">

        @include('home.user.user_menu')

    </div>

    <div class="col-md-10">

        @php
        $total = 0;
        @endphp

        <h3>Cart Summary</h3>

        <table border="1" width="100%">

            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>

            @foreach($data as $rs)

            @php
            $subtotal = ($rs->product->price ?? 0) * $rs->quantity;
            $total += $subtotal;
            @endphp

            <tr>
                <td>{{ $rs->product->title ?? '' }}</td>
                <td>{{ $rs->product->price ?? 0 }}</td>
                <td>{{ $rs->quantity }}</td>
                <td>{{ $subtotal }}</td>
            </tr>

            @endforeach

            <tr>
                <td colspan="3">
                    <strong>Grand Total</strong>
                </td>

                <td>
                    <strong>{{ $total }}</strong>
                </td>
            </tr>

        </table>

        <hr>

        <form action="{{ route('userpanel.orderstore') }}"
              method="POST">

            @csrf

            <p>
                Name
                <input type="text" name="name">
            </p>

            <p>
                Surname
                <input type="text" name="surname">
            </p>

            <p>
                Email
                <input type="email" name="email">
            </p>

            <p>
                Phone
                <input type="text" name="phone">
            </p>

            <p>
                Address
                <input type="text" name="address">
            </p>

            <button type="submit">
                Complete Order
            </button>

        </form>

    </div>

</div>

@endsection