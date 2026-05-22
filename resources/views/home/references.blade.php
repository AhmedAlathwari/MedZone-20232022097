@extends('frontbase')

@section(
'title',
'References - '
.
$setting->title
)

@section('content')

<div
style="
margin-top:40px;
padding:20px;
">

<h1>

References

</h1>

<hr>

<div>

{!! $setting->references !!}

</div>

</div>

@endsection