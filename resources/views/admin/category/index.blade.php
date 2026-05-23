@extends('layouts.adminbase')

@section('title', 'Category List')

@section('content')

<div class="card">

    <div class="card-header bg-primary text-white">

        <h3 class="card-title">Category List</h3>

    </div>

    <div class="card-body p-0">

        <table class="table table-bordered table-hover">

            <thead class="thead-dark">

                <tr>

                    <th>ID</th>

                    <th>Title</th>

                    <th>Keywords</th>

                    <th>Description</th>

                    <th>Image</th>

                    <th>Status</th>

                    <th>Show</th>

                    <th>Edit</th>

                    <th>Delete</th>

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

                        <img
                        src="{{ asset('storage/'.$rs->image) }}"
                        style="
                        width:70px;
                        height:70px;
                        object-fit:cover;
                        border-radius:10px;
                        border:1px solid #ddd;
                        padding:2px;
                        ">

                        @else

                        <span class="badge badge-warning">
                            No Image
                        </span>

                        @endif

                    </td>

                    <td>

                        @if($rs->status == 'True')

                        <span class="badge badge-success">
                            True
                        </span>

                        @else

                        <span class="badge badge-secondary">
                            False
                        </span>

                        @endif

                    </td>

                    <td>

                        <a href="/admin/category/show/{{ $rs->id }}"
                        class="btn btn-info btn-sm">
                        Show
                        </a>

                    </td>

                    <td>

                        <a href="/admin/category/edit/{{ $rs->id }}"
                        class="btn btn-success btn-sm">
                        Edit
                        </a>

                    </td>

                    <td>

                        <a href="/admin/category/destroy/{{ $rs->id }}"
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