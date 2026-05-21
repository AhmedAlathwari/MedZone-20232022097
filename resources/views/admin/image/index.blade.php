@extends('layouts.adminbase')

@section('title','Product Image Gallery')

@section('content')

<div class="card">

<div class="card-header">

<h3>
Product : {{ $product->title }}
</h3>

</div>

<div class="card-body">

<form action="{{ route('admin.image.store',['product_id'=>$product->id]) }}"
method="POST"
enctype="multipart/form-data">

@csrf

<input type="text"
name="title"
class="form-control"
placeholder="Image Title">

<br>

<input type="file"
name="image"
class="form-control">

<br>

<button class="btn btn-success">
Upload Image
</button>

</form>

<br><br>

<table class="table table-bordered">

<thead>

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
            style="height:80px;width:80px;">
    </td>

    <td>
        <a href="{{ route('admin.image.destroy', ['product_id'=>$product->id, 'id'=>$rs->id]) }}"
           class="btn btn-danger">
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