<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'user_id', 'category','title', 'content',
    ];

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
