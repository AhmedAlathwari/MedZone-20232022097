@extends('layouts.adminbase')

@section('title','Comments')

@section('content')

<h1>Comments</h1>

<table border="1" cellpadding="10">

<tr>

<th>ID</th>

<th>Product</th>

<th>User</th>

<th>Subject</th>

<th>Rate</th>

<th>Status</th>

<th>Show</th>

</tr>

@foreach($data as $rs)

<tr>

<td>{{ $rs->id }}</td>

<td>{{ $rs->product_id }}</td>

<td>{{ $rs->user_id }}</td>

<td>{{ $rs->subject }}</td>

<td>{{ $rs->rate }}</td>

<td>{{ $rs->status }}</td>

<td>

<a href="/admin/comment/{{ $rs->id }}">

Show

</a>

</td>

</tr>

@endforeach

</table>

@endsection