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

@if(session('success'))

<div
style="
background:#d4edda;
color:#155724;
padding:12px;
margin-bottom:15px;
border-radius:5px;
">

<strong>

{{ session('success') }}

</strong>

</div>

@endif

<form
action="{{ route('storemessage') }}"
method="POST">

@csrf

<input
type="text"
name="name"
placeholder="Your Name"
required
style="
width:100%;
padding:10px;
margin-bottom:15px;
">

<input
type="email"
name="email"
placeholder="Your Email"
required
style="
width:100%;
padding:10px;
margin-bottom:15px;
">

<input
type="text"
name="phone"
placeholder="Your Phone"
style="
width:100%;
padding:10px;
margin-bottom:15px;
">

<input
type="text"
name="subject"
placeholder="Subject"
style="
width:100%;
padding:10px;
margin-bottom:15px;
">

<textarea
name="message"
rows="6"
placeholder="Message"
required
style="
width:100%;
padding:10px;
margin-bottom:15px;
"></textarea>

<button
type="submit">

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