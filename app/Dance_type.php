<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dance_type extends Model
{
     public function posts()   
    {
    return $this->hasMany('App\Post');  
    }
    
    public function getByDanceType(int $limit_count = 5)
    {
        return $this->posts()->with('dance_type')->orderBy('updated_at','DESC')->paginate($limit_count);
    }
}
