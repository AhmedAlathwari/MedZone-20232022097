@extends('layouts.adminbase')

@section('title','Messages')

@section('content')

<div class="card">

<div class="card-header">

<h3>

Messages List

</h3>

</div>

<div class="card-body">

<table class="table table-bordered">

<tr>

<th>ID</th>

<th>Name</th>

<th>Email</th>

<th>Subject</th>

<th>Status</th>

<th>Show</th>

<th>Delete</th>

</tr>

@foreach($data as $rs)

<tr>

<td>

{{ $rs->id }}

</td>

<td>

{{ $rs->name }}

</td>

<td>

{{ $rs->email }}

</td>

<td>

{{ $rs->subject }}

</td>

<td>

{{ $rs->status }}

</td>

<td>

<a
href="{{ route('admin.message.show',$rs->id) }}"
class="btn btn-info">

Show

</a>

</td>

<td>

<a
href="{{ route('admin.message.destroy',$rs->id) }}"
class="btn btn-danger">

Delete

</a>

</td>

</tr>

@endforeach

</table>

</div>

</div>

@endsection