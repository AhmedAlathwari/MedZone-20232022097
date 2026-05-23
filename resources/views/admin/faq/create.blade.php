@extends('layouts.adminbase')

@section('title','Add FAQ')

@section('content')

<div class="card">

<div class="card-header bg-primary text-white">

<h3>

Add FAQ

</h3>

</div>

<div class="card-body">

<form
action="{{ route('admin.faq.store') }}"
method="POST">

@csrf

<div class="form-group">

<label>

Question

</label>

<input
type="text"
name="question"
class="form-control">

</div>

<div class="form-group">

<label>

Answer

</label>

<textarea
name="answer"
rows="8"
class="form-control">

</textarea>

</div>

<div class="form-group">

<label>

Status

</label>

<select
name="status"
class="form-control">

<option value="True">

True

</option>

<option value="False">

False

</option>

</select>

</div>

<br>

<button
class="btn btn-success">

Save FAQ

</button>

</form>

</div>

</div>

@endsection