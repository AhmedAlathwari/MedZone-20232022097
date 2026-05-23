@extends('layouts.adminbase')

@section('title','Product Image Gallery')

@section('content')

<div class="card">

<div class="card-header bg-primary text-white">

<h3>
Product Gallery : {{ $product->title }}
</h3>

</div>

<div class="card-body">

<div class="card mb-4">

<div class="card-header">

<h4>
Upload New Image
</h4>

</div>

<div class="card-body">

<form
action="{{ route('admin.image.store',['product_id'=>$product->id]) }}"
method="POST"
enctype="multipart/form-data">

@csrf

<div class="form-group">

<label>Image Title</label>

<input
type="text"
name="title"
class="form-control"
placeholder="Image Title">

</div>

<div class="form-group">

<label>Image File</label>

<input
type="file"
name="image"
class="form-control">

</div>

<button class="btn btn-success">
Upload Image
</button>

</form>

</div>

</div>

<table class="table table-bordered table-hover">

<thead class="thead-dark">

<tr>

<th>ID</th>
<th>Title</th>
<th>Image</th>
<th>Delete</th>

</tr>

</thead>

<tbody>

@foreach($images as $rs)

<tr>

<td>{{ $rs->id }}</td>

<td>{{ $rs->title }}</td>

<td>

<img
src="{{ asset('storage/'.$rs->image) }}"
style="
width:100px;
height:100px;
object-fit:cover;
border-radius:12px;
border:1px solid #ddd;
padding:3px;
">

</td>

<td>

<a
href="{{ route('admin.image.destroy', ['product_id'=>$product->id, 'id'=>$rs->id]) }}"
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