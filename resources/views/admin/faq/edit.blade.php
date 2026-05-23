@extends('layouts.adminbase')

@section('title','Edit FAQ')

@section('content')

<div class="card">

<div class="card-header bg-primary text-white">

<h3>

Edit FAQ

</h3>

</div>

<div class="card-body">

<form
action="{{ route('admin.faq.update',$data->id) }}"
method="POST">

@csrf

<div class="form-group">

<label>

Question

</label>

<input
type="text"
name="question"
value="{{ $data->question }}"
class="form-control">

</div>

<div class="form-group">

<label>

Answer

</label>

<textarea
name="answer"
rows="8"
class="form-control">{{ $data->answer }}</textarea>

</div>

<div class="form-group">

<label>

Status

</label>

<select
name="status"
class="form-control">

<option
value="True"
{{ $data->status=='True' ? 'selected' : '' }}>

True

</option>

<option
value="False"
{{ $data->status=='False' ? 'selected' : '' }}>

False

</option>

</select>

</div>

<br>

<button
class="btn btn-success">

Update FAQ

</button>

</form>

</div>

</div>

@endsection