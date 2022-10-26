<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
     public function posts()   
    {
    return $this->hasMany('App\Post');  
    }
    
    public function getByGenre(int $limit_count = 5)
    {
        return $this->posts()->with('genre')->orderBy('updated_at','DESC')->paginate($limit_count);
    }
}
