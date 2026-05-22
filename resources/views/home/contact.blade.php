@extends('frontbase')

@section(
'title',
'Contact Us - '
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

Contact Us

</h1>

<hr>

<div
style="
display:flex;
gap:40px;
flex-wrap:wrap;
">

<div
style="
flex:2;
min-width:400px;
">

<h3>

Send Message

</h3>

<form>

<input
type="text"
placeholder="Your Name"
style="
width:100%;
padding:10px;
margin-bottom:15px;
">

<input
type="email"
placeholder="Your Email"
style="
width:100%;
padding:10px;
margin-bottom:15px;
">

<input
type="text"
placeholder="Subject"
style="
width:100%;
padding:10px;
margin-bottom:15px;
">

<textarea
rows="6"
placeholder="Message"
style="
width:100%;
padding:10px;
margin-bottom:15px;
"></textarea>

<button>

Send Message

</button>

</form>

</div>

<div
style="
flex:1;
min-width:250px;
">

<h3>

Contact Information

</h3>

<hr>

<div>

{!! $setting->contact !!}

</div>

</div>

</div>

</div>

@endsection