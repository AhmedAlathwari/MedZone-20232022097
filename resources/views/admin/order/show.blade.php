@extends('layouts.adminbase')

@section('title','Order Detail')

@section('content')

<h1>Order Detail</h1>

<p>ID : {{ $data->id }}</p>

<p>Name : {{ $data->name }}</p>

<p>Surname : {{ $data->surname }}</p>

<p>Email : {{ $data->email }}</p>

<p>Phone : {{ $data->phone }}</p>

<p>Address : {{ $data->address }}</p>

<p>Total : {{ $data->total }}</p>

<p>Status : {{ $data->status }}</p>


<hr>

<h3>Order Products</h3>

<table border="1" width="100%">

    <tr>
        <th>ID</th>
        <th>Product</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Amount</th>
        <th>Status</th>
    </tr>

    @foreach($data->orderProducts as $rs)

    <tr>
        <td>{{ $rs->id }}</td>
        <td>{{ $rs->product->title ?? '' }}</td>
        <td>{{ $rs->price }}</td>
        <td>{{ $rs->quantity }}</td>
        <td>{{ $rs->amount }}</td>
        <td>{{ $rs->status }}</td>
    </tr>

    @endforeach

</table>
@endsection