<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name='viewport' content='minimum-scale=0.98; maximum-scale=5; inital-scale=0.98; user-scalable=no; width=1024'>

<!--
    <meta name="viewport" content="width-device-width", inital-scale="1.0">


-->
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <script src="https://use.fontawesome.com/8d143cdcc9.js"></script>

    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    @yield('additional-scripts')

    <title>{{ $title }}</title>
</head>
<body>

    @yield('content')

    @yield('script')

</body>

</html>