@extends('layouts.adminbase')

@section('title','Messages')

@section('content')

<div class="card">

<div class="card-header bg-primary text-white">

<h3>

Messages List

</h3>

</div>

<div class="card-body">

<table class="table table-bordered table-hover">

<thead class="thead-dark">

<tr>

<th>ID</th>

<th>Name</th>

<th>Email</th>

<th>Subject</th>

<th>Status</th>

<th>Show</th>

<th>Delete</th>

</tr>

</thead>

<tbody>

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

@if($rs->status == 'New')

<span class="badge badge-success">

New

</span>

@else

<span class="badge badge-secondary">

Read

</span>

@endif

</td>

<td>

<a
href="{{ route('admin.message.show',$rs->id) }}"
class="btn btn-info btn-sm">

Show

</a>

</td>

<td>

<a
href="{{ route('admin.message.destroy',$rs->id) }}"
class="btn btn-danger btn-sm">

Delete

</a>

</td>

</tr>

@endforeach

</tbody>

</table>

</div>

</div>

@endsection