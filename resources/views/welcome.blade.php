@extends('layout')

@section('content')
        <h1>Lou Ciampanelli</h1>

        <h2>git commands</h2>

        @unless (empty($test['git']))

            @foreach ($test['git'] as $command)

                <li id='git_{{ $command }}'>git {{ $command }}</li>

            @endforeach

        @endunless

        <h2>laravel 5.2</h2>

        @unless (empty($test['laravel']))

            @foreach ($test['laravel'] as $command)

                <li id='laravel_{{ $command }}'>{{ $command }}</li>

            @endforeach

        @endunless

        <h2>blade</h2>

        @unless (empty($test['blade']))

            @foreach ($test['blade'] as $command)

                <li id='blade_{{ $command }}'>{{ $command }}</li>

            @endforeach

        @endunless


@stop
