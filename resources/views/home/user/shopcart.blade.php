@extends('frontbase')

@section('title','Shop Cart')

@section('content')

@php
$total = 0;
@endphp

<div class="row">

    <div class="col-md-2">

        @include('home.user.user_menu')

    </div>

    <div class="col-md-10">

        <table border="1" width="100%">

            <tr>
                <th>ID</th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Delete</th>
            </tr>

            @foreach($data as $rs)

            @php
            $subtotal = ($rs->product->price ?? 0) * $rs->quantity;
            $total += $subtotal;
            @endphp

            <tr>
                <td>{{ $rs->id }}</td>

                <td>{{ $rs->product->title ?? '' }}</td>

                <td>{{ $rs->product->price ?? 0 }}</td>

                <td>
                    <form action="{{ route('shopcartupdate', ['id' => $rs->id]) }}"
                          method="POST">

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
                </td>

                <td>{{ $subtotal }}</td>

                <td>
                    <a
                        href="{{ route('shopcartdelete', ['id' => $rs->id]) }}"
                        onclick="return confirm('Are you sure?')">

                        Delete

                    </a>
                </td>
            </tr>

            @endforeach

            <tr>
                <td colspan="4">
                    <strong>Grand Total</strong>
                </td>

                <td>
                    <strong>{{ $total }}</strong>
                </td>

                <td></td>
            </tr>

        </table>

    </div>

</div>

@endsection