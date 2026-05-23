@extends('layouts.adminbase')

@section('title','FAQ List')

@section('content')

<div class="card">

<div class="card-header bg-primary text-white">

<h3>

FAQ List

</h3>

</div>

<div class="card-body">

<a
href="{{ route('admin.faq.create') }}"
class="btn btn-success mb-3">

Add FAQ

</a>

<table class="table table-bordered table-hover">

<thead class="thead-dark">

<tr>

<th>ID</th>
<th>Question</th>
<th>Status</th>
<th>Show</th>
<th>Edit</th>
<th>Delete</th>

</tr>

</thead>

<tbody>

@foreach($data as $rs)

<tr>

<td>{{ $rs->id }}</td>

<td>{{ $rs->question }}</td>

<td>

@if($rs->status == 'True')

<span class="badge badge-success">True</span>

@else

<span class="badge badge-secondary">False</span>

@endif

</td>

<td>
<a href="{{ route('admin.faq.show',$rs->id) }}" class="btn btn-info btn-sm">
Show
</a>
</td>

<td>
<a href="{{ route('admin.faq.edit',$rs->id) }}" class="btn btn-success btn-sm">
Edit
</a>
</td>

<td>
<a href="{{ route('admin.faq.destroy',$rs->id) }}" class="btn btn-danger btn-sm">
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