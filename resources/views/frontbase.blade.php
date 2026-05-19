<!DOCTYPE html>
<html>

<head>

    <title>@yield('title')</title>

    @yield('head')

</head>

<body>

    <div>

        <h2>MedZone Header</h2>

    </div>

    <hr>

    <div>

        @section('sidebar')

            Default Sidebar Content

        @show

    </div>

    <hr>

    <div>

        @yield('content')

    </div>

    <hr>

    <div>

        <h4>MedZone Footer</h4>

    </div>

</body>

</html>