@extends('layouts.adminbase')

@section('title','Comment Detail')

@section('content')

<h1>Comment Detail</h1>

<table border="1" cellpadding="10">

<tr>
<td>ID</td>
<td>{{ $data->id }}</td>
</tr>

<tr>
<td>Product</td>
<td>{{ $data->product_id }}</td>
</tr>

<tr>
<td>User</td>
<td>{{ $data->user_id }}</td>
</tr>

<tr>
<td>Subject</td>
<td>{{ $data->subject }}</td>
</tr>

<tr>
<td>Review</td>
<td>{{ $data->review }}</td>
</tr>

<tr>
<td>Rate</td>
<td>{{ $data->rate }}</td>
</tr>

<tr>
<td>Status</td>
<td>{{ $data->status }}</td>
</tr>

</table>

<br>

<form
action="/admin/comment/update/{{ $data->id }}"
method="POST">

@csrf

<select name="status">

<option value="new">
new
</option>

<option value="true">
true
</option>

</select>

<button type="submit">

Update Status

</button>

</form>

<br>

<a href="/admin/comment/delete/{{ $data->id }}">

Delete Comment

</a>



@endsection