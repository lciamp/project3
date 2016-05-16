@extends('layout')

@section('content')
 <!-- https://coolors.co/app/dce0d9-25231d-452c2b-bc261d-851513 -->
    <h1>Louis M Ciampanelli Jr</h1>

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

            if(document.getElementById("demo").innerHTML == "How are you doing today?"){

                document.getElementById("demo").innerHTML = "";
            }
            else {

                document.getElementById("demo").innerHTML = str;
            }


        }
    </script>
@stop
