@extends('layouts.adminbase')

@section('title', 'Add Category')

@section('content')

<div class="card card-primary">

    <div class="card-header">
        <h3 class="card-title">Add Category</h3>
    </div>

    <form action="/admin/category/store"
          method="POST"
          enctype="multipart/form-data">

        @csrf

        <div class="card-body">

            <div class="form-group">

                <label>Parent Category</label>

                <select
                    class="form-control"
                    name="parent_id">

                    <option value="0">
                        Main Category
                    </option>

                    @foreach($datalist as $rs)

                    <option value="{{ $rs->id }}">

                        {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}

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

                <label>Category Image</label>

                <input
                    type="file"
                    name="image"
                    class="form-control">

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

        </div>

        <div class="card-footer">

            <button
                type="submit"
                class="btn btn-primary">

                Save

            </button>

        </div>

    </form>

</div>

@endsection