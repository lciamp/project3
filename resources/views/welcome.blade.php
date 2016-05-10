@extends('layout')

@section('content')

    <h1>Lou Ciampanelli</h1>

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
