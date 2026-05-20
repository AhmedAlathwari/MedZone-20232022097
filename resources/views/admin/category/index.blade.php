@extends('layouts.adminbase')

@section('title', 'Category List')

@section('content')

<div class="card">

    <div class="card-header">
        <h3 class="card-title">Category List</h3>
    </div>

    <div class="card-body p-0">

        <table class="table table-bordered">

            <thead>

                <tr>

                    <th style="width:10px">ID</th>

                    <th>Title</th>

                    <th>Keywords</th>

                    <th>Description</th>

                    <th>Image</th>

                    <th>Status</th>

                    <th style="width:40px">Show</th>

                    <th style="width:40px">Edit</th>

                    <th style="width:40px">Delete</th>

                </tr>

            </thead>

            <tbody>

                @foreach($data as $rs)

                <tr>

                    <td>{{ $rs->id }}</td>

                    <td>

{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title) }}

</td>

                    <td>{{ $rs->keywords }}</td>

                    <td>{{ $rs->description }}</td>

                    <td>
    @if ($rs->image)

        <img src="{{ asset('storage/'.$rs->image) }}"
             style="height:40px; border-radius:2px;">

    @endif
</td>

                    <td>{{ $rs->status }}</td>

                    <td>
                        <a href="/admin/category/show/{{ $rs->id }}"
                        class="btn btn-block btn-info btn-sm">
                        Show
                        </a>
                    </td>

                    <td>
                        <a href="/admin/category/edit/{{ $rs->id }}"
                        class="btn btn-block btn-success btn-sm">
                        Edit
                        </a>
                    </td>

                    <td>
                        <a href="/admin/category/destroy/{{ $rs->id }}"
                        class="btn btn-block btn-danger btn-sm">
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