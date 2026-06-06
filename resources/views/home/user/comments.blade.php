@extends('frontbase')

@section('title','My Reviews')

@section('content')

<style>
    .reviews-layout {
        display: flex;
        gap: 30px;
        align-items: flex-start;
        max-width: 1400px;
        margin: 40px auto;
        padding: 0 20px;
    }

    .reviews-menu {
        width: 260px;
        position: sticky;
        top: 120px;
    }

    .reviews-box {
        flex: 1;
        background: #ffffff;
        padding: 30px;
        border-radius: 18px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
    }

    .reviews-box h2 {
        color: #0f172a;
        margin-bottom: 25px;
    }

    .reviews-table {
        width: 100%;
        border-collapse: collapse;
    }

    .reviews-table th,
    .reviews-table td {
        padding: 14px;
        border-bottom: 1px solid #e5e7eb;
        text-align: left;
        vertical-align: top;
    }

    .status-badge {
        background: #ecfdf5;
        color: #0f9d6c;
        padding: 6px 14px;
        border-radius: 999px;
        font-size: 13px;
        font-weight: 700;
        display: inline-block;
    }

    .delete-btn {
        background: #fee2e2;
        color: #dc2626;
        padding: 8px 14px;
        border-radius: 10px;
        text-decoration: none;
        font-weight: 700;
        font-size: 13px;
    }

    .rate-stars {
        color: #f59e0b;
        font-weight: 700;
    }
</style>

<div class="reviews-layout">

    <div class="reviews-menu">
        @include('home.user.user_menu')
    </div>

    <div class="reviews-box">

        <h2>My Reviews</h2>

        <table class="reviews-table">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product</th>
                    <th>Subject</th>
                    <th>Review</th>
                    <th>Rate</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                @foreach($comments as $rs)

                <tr>
                    <td>{{ $rs->id }}</td>
                    <td>{{ $rs->product->title ?? '' }}</td>
                    <td>{{ $rs->subject }}</td>
                    <td>{{ $rs->review }}</td>
                    <td>
                        <span class="rate-stars">
                            {{ $rs->rate }} ★
                        </span>
                    </td>
                    <td>
                        <span class="status-badge">
                            {{ ucfirst($rs->status) }}
                        </span>
                    </td>
                    <td>
                        <a class="delete-btn"
                            href="{{ route('userpanel.reviewdestroy', ['id' => $rs->id]) }}"
                            onclick="return confirm('Are you sure?')">
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