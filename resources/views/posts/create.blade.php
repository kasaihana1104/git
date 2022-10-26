<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        @extends('layouts.app')
        @section('content')
        <h1>Blog Name</h1>
        <form action="/posts" method="POST">
            @csrf
             <div class="genre">
                <h2>曲ジャンル</h2>
                 <select name="post[genre_id]">
                  @foreach($genres as $genre)
                     <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                  @endforeach
                 </select>
            </div>
             <div class="dance_types">
                <h2>ダンスの内容</h2>
                 <select name="post[dance_type_id]">
                  @foreach($dancetypes as $dancetype)
                     <option value="{{ $dancetype->id }}">{{ $dancetype->name }}</option>
                  @endforeach
                 </select>
            </div>
            <div class="musictitle">
                <h2>曲名</h2>
               <textarea name="post[musictitle]" placeholder="Dynamite" ></textarea>
            </div>
             <div class="artist">
                <h2>アーティスト名</h2>
                <textarea name="post[artist]" placeholder="BTS" ></textarea>
            </div>
             <div class="placticeplace">
                <h2>練習場所</h2>
                <textarea name="post[placticeplace]" placeholder="渋谷" ></textarea>
            </div>
             <div class="goal">
                <h2>目標イベント時期など</h2>
                <textarea name="post[musictitle]" placeholder="3~5月のイベント発表に向けて、撮影のみ" ></textarea>
            </div>
             <div class="url">
                <h2>参考動画URL</h2>
                <textarea name="post[url]" placeholder="本家反転ver https://youtu.be/QvL2LNwWIYw" ></textarea>
            </div>
            <div class="sns">
                <h2>連絡用・参考用SNS</h2>
                <textarea name="post[url]" placeholder="Instagram→○○、Twitter→○○,Youtube→○○"></textarea>
            </div>
            <div class="others">
                <h2>備考欄・意気込みなど</h2>
                <textarea name="post[others]" placeholder="初心者大歓迎です、楽しくやりましょう！/衣装や踊り方など本家に忠実に再現します" ></textarea>
            </div>
           
            
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
        @endsection
    </body>
</html>