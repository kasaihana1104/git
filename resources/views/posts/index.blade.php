<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    
    </head>
    <body>
        @extends('layouts.app')
        @section('content')
        <h1>Blog Name</h1>
        [<a href='/posts/create'>create</a>]
        <div class='posts'>
            @foreach ($posts as $post)
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
                
                <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">delete</button> 
                </form>
            @endforeach
            <!--foreachとasはセットでいつも使っている-->
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        
       @endsection    
    </body>
</html>