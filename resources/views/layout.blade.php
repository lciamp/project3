<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    @yield('additional-scripts')

</head>
<body>

    @yield('content')

    @yield('script')

</body>

</html>