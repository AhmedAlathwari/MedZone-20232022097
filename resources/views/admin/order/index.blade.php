@extends('layouts.adminbase')

@section('title','Orders')

@section('content')

<h1>Orders</h1>

<table border="1" width="100%">

    <tr>
        <th>ID</th>
        <th>User ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Total</th>
        <th>Status</th>
        <th>Show</th>
    </tr>

    @foreach($data as $rs)

    <tr>
        <td>{{ $rs->id }}</td>
        <td>{{ $rs->user_id }}</td>
        <td>{{ $rs->name }} {{ $rs->surname }}</td>
        <td>{{ $rs->email }}</td>
        <td>{{ $rs->phone }}</td>
        <td>{{ $rs->total }}</td>
        <td>{{ $rs->status }}</td>

        <td>

            <a href="{{ route('admin.order.show', ['id' => $rs->id]) }}">

                Show

            </a>

        </td>

    </tr>

    @endforeach

</table>

@endsection