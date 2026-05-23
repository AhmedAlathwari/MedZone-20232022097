@extends('layouts.adminbase')

@section('title','FAQ Detail')

@section('content')

<div class="card">

<div class="card-header bg-primary text-white">

<h3>

FAQ Detail

</h3>

</div>

<div class="card-body">

<p>
<b>Question:</b>
{{ $data->question }}
</p>

<hr>

<p>
<b>Answer:</b>
</p>

<div class="p-3 bg-light border">
{!! $data->answer !!}
</div>

<hr>

<p>
<b>Status:</b>
{{ $data->status }}
</p>

<a
href="{{ route('admin.faq.index') }}"
class="btn btn-secondary">

Back

</a>

</div>

</div>

@endsection