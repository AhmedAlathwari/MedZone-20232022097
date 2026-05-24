@extends('layouts.adminbase')

@section('title','Admin Home')

@section('content')

<h1>Admin Dashboard</h1>

<p>

Welcome

{{ Auth::user()->name }}

</p>

@endsection