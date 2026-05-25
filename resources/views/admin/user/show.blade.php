@extends('layouts.adminbase')

@section('title','User Detail')

@section('content')

<h1>User Detail</h1>

<table border="1" cellpadding="10">

<tr>
    <td>ID</td>
    <td>{{ $data->id }}</td>
</tr>

<tr>
    <td>Name</td>
    <td>{{ $data->name }}</td>
</tr>

<tr>
    <td>Email</td>
    <td>{{ $data->email }}</td>
</tr>

<tr>
    <td>Roles</td>

    <td>

@foreach($data->roleList as $role)

{{ $role->name }}

<a href="/admin/user/delete/{{ $data->id }}/{{ $role->id }}">

Delete

</a>

<br>

@endforeach

</td>

</tr>

</table>

<br>

<form
action="/admin/user/store/{{ $data->id }}"
method="POST">

@csrf

<select name="role_id">

@foreach($roles as $rs)

<option value="{{ $rs->id }}">

{{ $rs->name }}

</option>

@endforeach

</select>

<button type="submit">

Add Role

</button>

</form>

@endsection