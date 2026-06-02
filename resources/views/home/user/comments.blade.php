@extends('frontbase')

@section('title','My Reviews')

@section('content')

<div class="row">

    <div class="col-md-2">

        @include('home.user.user_menu')

    </div>

    <div class="col-md-10">

        <table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>Product</th>
        <th>Subject</th>
        <th>Review</th>
        <th>Rate</th>
        <th>Status</th>
    </tr>

    @foreach($comments as $rs)
        <tr>
            <td>{{ $rs->id }}</td>
            <td>{{ $rs->product->title ?? '' }}</td>
            <td>{{ $rs->subject }}</td>
            <td>{{ $rs->review }}</td>
            <td>{{ $rs->rate }}</td>
            <td>{{ $rs->status }}</td>
            <td>
    <a href="{{ route('userpanel.reviewdestroy', ['id' => $rs->id]) }}"
       onclick="return confirm('Are you sure?')">
        Delete
    </a>
</td>
        </tr>
    @endforeach
</table>

    </div>

</div>

@endsection