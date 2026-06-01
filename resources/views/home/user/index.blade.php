@extends('frontbase')

@section('title','User Panel')

@section('content')

<div class="row">

    <div class="col-md-2">

        @include('home.user.user_menu')

    </div>

    <div class="col-md-10">

    @include('profile.show')

</div>
</div>

@endsection