@extends('layouts.adminbase')

@section('title','Product List')

@section('content')

<div class="card">

    <div class="card-header">

        <a href="/admin/product/create"
           class="btn btn-success btn-lg"
           style="width:200px;">
            Add Product
        </a>

    </div>

    <div class="card-body p-0">

        <table class="table table-bordered">

            <thead>

                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Quantity</th>
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
                    <td>{{ $rs->title }}</td>
                    <td>{{ $rs->category_id }}</td>
                    <td>{{ $rs->price }}</td>
                    <td>{{ $rs->quantity }}</td>
                    <td>{{ $rs->status }}</td>

                    <td>
                        <a href="/admin/product/show/{{ $rs->id }}"
                           class="btn btn-info btn-sm">
                            Show
                        </a>
                    </td>

                    <td>
                        <a href="/admin/product/edit/{{ $rs->id }}"
                           class="btn btn-success btn-sm">
                            Edit
                        </a>
                    </td>

                    <td>
                        <a href="/admin/product/destroy/{{ $rs->id }}"
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