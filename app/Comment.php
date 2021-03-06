<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'article_id', 'user_id','content',
    ];

    public function article()
    {
        return $this->belongsTo('App\Article');
    }
}
