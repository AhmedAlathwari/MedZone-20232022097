@extends('frontbase')

@section('title','Order Detail')

@section('content')

<style>
    .order-detail-box {
        max-width: 1000px;
        margin: 40px auto;
        background: #ffffff;
        padding: 30px;
        border-radius: 18px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
    }

    .order-detail-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
    }

    .order-detail-header h2 {
        color: #0f172a;
        margin: 0;
    }

    .back-btn {
        background: #ecfdf5;
        color: #0f9d6c;
        padding: 10px 16px;
        border-radius: 10px;
        text-decoration: none;
        font-weight: 700;
    }

    .order-info {
        margin-bottom: 25px;
        color: #334155;
    }

    .order-table {
        width: 100%;
        border-collapse: collapse;
    }

    .order-table th,
    .order-table td {
        padding: 14px;
        border-bottom: 1px solid #e5e7eb;
        text-align: left;
    }

    .total-box {
        margin-top: 25px;
        text-align: right;
        font-size: 20px;
        font-weight: 800;
        color: #0f9d6c;
    }
</style>

<div class="order-detail-box">

    <div class="order-detail-header">
        <h2>Order Detail</h2>

        <a class="back-btn" href="{{ route('userpanel.orders') }}">
            Back To Orders
        </a>
    </div>

    <div class="order-info">
        <strong>Order ID:</strong> #{{ $order->id }} <br>
        <strong>Date:</strong> {{ $order->created_at->format('Y-m-d') }} <br>
        <strong>Status:</strong> {{ ucfirst($order->status) }}
    </div>

    <table class="order-table">

        <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Amount</th>
            </tr>
        </thead>

        <tbody>

            @foreach($order->orderProducts as $item)

            <tr>
                <td>{{ $item->product->title }}</td>
                <td>{{ $item->quantity }}</td>
                <td>${{ $item->price }}</td>
                <td>${{ $item->amount }}</td>
            </tr>

            @endforeach

        </tbody>

    </table>

    <div class="total-box">
        Total: ${{ $order->total }}
    </div>

</div>

@endsection