@extends('layouts.adminbase')

@section('title','Edit Product')

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

                <select
                    class="form-control"
                    name="category_id">

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

        </form>

    </div>

</div>

@endsection