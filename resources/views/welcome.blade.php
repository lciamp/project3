@extends('layout', ['title' => 'Louis M Ciampanelli Jr'])

@section('content')

 <!-- https://coolors.co/app/dce0d9-25231d-452c2b-bc261d-851513 -->

    <h1>Bean</h1>

 <div id="container">
    <!-- loop through the associated array -->
    @unless(empty($keys))

        @foreach($keys as $key)
            <ul>
            <h2>{{ $key }}</h2>

            @unless(empty($test[$key]))

                @foreach($test[$key] as $command)

                    <li class="c4" id='{{ $key }}_{{ $command }}'>{{ $key }} {{ $command }}</li>

                @endforeach

            @endunless

            </ul>
        @endforeach

    @endunless

 </div>
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
