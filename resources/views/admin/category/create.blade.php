@extends('layouts.adminbase')

@section('title', 'Add Category')

@section('content')

<div class="card card-primary">

    <div class="card-header">
        <h3 class="card-title">Add Category</h3>
    </div>

    <form action="/admin/category/store" method="POST">

        @csrf

        <div class="card-body">

            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control">
            </div>

            <div class="form-group">
                <label>Keywords</label>
                <input type="text" name="keywords" class="form-control">
            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="True">True</option>
                    <option value="False">False</option>
                </select>
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>

    </form>

</div>

@endsection