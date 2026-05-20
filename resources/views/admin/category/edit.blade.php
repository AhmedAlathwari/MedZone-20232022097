@extends('admin.index')

@section('content')

<div class="card">

    <div class="card-header bg-success">

        <h3 class="card-title">
            Edit Category
        </h3>

    </div>

    <div class="card-body">

        <form action="/admin/category/update/{{ $data->id }}" method="POST">

            @csrf

            <label>Title</label>

            <input
                type="text"
                name="title"
                value="{{ $data->title }}"
                class="form-control"
            >

            <br>

            <label>Keywords</label>

            <input
                type="text"
                name="keywords"
                value="{{ $data->keywords }}"
                class="form-control"
            >

            <br>

            <label>Description</label>

            <textarea
                name="description"
                class="form-control"
            >{{ $data->description }}</textarea>

            <br>

            <label>Status</label>

            <select
                name="status"
                class="form-control"
            >

                <option value="True">
                    True
                </option>

                <option value="False">
                    False
                </option>

            </select>

            <br>

            <button
                type="submit"
                class="btn btn-success"
            >
                Update Data
            </button>

        </form>

    </div>

</div>

@endsection