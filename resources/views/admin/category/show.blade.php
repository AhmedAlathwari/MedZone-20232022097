@extends('layouts.adminbase')

@section('title', 'Category Detail')

@section('content')

<div class="card">

    <div class="card-header">
        <h3 class="card-title">Category Detail Data</h3>
    </div>

    <div class="card-body p-0">

        <table class="table table-striped">

            <tr>
                <th style="width:150px">ID</th>
                <td>{{ $data->id }}</td>
            </tr>

            <tr>
                <th>Title</th>
                <td>{{ $data->title }}</td>
            </tr>

            <tr>
                <th>Keywords</th>
                <td>{{ $data->keywords }}</td>
            </tr>

            <tr>
                <th>Description</th>
                <td>{{ $data->description }}</td>
            </tr>

            <tr>
                <th>Created Date</th>
                <td>{{ $data->created_at }}</td>
            </tr>

            <tr>
                <th>Updated Date</th>
                <td>{{ $data->updated_at }}</td>
            </tr>

        </table>

    </div>

    <div class="card-footer">

        <div class="row">

            <div class="col-sm-3">
                <a href="/admin/category/edit/{{ $data->id }}"
                   class="btn btn-block btn-success">
                    Edit
                </a>
            </div>

            <div class="col-sm-3">
                <a href="/admin/category/destroy/{{ $data->id }}"
                   class="btn btn-block btn-danger">
                    Delete
                </a>
            </div>

        </div>

    </div>

</div>

@endsection