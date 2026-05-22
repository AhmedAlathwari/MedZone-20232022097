@extends('layouts.adminbase')

@section('title','Edit Product')

@section('head')

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-bs4.min.css" rel="stylesheet">

@endsection

@section('content')

<div class="card">

    <div class="card-header">
        <h3>Edit Product</h3>
    </div>

    <div class="card-body">

        <form action="/admin/product/update/{{ $data->id }}"
              method="POST">

            @csrf

            <div class="form-group">

                <label>Product Category</label>

                <select class="form-control" name="category_id">

                    @foreach($categories as $rs)

                    <option
                        value="{{ $rs->id }}"
                        @if ($rs->id == $data->category_id)
                        selected="selected"
                        @endif>

                        {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title) }}

                    </option>

                    @endforeach

                </select>

            </div>

            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" value="{{ $data->title }}" class="form-control">
            </div>

            <div class="form-group">
                <label>Keywords</label>
                <input type="text" name="keywords" value="{{ $data->keywords }}" class="form-control">
            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control">{{ $data->description }}</textarea>
            </div>

            <div class="form-group">
                <label>Price</label>
                <input type="text" name="price" value="{{ $data->price }}" class="form-control">
            </div>

            <div class="form-group">
                <label>Quantity</label>
                <input type="text" name="quantity" value="{{ $data->quantity }}" class="form-control">
            </div>

            <div class="form-group">
                <label>Min Quantity</label>
                <input type="text" name="min_quantity" value="{{ $data->min_quantity }}" class="form-control">
            </div>

            <div class="form-group">
                <label>Tax</label>
                <input type="text" name="tax" value="{{ $data->tax }}" class="form-control">
            </div>

            <div class="form-group">
                <label>Detail</label>
                <textarea name="detail" id="detail" class="form-control">{{ $data->detail }}</textarea>
            </div>

            <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="True" @if($data->status == 'True') selected @endif>True</option>
                    <option value="False" @if($data->status == 'False') selected @endif>False</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">
                Update Product
            </button>

        </form>

    </div>

</div>

@endsection

@section('footer')

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-bs4.min.js"></script>

<script>
    $(document).ready(function() {
        $('#detail').summernote({
            height: 300
        });
    });
</script>

@endsection