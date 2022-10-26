<?php

namespace App\Http\Controllers;

use App\Post;
//use App\Http\Requests\PostRequest;　//useする
use App\Http\Requests\PostRequest;
use App\Genre;
use App\Dance_type;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
        // クライアントインスタンス生成
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
     }
    //postsフォルダのindex.blade
    public function create(Genre $genre, Dance_type $dance_type)
    {
        return view('posts/create')->with(['genres' => $genre->get(), 'dancetypes' => $dance_type -> get()]);
    }

    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }
    
    
    
    public function store(Request $request, Post $post)
    {
      $input = $request['post'];
      $post->fill($input)->save();
      return redirect('/posts/' . $post->id);
    }
    
    
   public function edit(Post $post)
   {
    return view('posts/edit')->with(['post' => $post]);
   }
    
    
    public function update(PostRequest $request, Post $post)
    {
    $input_post = $request['post'];
    $post->fill($input_post)->save();

    return redirect('/posts/' . $post->id);
    }
    
    public function delete(Post $post)
    {
      $post->delete();
      return redirect('/');
    }
    
    
}
