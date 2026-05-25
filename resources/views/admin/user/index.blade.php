@extends('layouts.adminbase')

@section('title','Users')

@section('content')

<h1>Users</h1>

<table border="1" cellpadding="10">

<tr>

<th>ID</th>

<th>Name</th>

<th>Email</th>

<th>Roles</th>

<th>Show</th>

</tr>

@foreach($data as $rs)

<tr>

<td>{{ $rs->id }}</td>

<td>{{ $rs->name }}</td>

<td>{{ $rs->email }}</td>

<td>

@foreach($rs->roleList as $role)

{{ $role->name }}

<br>

@endforeach

</td>

<td>

<a href="/admin/user/{{ $rs->id }}">

Show

</a>

</td>

</tr>

@endforeach

</table>

@endsection