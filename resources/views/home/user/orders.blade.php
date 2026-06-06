@extends('frontbase')

@section('title','My Orders')

@section('content')

<style>
    .orders-box {
        max-width: 1000px;
        margin: 40px auto;
        background: #ffffff;
        padding: 30px;
        border-radius: 18px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
    }

    .orders-box h2 {
        color: #0f172a;
        margin-bottom: 25px;
    }

    .orders-table {
        width: 100%;
        border-collapse: collapse;
    }

    .orders-table th,
    .orders-table td {
        padding: 14px;
        border-bottom: 1px solid #e5e7eb;
        text-align: left;
    }

    .status-new {
        background: #ecfdf5;
        color: #0f9d6c;
        padding: 6px 14px;
        border-radius: 999px;
        font-size: 13px;
        font-weight: 600;
        display: inline-block;
    }
</style>

<div class="orders-box">

    <h2>My Orders</h2>

    <table class="orders-table">

        <thead>
            <tr>
                <th>ID</th>
                <th>Total</th>
                <th>Status</th>
                <th>Date</th>
            </tr>
        </thead>

        <tbody>

            @foreach($orders as $order)

            <tr>
                <td>{{ $order->id }}</td>
                <td>${{ $order->total }}</td>
                <td>
                    <span class="status-new">
                        {{ ucfirst($order->status) }}
                    </span>
                </td>
                <td>{{ $order->created_at->format('Y-m-d') }}</td>
            </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection