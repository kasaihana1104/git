<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        @extends('layouts.app')
        @section('content')
        <h1>Blog Name</h1>
        <div class='post'>
            <h2 class='musictitle'>{{ $post->musictitle }}</h2>
                    <p class='artist'>{{ $post->artist}}</p>
                    <p class='placticeplace'>{{ $post->placticeplace }}</p>
                    <p class='goal'>{{ $post->goal }}</p>
                    <p class='url'>{{ $post->url}}</p>
                    <p class='sns'>{{ $post->sns }}</p>
                    <p class='others'>{{ $post->others }}</p>
                    <a href="/genres/{{ $post->genre->id }}">{{ $post->genre->name }}</a>
                    <a href="/dance_types/{{ $post->dance_type->id }}">{{ $post->dance_type->name }}</a>
        </div>
        <div class='back'>[<a href='/'>back</a>]</div>
        @endsection
    </body>
</html>