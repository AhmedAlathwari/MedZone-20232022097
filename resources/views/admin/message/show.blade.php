@extends('layouts.adminbase')

@section('title','Message Detail')

@section('content')

<div class="card">

<div class="card-header">

<h3>

Message Detail

</h3>

</div>

<div class="card-body">

<p>

<b>Name :</b>

{{ $data->name }}

</p>

<hr>

<p>

<b>Email :</b>

{{ $data->email }}

</p>

<hr>

<p>

<b>Phone :</b>

{{ $data->phone }}

</p>

<hr>

<p>

<b>Subject :</b>

{{ $data->subject }}

</p>

<hr>

<p>

<b>Message :</b>

{{ $data->message }}

</p>

<hr>

<p>

<b>IP :</b>

{{ $data->ip }}

</p>

<hr>

<form
action="{{ route('admin.message.update',$data->id) }}"
method="POST">

@csrf

<label>

Admin Note

</label>

<textarea
name="note"
class="form-control"
rows="5">

{{ $data->note }}

</textarea>

<br>

<button
class="btn btn-success">

Update Note

</button>

</form>

</div>

</div>

@endsection