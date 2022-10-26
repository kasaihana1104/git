<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    'musictitle',
    'artist',
    'dance_type_id',
    'genre_id',
    'others',
    'sns',
    'url',
    'placticeplace',
    'goal',
    ];
    public function getPaginateByLimit(int $limit_count = 5)
    {
    return $this::with(['genre', 'dance_type'])->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function genre()
    {
    return $this->belongsTo('App\Genre');
    }
    public function dance_type()
    {
    return $this->belongsTo('App\Dance_type');
    }
    //Categoryに対するリレーション

    //「1対多」の関係なので単数系に
}

//設計図