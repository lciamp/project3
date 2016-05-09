@extends('layout')

@section('content')
        <h1>Lou Ciampanelli</h1>

        <h2>git commands</h2>

    @unless (empty($gitCommands))

        @foreach ($gitCommands as $command)

            <li id='git_{{ $command }}'>git {{ $command }}</li>

        @endforeach

    @endunless

    <h2>directions</h2>

    @unless (empty($directions))

        @foreach ($directions as $direction)

            <li id='{{ $direction }}'>{{ $direction }}</li>

        @endforeach

    @endunless

@stop
