@extends('layouts.adminbase')

@section('title','Site Settings')

@section('content')

<div class="card">

<div class="card-header bg-primary text-white">

<h3>

Site Settings

</h3>

</div>

<div class="card-body">

<form
action="{{ route('admin.setting.update') }}"
method="POST"
enctype="multipart/form-data">

@csrf

<input
type="hidden"
name="id"
value="{{ $data->id }}">

<h4>SEO Settings</h4>

<hr>

<div class="form-group">

<label>Site Title</label>

<input
type="text"
name="title"
value="{{ $data->title }}"
class="form-control">

</div>

<div class="form-group">

<label>Keywords</label>

<input
type="text"
name="keywords"
value="{{ $data->keywords }}"
class="form-control">

</div>

<div class="form-group">

<label>Description</label>

<textarea
name="description"
class="form-control"
rows="3">{{ $data->description }}</textarea>

</div>

<div class="form-group">

<label>Site Icon</label>

<input
type="file"
name="icon"
class="form-control">

@if($data->icon)

<br>

<div
style="
border:1px solid #ddd;
padding:10px;
width:120px;
border-radius:10px;
text-align:center;
">

<img
src="{{ Storage::url($data->icon) }}"
style="
width:90px;
height:90px;
object-fit:cover;
border-radius:8px;
">

<p style="margin-top:8px;margin-bottom:0;">

Current Icon

</p>

</div>

@endif

</div>

<br>

<h4>Company Information</h4>

<hr>

<div class="row">

<div class="col-md-6">

<div class="form-group">

<label>Company</label>

<input
type="text"
name="company"
value="{{ $data->company }}"
class="form-control">

</div>

</div>

<div class="col-md-6">

<div class="form-group">

<label>Email</label>

<input
type="email"
name="email"
value="{{ $data->email }}"
class="form-control">

</div>

</div>

</div>

<div class="row">

<div class="col-md-6">

<div class="form-group">

<label>Phone</label>

<input
type="text"
name="phone"
value="{{ $data->phone }}"
class="form-control">

</div>

</div>

<div class="col-md-6">

<div class="form-group">

<label>Address</label>

<input
type="text"
name="address"
value="{{ $data->address }}"
class="form-control">

</div>

</div>

</div>

<br>

<h4>SMTP Settings</h4>

<hr>

<div class="row">

<div class="col-md-6">

<div class="form-group">

<label>SMTP Server</label>

<input
type="text"
name="smtp_server"
value="{{ $data->smtp_server }}"
class="form-control">

</div>

</div>

<div class="col-md-6">

<div class="form-group">

<label>SMTP Email</label>

<input
type="email"
name="smtp_email"
value="{{ $data->smtp_email }}"
class="form-control">

</div>

</div>

</div>

<div class="row">

<div class="col-md-6">

<div class="form-group">

<label>SMTP Password</label>

<input
type="text"
name="smtp_password"
value="{{ $data->smtp_password }}"
class="form-control">

</div>

</div>

<div class="col-md-6">

<div class="form-group">

<label>SMTP Port</label>

<input
type="text"
name="smtp_port"
value="{{ $data->smtp_port }}"
class="form-control">

</div>

</div>

</div>

<br>

<h4>Social Media</h4>

<hr>

<div class="row">

<div class="col-md-6">

<div class="form-group">

<label>Facebook</label>

<input
type="text"
name="facebook"
value="{{ $data->facebook }}"
class="form-control">

</div>

</div>

<div class="col-md-6">

<div class="form-group">

<label>Instagram</label>

<input
type="text"
name="instagram"
value="{{ $data->instagram }}"
class="form-control">

</div>

</div>

</div>

<br>

<h4>Content Pages</h4>

<hr>

<div class="form-group">

<label>About Us</label>

<textarea
name="about_us"
class="form-control"
rows="5">{{ $data->about_us }}</textarea>

</div>

<div class="form-group">

<label>Contact</label>

<textarea
name="contact"
class="form-control"
rows="5">{{ $data->contact }}</textarea>

</div>

<div class="form-group">

<label>References</label>

<textarea
name="references"
class="form-control"
rows="5">{{ $data->references }}</textarea>

</div>

<button
type="submit"
class="btn btn-success btn-lg">

Update Settings

</button>

</form>

</div>

</div>

@endsection