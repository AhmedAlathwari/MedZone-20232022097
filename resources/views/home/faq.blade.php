@extends('frontbase')

@section(
'title',
'Frequently Asked Questions - '.$setting->title
)

@section('content')

<div class="container mt-5">

<h2>

Frequently Asked Questions

</h2>

<br>

<div id="accordion">

@foreach($faq as $rs)

<div class="card mb-2">

<div
class="card-header"
id="heading{{ $rs->id }}">

<h5>

<button
class="btn btn-link"
data-toggle="collapse"
data-target="#collapse{{ $rs->id }}">

{{ $rs->question }}

</button>

</h5>

</div>

<div
id="collapse{{ $rs->id }}"
class="collapse"
data-parent="#accordion">

<div class="card-body">

{!! $rs->answer !!}

</div>

</div>

</div>

@endforeach

</div>

</div>

@endsection