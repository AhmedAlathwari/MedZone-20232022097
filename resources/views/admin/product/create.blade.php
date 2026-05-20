@extends('layouts.adminbase')

@section('title','Add Product')

@section('content')

<div class="card">

    <div class="card-header">
        <h3>Add Product</h3>
    </div>

    <div class="card-body">

        <form action="{{ route('admin.product.store') }}"
              method="POST">

            @csrf

            <div class="form-group">

                <label>Category</label>

                <select
                    class="form-control"
                    name="category_id">

                    @foreach($categories as $rs)

                    <option value="{{ $rs->id }}">
                        {{ $rs->title }}
                    </option>

                    @endforeach

                </select>

            </div>

            <div class="form-group">

                <label>Title</label>

                <input
                    type="text"
                    name="title"
                    class="form-control">

            </div>

            <div class="form-group">

                <label>Keywords</label>

                <input
                    type="text"
                    name="keywords"
                    class="form-control">

            </div>

            <div class="form-group">

                <label>Description</label>

                <textarea
                    name="description"
                    class="form-control"></textarea>

            </div>

            <div class="form-group">

                <label>Price</label>

                <input
                    type="text"
                    name="price"
                    class="form-control">

            </div>

            <div class="form-group">

                <label>Quantity</label>

                <input
                    type="text"
                    name="quantity"
                    class="form-control">

            </div>

            <div class="form-group">

                <label>Min Quantity</label>

                <input
                    type="text"
                    name="min_quantity"
                    class="form-control">

            </div>

            <div class="form-group">

                <label>Tax</label>

                <input
                    type="text"
                    name="tax"
                    class="form-control">

            </div>

            <div class="form-group">

                <label>Detail</label>

                <textarea
                    name="detail"
                    class="form-control"></textarea>

            </div>

            <div class="form-group">

                <label>Status</label>

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

            <button
                type="submit"
                class="btn btn-success">

                Save Product

            </button>

        </form>

    </div>

</div>

@endsection