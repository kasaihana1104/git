<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
class GenreController extends Controller
{
     public function index(Genre $genre)
    {
    return view('genres.index')->with(['posts' => $genre->getByGenre()]);
    }
}
