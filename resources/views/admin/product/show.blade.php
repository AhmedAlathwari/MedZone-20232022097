@extends('layouts.adminbase')

@section('title','Show Product')

@section('content')

<div class="card">

    <div class="card-header">
        <h3>Show Product</h3>
    </div>

    <div class="card-body">

        <table class="table table-bordered">

            <tr>
                <th>ID</th>
                <td>{{ $data->id }}</td>
            </tr>

            <tr>
                <th>Title</th>
                <td>{{ $data->title }}</td>
            </tr>

            <tr>
                <th>Keywords</th>
                <td>{{ $data->keywords }}</td>
            </tr>

            <tr>
                <th>Description</th>
                <td>{{ $data->description }}</td>
            </tr>

            <tr>
                <th>Price</th>
                <td>{{ $data->price }}</td>
            </tr>

            <tr>
                <th>Quantity</th>
                <td>{{ $data->quantity }}</td>
            </tr>

            <tr>
                <th>Min Quantity</th>
                <td>{{ $data->min_quantity }}</td>
            </tr>

            <tr>
                <th>Tax</th>
                <td>{{ $data->tax }}</td>
            </tr>

            <tr>
                <th>Detail</th>
                <td>{!! $data->detail !!}</td>
            </tr>

            <tr>
                <th>Status</th>
                <td>{{ $data->status }}</td>
            </tr>

        </table>

    </div>

</div>

@endsection