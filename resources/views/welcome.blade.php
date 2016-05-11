@extends('layout')

@section('content')

    <h1>Lou Ciampanelli</h1>

    <button onclick="myFunction()">Try it</button>

    <p><h2 id="demo"></h2></p>
    <!-- loop through the associated array -->
    @unless(empty($keys))

        @foreach($keys as $key)

            <h2>{{ $key }}</h2>

            @unless(empty($test[$key]))

                @foreach($test[$key] as $command)

                    <li id='{{ $key }}_{{ $command }}'>{{ $key }} {{ $command }}</li>

                @endforeach

            @endunless

        @endforeach

    @endunless

@stop

@section('script')
    <script>
        function myFunction() {
            var str = "How are you doing today?";
            //var res = str.split(",");
            //alert(res[1]);
            //alert(res[3]);

            document.getElementById("demo").innerHTML = str;
        }
    </script>
@stop
