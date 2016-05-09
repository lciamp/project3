<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 100px;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        li {
            font-weight: 100;
            font-family: 'Lato';
            font-size: 25px;
            padding-left: 15px;
            list-style: none;

        }

        h1 {
            margin-top: 0px;;
            font-size:55px;
            font-family: 'Lato';
            font-weight: bold;
            margin-bottom: 2px;
        }

        h2 {
            font-size: 35px;
            font-family: 'Lato';
            font-weight: bold;
            margin-bottom: 2px;
        }


        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }
    </style>
</head>
<body>

    @yield('content')

</body>

</html>