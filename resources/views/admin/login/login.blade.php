<!DOCTYPE html>

<html>

<head>

<title>Admin Login</title>

</head>

<body>

<h2>MedZone Admin Login</h2>

<form
action="{{ route('adminlogincheck') }}"
method="POST">

@csrf

<input
type="email"
name="email"
placeholder="Email">

<br><br>

<input
type="password"
name="password"
placeholder="Password">

<br><br>

<button
type="submit">

Login

</button>

</form>

</body>

</html>