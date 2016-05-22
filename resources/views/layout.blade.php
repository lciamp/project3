<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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