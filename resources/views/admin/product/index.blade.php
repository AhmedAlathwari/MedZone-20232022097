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

        <table class="table table-bordered table-hover">

            <thead class="thead-dark">

                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Status</th>
                    <th>Image</th>
                    <th>Images</th>
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

                    <td>
                        @php
                            $category = \App\Models\Category::find($rs->category_id);
                        @endphp

                        @if($category)

                            {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($category, $category->title) }}

                        @else

                            No Category

                        @endif
                    </td>

                    <td>{{ $rs->price }}</td>
                    <td>{{ $rs->quantity }}</td>

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

                        @if($rs->image)

                        <img
                        src="{{ Storage::url($rs->image) }}"
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
                        <a href="{{ route('admin.image.index', ['product_id' => $rs->id]) }}"
                           class="btn btn-warning btn-sm">
                            Gallery
                        </a>
                    </td>

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